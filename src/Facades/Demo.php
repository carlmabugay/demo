<?php

namespace Carlmabugay\Demo\Facades;

use Illuminate\Support\Facades\Facade;

class Demo extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'demo';
    }
}