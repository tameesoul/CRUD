<?php 
namespace app\Database;
use PDOException;
class QueryBuilder{

    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function insert($table, $parames){
        $sql = sprintf(
            "insert into %s (%s) values (%s)" , 
            $table , 
            implode(',' , array_keys($parames)) , 
            ':' .implode(',:' , array_keys($parames))    
        );

        try {
           $statment = $this->pdo->prepare($sql);
           $statment->execute($parames);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}