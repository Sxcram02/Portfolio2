<?php
    $timeSession=1000;
    session_set_cookie_params($timeSession);
    session_start();

    if($_SESSION['user'] != "manager"){
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
    <div id="page3-root">
    <header class="box-nav-bar">
            <h3 class="nav-title">M a r c o s</h3>
            <nav class="nav-bar">
                <ul>
                    <li><a href="/index.php">Home Page</a></li>
                    <li><a href="/index.php">Work</a></li>
                    <li><a href="/index.php">Blog</a></li>
                </ul>
            </nav>
            <form action="#" method="POST">
                <input type="submit" name="LOGOUT" id="LOGIN" value="logout"/>
        </header>
        <main id="page3-container"
            </form>
    </div>
</body>
</html>