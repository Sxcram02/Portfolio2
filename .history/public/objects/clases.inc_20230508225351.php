<?php
    class Database {
        private string $localhost, $serverUser, $userPass,$database;
        private object $newObjMysql;

        function __construct($localhost, $serverUser, $userPass,$database,$newObjMysql){
            $this -> localhost = $localhost;
            $this -> serverUser = $serverUser;
            $this -> userPass = $userPass;
            $this -> database = $database;
            $this -> newObjMysql = $newObjMysql
        }
    } 
?>