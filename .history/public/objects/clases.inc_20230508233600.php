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

        function getUser($email,$contrasenia){
            $mySqlConnection = $this -> newObjMysql;
            $userQuery = "SELECT usr.name as username, usr.contrasenia as contrasenia FROM user WHERE usr.name = '$email' AND usr.contrasenia = '$contrasenia';";
            $result = $mySqlConnection -> query($userQuery);
            if($result){
                return true;
            }else {
                return false;
            }
        }

        function setPost(array $postDataArray){
            if(!(func_num_args()!=func_get_args())){
                $columnArray = "'".implode("','",$postDataArray)."'";
                $mysqlConnect = $this -> newObjMysql;
                $insertBlog = "INSERT INTO post VALUES ($columnArray)";
                $mysqlConnect -> query($insertBlog);
                if(mysqli_affected_rows($mysqlConnect)>0){
                    return true;
                }else {
                    return false;
                }
            }else {
                return false;
            }
        }

        function getPost($user){
            $mySqlConnection = $this -> newObjMysql;
            $getQuery = "SELECT * FROM blog bl JOIN users usr ON ;";
            $result = $mySqlConnection -> query($getQuery);
            return $result;
        }
    } 
?>