<?php

    include("./../objects/clases.inc.php");
    
    function addPost($databaseConnect,$user){
        $arrayDataPost= $databaseConnect -> getPost($user);
        ?>
        <article>
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