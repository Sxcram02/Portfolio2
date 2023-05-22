<?php
    $timeSession=1800;
    session_set_cookie_params($timeSession);
    include("public/objects/clases.inc.php");
    session_start();
    error_reporting(E_PARSE | E_ERROR);
    
    if(!isset($_SESSION['user'])){
        header("Location: /index.php");
        exit();
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(isset($_POST['enviar'])){
            $userName = $_POST['client'];
            $userPass = $_POST['contrasenia'];
            $mysqlDataBase = new Database("localhost","root","mdv21.389863","blog");
            $resultQueryGet = $mysqlDataBase -> getUser($userName,$userPass);
            if($resultQueryGet){
                $_SESSION['user'] = "$userName";
                header("Location: ./createPost.php");
                exit();    
            }
        }

        if(isset($_POST['SIGNUP'])){

        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/index.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>LogIn</title>
</head>
<body>
    <div class="page2-root">
        <header class="box-nav-bar">
        <a href="index.php"><h3 class="nav-title">M a r c o s</h3></a>
            <nav class="nav-bar">
                <ul>
                    <li><a href="index.php">Home Page</a></li>
                    <li><a href="./assets/work.php">Work</a></li>
                    <li><a href="./assets/blog.php">Blog</a></li>
                </ul>
            </nav>
            <form action="#" method="POST">
            <input type="submit" name="SIGNUP" id="LOGIN" value="signup" />
        </header>
        <main class="page2-container">
            <h1 class="page2-title">LOGIN</h1>
                <section class="page2-target">
                    <label>Usuario: </label>
                    <input type="text" name="client" id="inputUser">
                    <label>Constraseña: </label>
                    <input type="password" name="contrasenia" id="">
                    <input type="submit" name="enviar" value="sent" class="sent">
                </section>
            </form>
        </main>
    </div>
</body>
</html>