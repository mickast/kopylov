<?php

class Router
{
    public $routes;

    public function __construct()
    {
        $routerPath = ROOT . '/app/config/routes.php';
        $this->routes = include($routerPath);
    }

    public function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
         $url = $this->getUri();
         $buf = explode('/',$url);
         $del = array_shift($buf);
         $url = implode($buf);
        $result = null;
        foreach($this->routes as $uriPattern => $path){
            if($uriPattern == $url){

                $segments = explode('/',$path);
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                $controllerFile = ROOT.'/app/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    //echo $controllerName.' '.$actionName;
                    include_once($controllerFile);
                    $controllerObject = new $controllerName;
                    $result = $controllerObject->$actionName();
                    if($result != null) {
                        break;
                    }
                }
            }
        }
        if($result == null){
            include_once(ROOT.'/app/controllers/ErrorController.php');
            $controllerObject = new ErrorController;
        }
    }

}

?>