<?php

class Admin{

    private $conn;

    public function __construct($db){

        $this->conn = $db;

    }

    public function login($username,$password){

        $sql="SELECT * FROM admin
        WHERE username='$username'
        AND password='$password'";

        $result=$this->conn->query($sql);

        return $result->num_rows;

    }

}

?>