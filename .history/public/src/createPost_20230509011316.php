<?php
$timeSession = 1000;
session_set_cookie_params($timeSession);

include("./../funciones/funciones.inc.php");

session_start();

if ($_SESSION['user'] != "marcos") {
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
    <link rel="stylesheet" href="./../../styles/index.css">
    <link rel="shortcut icon" href="./../../media/logo2.png" type="image/x-icon">
    <title>New Post</title>
</head>

<body>
    <div id="page3-root">
        <form action="#" method="POST">
            <header class="box-nav-bar">
                <h3 class="nav-title">M a r c o s</h3>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="/index.php">Home Page</a></li>
                        <li><a href="/index.php">Work</a></li>
                        <li><a href="/index.php">Blog</a></li>
                    </ul>
                </nav>
                <input type="submit" name="LOGOUT" id="LOGIN" value="logout" />
            </header>
            <main id="page3-container">
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $titulo = $_POST['titulo'];
                        $subtitulo = $_POST['subtitulo'];
                        $descripcion = $_POST['descripcion'];
                        $imagen = $_POST['imagen'];

                        $arrayDataPost = [$titulo,$subtitulo,$descripcion,$_SESSION['user']];
                        if(isset($_POST['crear'])){
                            $databaseConnect -> setPost($arrayDataPost);
                        }
                    }
                ?>
                <input type="text" name="titulo" id="titulo">
                <input type="text" name="subtitulo" id="">
                <input type="text" name="descripcion" id="">
                <input type="text" name="imagen" id="">
                <input type="submit" name="crear" value="crear">
            </main>
        </form>
    </div>
</body>

</html>