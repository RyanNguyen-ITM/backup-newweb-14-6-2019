<?php

if(!defined('_public')) die('Error');

class database{
    var $conn; # Chuoi ket noi
    # Tham so ket noi
    var $host;
    var $user;
    var $pass;
    var $database;

    # Truy van
    var $sql = ''; 

    function database($config = array()){ # Ham khoi tao doi tuong class database
        if(!empty($config)){
            $this->init($config);   
            $this->connect();
        }
    }

    # Khoi tao tham so ket noi
    function init($config = array()){
        foreach($config as $key => $value){
            $this->$key = $value;   # $key duoc cau hinh giong bien tham so ket noi
        }
    }

    function connect(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass);
        # Kiem tra ket noi
        if(!$this->conn){
            die("Could not connect: " . mysqli_error($this->conn));
        }

        # Kiem tra CSDL
        if(!mysqli_select_db($this->conn, $this->database)){
            die(mysqli_errno($this->conn) . " : " . mysqli_error($this->conn));
        }

        mysqli_query($this->conn, "SET NAMES \"UTF8\"");
    }
}


?>