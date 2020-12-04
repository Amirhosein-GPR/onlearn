<?php

abstract class Controller
{
    protected static $instance;

    public static abstract function getInstance();
    
}