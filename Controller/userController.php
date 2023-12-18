<?php

class UserController
{
    protected $user;
    
    public function __construct()
    {
        session_start();
        if (!array_key_exists('user', $_SESSION)) {
            header("Location: index.php?controller=security&action=login");
        } else {
            $this->user = unserialize($_SESSION["user"]);
        }
    }

    public function getUser()
    {
        return $this->user;
    }
}