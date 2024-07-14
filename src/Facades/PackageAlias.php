<?php

namespace quanghuy\first_package\Facades;

use Illuminate\Support\Facades\Facade;

class PackageAlias extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'package';
    }
}
