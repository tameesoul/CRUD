<?php 
//use app\controller;
$router->get("","AppController@home");
$router->get("home","AppController@home");
$router->get("student/create","StudentController@create");
$router->post("student/store","StudentController@store");
$router->get("student/index","StudentController@index");
$router->get("student/show","StudentController@show");
