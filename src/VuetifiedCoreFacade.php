<?php

namespace Codeitlikemiley\VuetifiedCore;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeitlikemiley\VuetifiedCore\Skeleton\SkeletonClass
 */
class VuetifiedCoreFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vuetified-core';
    }
}
