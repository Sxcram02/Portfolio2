    
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
        public function __construct($localhost, $serverUser, $userPass,$database){
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
        public function getUser($client,$pass):bool{
            $mySqlConnection = $this -> newObjMysql;
            $userQuery = "SELECT usr.clientName, usr.contrasenia FROM users usr WHERE usr.clientName='$client' AND usr.contrasenia = '$pass';";
            $result = $mySqlConnection -> query($userQuery);
            if($result){
                return true;
            }else {
                return false;
            }
        }
        

        public function setUser(){

        }

        /**
         * setPost
         *
         * @param  mixed $postDataArray
         * @return void
         */
        public function setPost(array $postDataArray){
            if(isset($postDataArray)){
                $codBlog = rand(1,1000);
                $columnArray = "'".implode("','",$postDataArray)."'";
                $mysqlConnect = $this -> newObjMysql;
                $insertBlog = "INSERT INTO blog (codBlog,titulo,imagen,subtitulo,descripcion,user) VALUES ($codBlog,$columnArray)";
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
        public function getPost()
        {
                $mySqlConnection = $this -> newObjMysql;
                $getQuery = "SELECT blg.imagen as imagen, blg.titulo as titulo, blg.descripcion as descripcion, blg.subtitulo as subtitulo FROM blog blg JOIN users usr ON blg.user = usr.clientName WHERE usr.clientName = 'marcos';";

                $result = $mySqlConnection -> query($getQuery);
                foreach($result as $dataPost){
                    echo "<article>";
                        echo "<img src='{$dataPost['imagen']}' alt='post1' />";
                        echo "<h1>{$dataPost['titulo']}</h1>";
                        echo "<h3>{$dataPost['subtitulo']}</h3>";
                        echo <
                        echo "<p>{$dataPost['descripcion']}</p>";
                    echo "</article>";
                }
        } 
}
    $sesion = new SesionUser("user");
    $databaseConnect= new Database("localhost","root","mdv21.389863","blog");
?>