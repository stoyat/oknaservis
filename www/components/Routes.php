<?php

class Routes {
    
    protected $routes;
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    //строка запроса
    private function getURI () {
        if (!empty($_SERVER["REQUEST_URI"])) {
            return trim($_SERVER["REQUEST_URI"], '/');
        }
    }
    
    public function run () {
        //получаем строку запроса
        $uri = $this->getURI();
        //проверим наличие запроса в роуте
        foreach ($this->routes as $uriPattern=>$path) {
            //Сравниваем данные $uriPattern и строку запроса $uri
            if(preg_match("~$uriPattern~", $uri)){
                
                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                //Определить какой контроллер и action обрабатывают запрос
                $segments = explode('/', $internalRoute);
                
                //Получаем имя контроллера
                $controllerName = array_shift($segments). 'Controller';
                $controllerName = ucfirst($controllerName);
                
                //Получаем имя action
                $actionName = 'action' . ucfirst(array_shift($segments));
                               
                $parameters = $segments;
                
                //Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if(file_exists($controllerFile)){

                    include_once($controllerFile);

                }
                                
                $controllerObject = new $controllerName();
                $result = call_user_func_array(array($controllerObject,$actionName),$parameters);
                
                if($result !=NULL) {
                    break;
                }
            }
        }
    }
}
