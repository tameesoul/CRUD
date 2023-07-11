<?php 
//use app\controller;
$router->get("","AppController@home");
$router->get("home","AppController@home");
$router->get("student/create","StudentController@create");
$router->post("student/store","StudentController@store");
