<?php


namespace App\Todo\Responders;


class StoreTodoResponder implements Responder
{
    public function respond()
    {
        return response(200);
    }
}
