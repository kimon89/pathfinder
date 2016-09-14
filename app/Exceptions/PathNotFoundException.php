<?php

namespace App\Exceptions;

class PathNotFoundException extends \Exception
{
    public function getError()
    {
        return 'Path was not found for '.$this->getMessage();
    }
}
