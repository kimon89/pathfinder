<?php

namespace App\Exceptions;

class NodeDoesNotExistException extends \Exception
{
    public function getError()
    {
        return "Node {$this->getMessage()} does not exist.";
    }
}
