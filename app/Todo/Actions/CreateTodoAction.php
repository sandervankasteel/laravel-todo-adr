<?php

namespace App\Todo\Actions;

use App\Todo\Responders\CreateTodoResponder;

class CreateTodoAction
{
    public $responder;

    public function __construct(CreateTodoResponder $responder)
    {
        $this->responder = $responder;
    }

    public function __invoke()
    {
        return $this->responder->respond();
    }
}
