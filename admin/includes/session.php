<?php

class Session
{
    private $signed_in;
    public $user_id;

    public function __construct()
    {
        session_status();
    }

}

$session = new Session();
