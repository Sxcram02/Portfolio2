<?php

    include_once("./../objects/clases.inc.php");
    
    function addPost($databaseConnect,$user){
        $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
        $arrayDataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
        <?php
            foreach($arrayDataPost as $dataPost){
                echo "<img src='' alt='' />";
                echo "<h1>{$dataPost['titulo']}</h1>";
                echo "<p>{$dataPost['descripcion']}</p>";
            }
        ?>
        </article>
        <?php
    }
?>