    
    <?php
    class SesionUser {
        private string $sesion;
        private function __construct($sesion){
            $this -> sesion = $sesion;
        }
    }

    /**
     * Database
     */
    class Database {
        private string $localhost, $serverUser, $userPass,$database;
        private object $newObjMysql;
        
        /**
         * __construct
         *
         * @param  mixed $localhost
         * @param  mixed $serverUser
         * @param  mixed $userPass
         * @param  mixed $database
         * @return void
         */
        function __construct($localhost, $serverUser, $userPass,$database){
            $this -> localhost = $localhost;
            $this -> serverUser = $serverUser;
            $this -> userPass = $userPass;
            $this -> database = $database;
            $newObjMysql = new mysqli("$localhost","$serverUser","$userPass","$database");
            $this -> newObjMysql = $newObjMysql;
        }
        
        /**
         * getUser
         *
         * @param  mixed $client
         * @param  mixed $pass
         * @return bool
         */
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
        
        /**
         * setPost
         *
         * @param  mixed $postDataArray
         * @return void
         */
        function setPost(array $postDataArray){
            if(!empty($postDataArray)){
                $codBlog = rand(1,1000);
                $columnArray = "'".implode("','",$postDataArray)."'";
                $mysqlConnect = $this -> newObjMysql;
                $insertBlog = "INSERT INTO blog (codBlog,titulo,subtitulo,descripcion,user) VALUES ($codBlog,$columnArray)";
                $mysqlConnect -> query($insertBlog);
                (mysqli_affected_rows($mysqlConnect))?true:false;
            }else {
                echo "Introduce los valores adecuados";
            }
        }
        
        /**
         * getPost
         *
         * @param  mixed $user
         * @return void
         */
        function getPost($user){
            $mySqlConnection = $this -> newObjMysql;
            $getQuery = "SELECT * FROM blog blg JOIN users usr ON blg.user = user.name WHERE usr.name = '$user';";
            $result = $mySqlConnection -> query($getQuery);
            return $result;
        }
    } 
    $sesion = new SesionUser("")
?>