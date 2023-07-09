<?php 
use app\Database\Connect;
use app\Database\QueryBuilder;
$app ['config'] = require "config.php";
$app ['database'] = new QueryBuilder(
    Connect::connection($app['config']['database'])
);
$app['database']->insert(
    'student', [
        'name'=>'ahmed'  ,
       'major'=>'cs' ,
       //"age"=>20
    ]
    );
function views($file,$data){
    extract($data);
    return require "app/view/$file.view.php";
}