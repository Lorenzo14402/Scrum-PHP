<?php
/**
 * Created by PhpStorm.
 * User: kajde
 * Date: 13-6-2019
 * Time: 15:31
 */
 class Database {
 public $host = "localhost";
 public $username = "root";
 public $password = "";
 public $db = "userlogin";

 function connectDB(){
     $conn = new mysqli($this->host, $this->username, $this->password, $this->db);
     return $conn;
 }

 }
 ?>