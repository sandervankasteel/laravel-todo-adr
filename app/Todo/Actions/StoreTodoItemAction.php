<?php

namespace App\Todo\Actions;

use App\Http\Requests\StoreTodoItem;
use App\Todo\Repositories\TodoRepository;
use App\Todo\Responders\StoreTodoResponder;
use Illuminate\Support\Facades\Auth;

class StoreTodoItemAction
{
    public $responder;

    public $repository;

    public function __construct(StoreTodoResponder $responder, TodoRepository $repository)
    {
        $this->responder = $responder;

        $this->repository = $repository;
    }

    public function __invoke(StoreTodoItem $request)
    {
        $validated = $request->validated();
        $user = Auth::user();

        $this->repository->createTodoItem($validated, $user);

        return $this->responder->respond();
    }
}
