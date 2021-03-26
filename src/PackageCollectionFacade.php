<?php

namespace spatie\PackageCollection;

use Illuminate\Support\Facades\Facade;

/**
 * @see \spatie\PackageCollection\PackageCollection
 */
class PackageCollectionFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'one-package-to-rule-them-all';
    }
}
