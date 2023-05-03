<?php

namespace Spatie\TypeScriptTransformer\ClassPropertyProcessors;

use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Nullable;
use phpDocumentor\Reflection\Types\Object_;
use ReflectionClass;
use ReflectionProperty;
use Spatie\DataTransferObject\DataTransferObjectCollection;
use Spatie\TypeScriptTransformer\Support\UnknownType;

class DtoCollectionClassPropertyProcessor implements ClassPropertyProcessor
{
    use ProcessesClassProperties;

    public function process(Type $type, ReflectionProperty $reflection): ?Type
    {
        return $this->walk($type, function (Type $type) {
            if (! $type instanceof Object_) {
                return $type;
            }

            $fqs = ltrim((string) $type->getFqsen(), '\\');

            if (! is_subclass_of($fqs, DataTransferObjectCollection::class)) {
                return $type;
            }

            return new Array_($this->resolveType($fqs));
        });
    }

    private function resolveType(string $collectionClass): Type
    {
        $reflection = new ReflectionClass($collectionClass);

        $returnType = $reflection->getMethod('current')->getReturnType();

        if (empty($returnType)) {
            return new UnknownType();
        }

        $type = $returnType->isBuiltin()
            ? (new TypeResolver())->resolve($returnType->getName())
            : new Object_(new Fqsen('\\' . $returnType->getName()));

        return $returnType->allowsNull()
            ? new Nullable($type)
            : $type;
    }
}
