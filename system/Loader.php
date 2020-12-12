<?php

spl_autoload_register(function($fileName)
{
    if (file_exists("system/$fileName.php"))
    {
        require_once "system/$fileName.php";
    }
    else if (file_exists("controller/$fileName.php"))
    {
        require_once "controller/$fileName.php";
    }
    else if (file_exists("model/$fileName.php"))
    {
        require_once "model/$fileName.php";
    }
});

require_once "Routes.php";