<?php

namespace MihaiBlebea\Template\Facades;

use Illuminate\Support\Facades\Facade;

class Template extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Template';
    }
}
