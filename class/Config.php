<?php

class Config
{
    //properties
    private $servername = "localhost";
    private $username = "root";
    private $password = "Password";
    private $database = "PHPBootCamp";

    public $conn;

    public function __construst()
    {
        //Create the connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password,$this->database);

        //check connection
        if ($this->conn->connect_error) {
            die("Connection error: " . $this->conn->connect_error);

        }
        return $this->conn;
    }
}