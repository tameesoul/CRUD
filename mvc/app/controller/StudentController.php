<?php

namespace app\controller;
use core\App;
class StudentController{

    public function create(){
        return require "app/view/student/create.php";
    }

    public function store(){
        App::get('database')->insert('student', [

            "name"=>$_POST['name'] , 
            "major"=>$_POST['major']
        ]);
    }

}