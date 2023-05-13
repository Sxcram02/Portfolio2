<?php

    include_once("./../objects/clases.inc.php");
    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
    function addPost($databaseConnect,$title,$subtitle,$image,$description){
        $dataPostArray = [$title,$subtitle,$image,$description];
        
    }
?>