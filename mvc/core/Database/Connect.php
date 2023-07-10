<?php

namespace core\Database;

use PDO;
use PDOException;

class Connect
{
    public static function connection($config)
    {
        try {
            $dbh = new PDO($config['connection'], $config['username'], $config['password']);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}