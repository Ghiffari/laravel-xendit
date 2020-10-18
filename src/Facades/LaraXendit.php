<?php

namespace Ghiffariaq\LaraXendit\Facades;

use Illuminate\Support\Facades\Facade;

class LaraXendit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaraXendit';
    }
}