<?php

namespace App\Todo\Actions;


use App\Todo\Repositories\TodoRepository;
use App\Todo\Responders\ShowUnfinishedTodoResponder;
use Illuminate\Support\Facades\Auth;

class ShowUnfinishedTodoAction
{
    public $repository;

    public $responder;

    public function __construct(TodoRepository $repository, ShowUnfinishedTodoResponder $responder)
    {
        $this->repository = $repository;

        $this->responder = $responder;
    }

    public function __invoke()
    {
        $user = Auth::user();
        $todos = $this->repository->getUnifishedTodoItems($user);

        return $this->responder->respond($todos);
    }

}
