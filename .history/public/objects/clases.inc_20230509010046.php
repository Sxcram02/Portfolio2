<?php
    class Database {
        private string $localhost, $serverUser, $userPass,$database;
        private object $newObjMysql;

        function __construct($localhost, $serverUser, $userPass,$database){
            $this -> localhost = $localhost;
            $this -> serverUser = $serverUser;
            $this -> userPass = $userPass;
            $this -> database = $database;
            $newObjMysql = new mysqli("$localhost","$serverUser","$userPass","$database");
            $this -> newObjMysql = $newObjMysql;
        }

        function getUser($client,$pass):bool{
            $mySqlConnection = $this -> newObjMysql;
            $userQuery = "SELECT usr.clientName, usr.contrasenia FROM users usr WHERE usr.clientName='$client' AND usr.contrasenia = '$pass';";
            $result = $mySqlConnection -> query($userQuery);
            if(mysqli_affected_rows($mySqlConnection)==1){
                return true;
            }else {
                return false;
            }
        }

        function setPost(array $postDataArray){
            if(!(func_num_args()!=func_get_args())){
                $codBlog = rand(1,1000);
                $columnArray = "'".implode("','",$postDataArray)."'";
                $mysqlConnect = $this -> newObjMysql;
                $insertBlog = "INSERT INTO blog VALUES ($codBlog,$columnArray)";
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
            $getQuery = "SELECT * FROM blog blg JOIN users usr ON blg.user = user.name WHERE usr.name = '$user';";
            $result = $mySqlConnection -> query($getQuery);
            return $result;
        }
    } 
?>