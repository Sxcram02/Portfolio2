<?php

    include_once("./../objects/clases.inc.php");
    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
    function addPost($databaseConnect,$user){
        $arrayDataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
        <?php
            foreach($arrayDataPost as $dataPost){
                echo "<h1>{$dataPost['titulo']}<"
            }
        ?>
        </article>
        <?php
    }
?>