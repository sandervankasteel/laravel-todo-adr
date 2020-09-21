<?php


namespace App\Todo\Repositories;


use App\Models\TodoItem;
use App\Models\User;

class TodoRepository
{

    public function createTodoItem(array $attributes, User $user)
    {
        $attributes['user_id'] = $user->id;

        return TodoItem::create($attributes);
    }

    public function getUnifishedTodoItems(User $user)
    {
        return TodoItem::where('user_id', $user->id)->get();
    }

}
