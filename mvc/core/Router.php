<?php
namespace core; 

use app\controller\AppController;
class Router {
    public $routes = [
        'get'=>[

        ],
        'post'=>[

        ]
        ];

        public static function load($file){
            $router = new static; 
            require "app/routes.php";
            return $router; 
        }

        public function get($uri,$controller){
            return $this->routes['get'][$uri]=$controller; 
        }
        public function post($uri,$controller){
            return $this->routes['post'][$uri]=$controller; 
        }


        public function direct($uri,$request_method){
            if(array_key_exists($uri,$this->routes[$request_method])){
                return $this->callaction(...explode('@',$this->routes[$request_method][$uri]));
            }

            echo ("404: page not found");
            
        }


        public function callaction($controller,$action){
            $controller = "app\\controller\\{$controller}";
            $controller = new $controller;
            if(!method_exists($controller,$action)){
                echo ("404 : page not found");
            }
            return $controller->$action();
        }
}