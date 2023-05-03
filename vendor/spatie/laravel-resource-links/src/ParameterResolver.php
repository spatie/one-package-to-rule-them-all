<?php

namespace Spatie\ResourceLinks;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
use ReflectionClass;
use ReflectionParameter;

class ParameterResolver
{
    /** @var \Illuminate\Database\Eloquent\Model|null */
    private $model;

    /** @var array */
    private $defaultParameters;

    public function __construct(?Model $model, array $defaultParameters = [])
    {
        $this->model = $model;

        $this->defaultParameters = $defaultParameters;
    }

    public function forRoute(Route $route): array
    {
        $providedParameters = $this->getProvidedParameters();

        return collect($route->signatureParameters())
            ->mapWithKeys(function (ReflectionParameter $signatureParameter) use ($providedParameters) {
                return [
                    $signatureParameter->getName() => $this->findParameter(
                        $signatureParameter,
                        $providedParameters
                    ),
                ];
            })
            ->reject(function ($parameter) {
                return $parameter === null;
            })
            ->all();
    }

    private function getProvidedParameters(): array
    {
        return $this->defaultParameters;
    }

    private function findParameter(ReflectionParameter $signatureParameter, array &$providedParameters)
    {
        if ($this->expectsModelAsParameter($signatureParameter)) {
            return $this->model;
        }

        if ($this->parameterWithKeyExists($signatureParameter, $providedParameters)) {
            return Arr::pull($providedParameters, $signatureParameter->getName());
        }

        if ($this->expectsPrimitiveParameter($signatureParameter)) {
            return $this->searchPrimitiveParameter($signatureParameter, $providedParameters);
        }

        $reflectionClass = $signatureParameter->getType() && ! $signatureParameter->getType()->isBuiltin()
                ? new ReflectionClass($signatureParameter->getType()->getName())
                : null;

        foreach ($providedParameters as $index => $providedParameter) {
            if (! is_object($providedParameter) || $reflectionClass === null) {
                continue;
            }

            if (! is_null($reflectionClass) && $reflectionClass->isInstance($providedParameter)) {
                return Arr::pull($providedParameters, $index);
            }
        }
    }

    private function expectsModelAsParameter(ReflectionParameter $signatureParameter): bool
    {
        if ($this->model === null) {
            return false;
        }

        $reflectionClass = $signatureParameter->getType() && ! $signatureParameter->getType()->isBuiltin()
            ? new ReflectionClass($signatureParameter->getType()->getName())
            : null;

        if ($reflectionClass === null) {
            return false;
        }

        return $reflectionClass->isInstance($this->model);
    }

    private function parameterWithKeyExists(
        ReflectionParameter $signatureParameter,
        array $providedParameters
    ): bool {
        return array_key_exists(
            $signatureParameter->getName(),
            $providedParameters
        );
    }

    private function expectsPrimitiveParameter(
        ReflectionParameter $signatureParameter
    ): bool {
        if ($signatureParameter->getType() === null) {
            return false;
        }

        return $signatureParameter->getType()->isBuiltin();
    }

    private function searchPrimitiveParameter(
        ReflectionParameter $signatureParameter,
        array &$providedParameters
    ) {
        foreach ($providedParameters as $index => $providedParameter) {
            if ($this->getParameterPrimitiveType($providedParameter) === $signatureParameter->getType()->getName()) {
                return Arr::pull($providedParameters, $index);
            }
        }
    }

    private function getParameterPrimitiveType($parameter): string
    {
        $typeName = gettype($parameter);

        return strtr($typeName, [
            'boolean' => 'bool',
            'integer' => 'int',
        ]);
    }
}
