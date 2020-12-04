<?php

class IndexTool
{
    private static $instance;
    private $controller;
    private $action;
    private $params;

    public static function getInstance() : IndexTool
    {
        if (self::$instance == null)
        {
            self::$instance = new IndexTool();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $requestUri = $_SERVER["REQUEST_URI"];
        if (isset($requestUri))
        {
            if (strpos($requestUri, '/') !== false)
            {
                $requestUri = explode('/', $requestUri);
                array_shift($requestUri);
                $paramsCount = count($requestUri);

                if ($paramsCount > 1)
                {
                    $this->controller = $requestUri[0];
                    $this->action = $requestUri[1];
                }
                else
                {
                    $this->controller = "home";
                    $this->action = "show";
                }

                if ($paramsCount > 2)
                {
                    for ($i = 2; $i < $paramsCount; $i++)
                    {
                        $this->params[] = $requestUri[$i];
                    }
                }
                else
                {
                    $this->params = NULL;
                }
            }
            else
            {
                $this->controller = "error";
                $this->action = "show";
                $this->params = array("404");
            }
        }
        else
        {
            $this->controller = "home";
            $this->action = "show";
        }
    }

    public function initialize()
    {
        $action = $this->action;
        $this->controller = ucfirst($this->controller) . "Controller";

        require_once "controller/" . $this->controller . ".php";
        echo $this->controller;        
        $this->controller = $this->controller::getInstance();
        $this->controller->$action($this->params);
    }
}