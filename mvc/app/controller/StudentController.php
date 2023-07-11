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
    public function index(){
        $students= App::get('database')->selectall('student');
        return viewscrud('student/index', compact('students'));
    }
    public function show(){
        $students = App::get('database')->select('student',$_GET['student_id']);
        return viewscrud("student/show" , compact('$students'));
    }

}