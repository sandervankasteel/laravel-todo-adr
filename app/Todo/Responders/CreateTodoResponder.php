<?php


namespace App\Todo\Responders;


class CreateTodoResponder implements Responder
{

    public function respond()
    {
        return view('todo/create');
    }
}
