<?php
namespace app\controller;
class AppController{
    public function home(){

        $home = [

            [
              "name"=>"empty"  
            ]
        ];
        return views('home', compact("home"));
    }
}
