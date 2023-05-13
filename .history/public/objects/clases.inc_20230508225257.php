<?php
    class Database {
        private string $localhost, $serverUser, $userPass,$database;
        private object $newObjMysql;

        function __construct($localhost, $serverUser, $userPass,$database,$newObjMysql){
            $this -> localhost = $localhost;
            $this -> serverUser = $serverUser;
            $this -> userPass = "mdv21.389863";
            $this -> database = "myBlog";
            $this -> objMysql = new mysqli("$localhost","$serverUser","$userPass","$database");
        }
    } 
?>