<?php

require_once "Controller.php";

class UserController extends Controller
{
    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new UserController();
        }
        return self::$instance;
    }

    public function register()
    {
        
    }
}