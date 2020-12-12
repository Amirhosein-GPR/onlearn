<?php
class Controller
{
    public static function view($viewPath, $pageData = null)
    {
        ob_start();
        require_once "view/$viewPath.php";
        $innerPage = ob_get_clean();
        require_once "system/theme/default.php";
    }
}