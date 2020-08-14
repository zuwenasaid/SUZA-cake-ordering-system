<?php

class database {

    public $servername = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'cakeorder';
    public $conn;

// Create connection

    public function connect() {
        $this->conn=new PDO('mysql:host=localhost;dbname=cakeorder','root','');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    }

}

?>