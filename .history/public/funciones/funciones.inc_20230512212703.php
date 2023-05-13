<?php
    function addPost($databaseConnect,$user){
        $arrayDataPost= $databaseConnect -> getPost($user);
        echo "<article>";
            foreach($arrayDataPost as $dataPost){
                echo "<img src='' alt='' />";
                echo $dataPost['titulo']
                // echo "<h1>{$dataPost['titulo']}</h1>";
                // echo "<p>{$dataPost['descripcion']}</p>";
            }
        echo "</article>";
    }
?>