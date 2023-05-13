<?php
    $timeSession=1800;
    session_set_cookie_params($timeSession);

    include("./../funciones/funciones.inc.php");

    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: ./../../index.php");
        exit();
    }

    if(isset($_POST['LOGOUT'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ./../../index.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == "post")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./../../media/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../styles/index.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>LogIn</title>
</head>
<body>
    <div class="page2-root">
        <header class="box-nav-bar">
            <h3 class="nav-title">M a r c o s</h3>
            <nav class="nav-bar">
                <ul>
                    <li><a href="/index.php">Home Page</a></li>
                    <li><a href="/index.php/">Work</a></li>
                    <li><a href="/">Blog</a></li>
                </ul>
            </nav>
            <form action="#" method="post">
                <input type="submit" name="LOGOUT" id="LOGIN" value="logout"/>
            </form>
        </header>
        <main class="page2-container">
            <h1 class="page2-title">LOGIN</h1>
            <form action="#" method="post">
                <section class="page2-target">
                    <label>Usuario: </label>
                    <input type="text" name="user" id="inputUser">
                    <label>Constraseña: </label>
                    <input type="text" name="contrasenia" id="">
                </section>
            </form>
        </main>
    </div>
</body>
</html>