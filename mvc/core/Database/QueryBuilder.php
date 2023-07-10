<?php 
namespace core\Database;
use PDO;
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

    public function selectAll($table){
        $sql = sprintf("select *from (%s)",$table);
        try {
            $statment = $this->pdo->prepare($sql);
            $statment ->execute();
            return $statment->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function select($table, $where, $parame)
    {
        $sql = sprintf("SELECT * FROM %s WHERE %s", $table, $where);
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parame);
            return $statement->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $set, $where, $params)
    {
        $sql = sprintf(
            "update %s set %s where %s",
            $table,
            $set,
            $where
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($params);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}