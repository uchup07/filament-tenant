<?php

namespace Uchup07\FilamentTenant\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uchup07\FilamentTenant\FilamentTenant
 */
class FilamentTenant extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uchup07\FilamentTenant\FilamentTenant::class;
    }
}
