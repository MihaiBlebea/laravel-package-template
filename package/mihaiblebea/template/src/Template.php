<?php

namespace MihaiBlebea\Template;

use MihaiBlebea\Template\ErrorHandler;


class Template
{
    public static function templateInit()
    {
        if(1 === 2)
        {
            return ErrorHandler::notWorking();
        }
    }
}
