<?php

    include_once("./../objects/clases.inc.php");
    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
    function addPost($databaseConnect,$user){
        $dataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
            <h1></h1>
            <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="post1" >
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ex modi cum labore accusantium dolorem magnam recusandae sunt dicta delectus!</p>
        </article>
        <?php
    }
?>