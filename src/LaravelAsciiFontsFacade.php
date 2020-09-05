<?php

namespace Dnabatchikov\LaravelAsciiFonts;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dnabatchikov\LaravelAsciiFonts\Skeleton\SkeletonClass
 */
class LaravelAsciiFontsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-ascii-fonts';
    }
}
