<?php

class database{
    // usser name 
    private $root = 'root';
    // password
    private $pass = '';
    // name server and name of data base
    private $host = "mysql:host=localhost;dbname=GlowGuru";
// fonction dde connection (pdo) 
    protected function connect(){
        $pdo = new PDO($this->host, $this->root, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
    
}