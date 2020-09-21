<?php

namespace App\Todo\Responders;

use LogicException;

interface Responder
{

    /**
     * @return mixed
     */
    public function respond();
}
