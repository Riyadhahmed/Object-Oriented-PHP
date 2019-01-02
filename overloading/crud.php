<?php

/*

A CRUD (Create, Read, Update, Delete) Operation using method overloading

*/

class CRUD {
    private $conn;

    public function __construct($host,$user,$pass,$db){
        $this->conn = new mysqli ($host,$user,$pass,$db);

        if($this->conn->connect_errno){
            die("Connection Fail for: ".$this->conn->connect_error);
        }else{
            echo 'connected to server and database';
        }

    }
}

$db = new CRUD('localhost', 'root', '', '');