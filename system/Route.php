<?php

class Route
{
    private static $notFound = true;

    public static function check($route, $function)
    {
        $indexTool = IndexTool::getInstance();
        if ($indexTool->getRoute() == $route)
        {
            self::$notFound = false;
            $function();
            exit;
        }
    }

    public static function pageNotFound($function)
    {
        if (self::$notFound)
        {
            header("HTTP/1.1 404 Not Found");
            $function();
        }
    }
}