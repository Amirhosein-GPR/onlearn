<?php

require_once "system/Route.php";

Route::check("home/show", function()
{
    Home::view("main/Home");
});

Route::check("error/show", function()
{
    $indexTool = IndexTool::getInstance();
    if ($indexTool->getParams()[0] = 404)
    {
        echo "Page not found!<br>Bad address";
    }
});

Route::pageNotFound(function()
{
    echo "Page not found!";
});