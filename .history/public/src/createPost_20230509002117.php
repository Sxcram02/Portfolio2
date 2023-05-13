<?php
    $timeSession=1000;
    session_set_cookie_params($timeSession);
    session_start();

    if($_SESSION['client'] != "boss"){
        header("Location: ./login.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../styles/index.css" >
    <link rel="shortcut icon" href="./../../media/logo2.png" type="image/x-icon">
    <title>New Post</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
</body>
</html>