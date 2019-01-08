<?php
namespace App;

class Storage{
    const USERNAME="root";
    const PASSWORD="root";
    const HOST="mysqlhost";
    const DB="users-training";

    private function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;
        $connection = new \PDO("mysql:dbname=$db;host=$host", $username, $password);
        return $connection;
    }
    public function query($sql, $args=[]){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }

}