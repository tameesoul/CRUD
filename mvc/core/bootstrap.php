<?php 
use core\Database\Connect;
use core\Database\QueryBuilder;
$app ['config'] = require "config.php";
$app ['database'] = new QueryBuilder(
    Connect::connection($app['config']['database'])
);
// $app['database']->insert(
//     'student', [
//         'name'=>'mostafa'  ,
//        'major'=>'cs' ,
//        //"age"=>20
//     ]
//     );
 var_dump($app['database']->select('student','name = ?',["mostafa"])
);
function views($file,$data){
    extract($data);
    return require "app/view/$file.view.php";
}