<?php
class Controller
{
    public static function view($pageData = null)
    {
        ob_start();
        $indexTool = IndexTool::getInstance();
        require_once "view/" . $indexTool->getRoute() . ".php";
        $innerPage = ob_get_clean();
        require_once "system/theme/default.php";
    }
}