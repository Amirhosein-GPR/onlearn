<?php

class IndexTool
{
    private static $instance;
    private $route;
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
                    $this->route = $requestUri[0] . '/' . $requestUri[1];
                }
                else
                {
                    if ($requestUri[0] == "home" || $requestUri[0] == "")
                    {
                        $this->route = "home/show";                        
                    }
                    else
                    {
                        $this->route = "error/show";
                        $this->params = array(404);
                    }
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
        }
        else
        {
            $this->route = "home/show";
        }
    }

    public function getRoute()
    {
        return $this->route;
    }
    
    public function getParams()
    {
        return $this->params;
    }
}