<?php

namespace Hex0gen\LaravelRateit;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hex0gen\LaravelRateit\Skeleton\SkeletonClass
 */
class LaravelRateitFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-rateit';
    }
}
