<?php
    function addPost($user){
        $mysqlConection = new Database("localhost","root","mdv21.389863","blog");
        $query = "SELECT blg.titulo as titulo, blg.descripcion as descripcion FROM blog blg JOIN users usr ON blg.user = usr.clientName WHERE usr.clientName = '$user'";

        $result = $this ;
        echo "<article>";
        foreach ($result as $value) {
            echo "<h1>{$value['titulo']}</h1>";
        }
        echo "</article>";
    }
?>