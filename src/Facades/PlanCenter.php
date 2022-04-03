<?php

namespace MidiaSimples\PlanCenterSDK\Facades;

use Illuminate\Support\Facades\Facade;

class PlanCenter extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-plancenter';
    }
}
