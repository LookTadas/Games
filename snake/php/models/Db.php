<?php

class Db {
    public $connect;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "score_db";
        return $this->connect = new mysqli($servername, $username, $password, $db);
    }





}