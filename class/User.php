<?php
require_once "Config.php";

class User extends Config{
    public function signin($email, $password){
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result=$this->conn->query($sql);
        if($result->num_rows > 0){
            session_start();
            $row=$result->fetch_assoc();
            $_SESSION['login_id'] = $row['id'];
            header("Location: dashboard.php");
        }
        else{
            echo "Invalid Username or Password";
        }
    }
}