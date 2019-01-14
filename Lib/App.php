<?php

namespace Lib;

use Lib\View;



class App {
    protected static $router; 

    protected const CONTROLLER_ROOT = 'Webnets\\controllers\\';


    /**
     * Get the value of router
     */ 
    public static function getRouter()
    {
        return self::$router;
    }


    public static function run($uri) {
        self::$router = new Router($uri);


        $controller_class =  self::CONTROLLER_ROOT . ucfirst(self::$router->getController()).'Controller';
        $controller_method = strtolower(self::$router->getMethodPrefix().self::$router->getAction());

       //Callring Controller's method;
        $controller_object = new $controller_class();
        if(method_exists($controller_object, $controller_method)) {
            //Controller's action may return a view path
            $view_path = $controller_object->$controller_method();

            $view_object = new View($controller_object->getData(), $view_path);
            $content = $view_object->render();

        } else {
            throw new \Exception('Method ' . $controller_method . 'Of class ' . $controller_class . ' does not exist');
        }

        $layout = self::$router->getRoute();
        $layout_path = VIEWS_PATH.DS.$layout.'.html';

        $layout_view_object = new View(compact('content'), $layout_path );

        echo $layout_view_object->render();


    }
}