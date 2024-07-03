<?php

require "./config.php";
$config = require "./config.php";

class Database {
    public $connection;
    public $config;

    public function __construct($config, $username = 'root', $password ='root') 
    {
        $dsn = 'mysql:' . http_build_query($config, 'root', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []) 
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
        
    }
}
