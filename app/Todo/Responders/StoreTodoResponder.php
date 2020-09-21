<?php


namespace App\Todo\Responders;


class StoreTodoResponder implements Responder
{
    public function respond()
    {
        return redirect(route('dashboard'))->with(['success_message', 'Successfully created']);
    }
}
