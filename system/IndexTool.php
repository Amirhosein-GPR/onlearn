<?php

class IndexTool
{
    private static $instance;
    private $uppderCategory;
    private $innerCategory;
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
                    $this->uppderCategory = $requestUri[0];
                    $this->innerCategory = $requestUri[1];
                    $this->route = $requestUri[0] . '/' . $requestUri[1];
                }
                else
                {
                    if ($requestUri[0] == "main" || $requestUri[0] == "")
                    {
                        $this->uppderCategory = "main";
                        $this->innerCategory = "home";
                        $this->route = $this->uppderCategory . '/' . $this->innerCategory;
                    }
                    else
                    {
                        $this->uppderCategory = "report";
                        $this->innerCategory = "error";
                        $this->route = $this->uppderCategory . '/' . $this->innerCategory;
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
            $this->uppderCategory = "main";
            $this->innerCategory = "home";
            $this->route = $this->uppderCategory . '/' . $this->innerCategory;
        }
    }

    public function getUpperCategory()
    {
        return $this->uppderCategory;
    }

    public function getInnerCategory()
    {
        return $this->innerCategory;
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