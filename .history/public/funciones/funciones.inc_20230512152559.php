<?php

    include_once("./../objects/clases.inc.php");
    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
    function addPost($databaseConnect,$user){
        $arrayDataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
            <h1><?php $arrayDataPost[1] ?></h1>
            <p><?php $arrayDataPost[3]?></p>
        </article>
        <?php
    }
?>