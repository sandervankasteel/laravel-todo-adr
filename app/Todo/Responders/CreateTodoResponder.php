<?php


namespace App\Todo\Responders;


class CreateTodoResponder
{

    public function respond()
    {
        return view('todo/create');
    }
}
