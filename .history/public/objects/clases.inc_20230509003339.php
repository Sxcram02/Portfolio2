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

        function getUser():bool{
            $mySqlConnection = $this -> newObjMysql;
            $userQuery = "SELECT usr.clientName, usr.contrasenia FROM users usr WHERE usr.clientName='marcos' AND usr.contrasenia = '123456';";
            $result = $mySqlConnection -> query($userQuery);
            if(mysqli_affected_rows($mySqlConnection)=1){
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
            $getQuery = "SELECT * FROM blog blg JOIN users usr ON blg.user = user.name WHERE usr.name = '$user';";
            $result = $mySqlConnection -> query($getQuery);
            return $result;
        }
    } 
?>