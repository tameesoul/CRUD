<?php 
use core\App;
use core\Database\Connect;
use core\Database\QueryBuilder;
App::bind('config', require'config.php');
App::bind('database', new QueryBuilder(
    Connect::connection(App::get('config')['database'])
));



// $app['database']->insert(
//     'student', [
//         'name'=>'mostafa'  ,
//        'major'=>'cs' ,
//        //"age"=>20
//     ]
//     );
//  var_dump($app['database']->select('student','name = ?',["mostafa"])
// );
// $app['database']->update('student',"name = ? , major = ?" , 'student_id = ?' , ["khaled" ,"it" , 3]);
//$app['database']->delete('student',3);
function views($file,$data){
    extract($data);
    return require "app/view/$file.view.php";
}
function viewscrud($file,$data){
    extract($data);
    return require "app/view/$file.php";
}