<?php

    include_once("./../objects/clases.inc.php");
    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
    function addPost($databaseConnect,$user){
        $arrayDataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
            <h1><?php $arrayDataPost[0] ?></h1>
            <img src="<?php $arrayDataPost[2]?>" alt="post1" >
            <p><?php $arrayDataPost[</p>
        </article>
        <?php
    }
?>