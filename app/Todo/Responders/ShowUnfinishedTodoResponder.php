<?php


namespace App\Todo\Responders;


class ShowUnfinishedTodoResponder implements Responder
{
    public function respond($todos = [])
    {
        return view('todo/show_unfinished', compact(
            'todos'
        ));
    }
}
