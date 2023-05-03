<?php

namespace Spatie\Ssr\Engines;

use Spatie\Ssr\Engine;
use Spatie\Ssr\Exceptions\EngineError;
use V8Js;
use V8JsException;

class V8 implements Engine
{
    /** @var \V8Js */
    protected $v8;

    public function __construct(V8Js $v8)
    {
        $this->v8 = $v8;
    }

    public function run(string $script): string
    {
        try {
            ob_start();

            $this->v8->executeString($script);

            return ob_get_contents();
        } catch (V8JsException $exception) {
            throw EngineError::withException($exception);
        } finally {
            ob_end_clean();
        }
    }

    public function getDispatchHandler(): string
    {
        return 'print';
    }
}
