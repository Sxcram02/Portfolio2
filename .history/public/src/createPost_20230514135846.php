<?php
$timeSession = 1000;
session_set_cookie_params($timeSession);

session_start();
include("./../objects/clases.inc.php");

error_reporting(E_PARSE | E_ERROR);

$userName = $_SESSION['user'];
$mysqlDataBase = new PDO("mysql:dbname=blog;host=localhost","root","mdv21.389863");
$prepare = $mysqlDataBase -> prepare("SELECT usr.clientName as client FROM users usr WHERE client = ?");
$prepare -> bindParam("user",$resultado);

if ($_SESSION['user'] != "marcos") {
    header("Location: ./login.php");
    exit();
}

if (isset($_POST['LOGOUT'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ./../../index.php");
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
        <form action="#" method="POST" enctype="multipart/form-data">
            <header class="box-nav-bar">
                <a href="/index.php">
                    <h3 class="nav-title">M a r c o s</h3>
                </a>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="/index.php">Home Page</a></li>
                        <li><a href="/public/src/assets/work.php">Work</a></li>
                        <li><a href="/public/src/assets/blog.php">Blog</a></li>
                    </ul>
                </nav>
                <input type="submit" name="LOGOUT" id="LOGIN" value="logout" />
            </header>
            <main id="page3-container">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    $titulo = $_POST['titulo'];

                    $imageName = $_FILES['imagen']['name'];

                    $imagePath = $_FILES['imagen']['tmp_name'];

                    $path = "/media/$imageName";

                    $subtitulo = $_POST['subtitulo'];

                    $descripcion = $_POST['descripcion'];

                    if(move_uploaded_file($imagePath,"/media/$imageName")) {

                        $arrayDataPost = [$titulo, $path, $subtitulo, $descripcion, $_SESSION['user']];

                        if (isset($_POST['crear'])) {

                            $databaseConnect->setPost($arrayDataPost);
                            header("Location: ./assets/blog.php");
                            exit();
                        }
                    }
                }
                ?>
                <section>
                    <label>Titulo del Post</label>
                    <input type="text" name="titulo" id="page3-titulo">
                    <label>Imagen</label>
                    <input type="file" name="imagen" id="imagen">
                    <label>Subtitulo</label>
                    <input type="text" name="subtitulo" id="page3-subtitulo">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion" id="page3-descripcion">
                    <input type="submit" name="crear" value="crear" class="sent">
                </section>
            </main>
        </form>
    </div>
</body>

</html>