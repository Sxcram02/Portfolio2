    
    <?php
    class SesionUser {
        private string $sesion;
        public function __construct($sesion){
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
        function getPost(string $user)
        {
            if(func_num_args()){
                $mySqlConnection = $this -> newObjMysql;
                $getQuery = "SELECT blg.titulo as titulo, blg.descripcion as descripcion FROM blog blg JOIN users usr ON blg.user = usr.clientName WHERE usr.clientName = '$user';";
                $result = $mySqlConnection -> query($getQuery);
                $arrayDataPost = mysqli_fetch_assoc($result);
                echo "<article>";
                    foreach($arrayDataPost as $dataPost){
                        echo "<img src='' alt='' />";
                        echo $dataPost['titulo'];
                        echo "<h1>{$dataPost['titulo']}</h1>";
                        echo "<p>{$dataPost['descripcion']}</p>";
                    }

                echo "</article>";
            }else {
                echo "Introduce el usuario del post";
            }
    } 
}
    $sesion = new SesionUser("user");
?>