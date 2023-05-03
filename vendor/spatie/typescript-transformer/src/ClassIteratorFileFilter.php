<?php

namespace Spatie\TypeScriptTransformer;

use hanneskod\classtools\Iterator\ClassIterator;
use hanneskod\classtools\Iterator\Filter;
use hanneskod\classtools\Iterator\Filter\FilterTrait;
use Traversable;

class ClassIteratorFileFilter extends ClassIterator implements Filter
{
    use FilterTrait;

    protected string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getIterator(): Traversable
    {
        foreach ($this->getBoundIterator() as $className => $reflectedClass) {
            /** @var \ReflectionClass $reflectedClass */
            if (realpath($reflectedClass->getFileName()) === realpath($this->path)) {
                yield $className => $reflectedClass;
            }
        }
    }
}
