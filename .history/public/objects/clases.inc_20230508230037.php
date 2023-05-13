<?php
    class Database {
        private string $localhost, $serverUser, $userPass,$database;
        private object $newObjMysql;

        function __construct($localhost, $serverUser, $userPass,$database,$newObjMysql){
            $this -> localhost = $localhost;
            $this -> serverUser = $serverUser;
            $this -> userPass = $userPass;
            $this -> database = $database;
            $newObjMysql = new mysqli("$localhost","$serverUser","$userPass","$database");
            $this -> newObjMysql = $newObjMysql;
        }

        function setPost(array $postDataArray){
            if(!(func_num_args()!=func_get_args())){
                $columnArray = "'".implode("','",$postDataArray)."'";
                $mysqlConnect = $this -> newObjMysql;
                $insertBlog = "INSERT INTO post VALUES ($columnArray)";
                $mysqlConnect -> query($insertBlog);
                if()
            }
        }
    } 
?>