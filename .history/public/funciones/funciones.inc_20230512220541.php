<?php
    function addPost($user){
        $mysqlCon = new mysqli("localhost","root","mdv21.389863","blog");
        $query = "SELECT blg.titulo as titulo, blg.descripcion as descripcion FROM blog blg JOIN users usr ON blg.user = usr.clientName WHERE usr.clientName = '$user'";

        $result = $mysql -> query($query);
        echo "<article>";
        foreach ($result as $value) {
            echo "<h1>{$value['titulo']}</h1>";
        }
        echo "</article>";
    }
?>