<?php
    include("./../../objects/clases.inc.php");
    include("./../../funciones/funciones.inc.php");
    session_start();

    if(isset($_POST['LOGIN'])){
        $_SESSION['user']=$sesion;
        header("Location: ./../login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/media/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="/styles/index.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>My personal blog</title>
</head>
<body>
<div id="root3">
        <header class="box-nav-bar">
        <a href="/index.php"><h3 class="nav-title">M a r c o s</h3></a>
            <nav class="nav-bar">
                <ul>
                    <a href="/index.php"><li>Home Page</li></a>
                    <a href="./work.php"><li>Work</li></a>
                    <a href="./blog.php"><li>Blog</li></a>
                </ul>
            </nav>
            <form action="#" method="POST">
                <input type="submit" name="LOGIN" id="LOGIN" value="login" />
            </form>
        </header>
        <main class="container3">
            <h1 id="blog">MI PERSONAL BLOG</h1>
            <section class="new-post">
                <!-- <article>
                    <h1>Mi primer post</h1>
                    <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="post1" >
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ex modi cum labore accusantium dolorem magnam recusandae sunt dicta delectus!</p>
                </article>
                <article>
                    <h1>Mi primer post</h1>
                    <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="post1" >
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ex modi cum labore accusantium dolorem magnam recusandae sunt dicta delectus!</p>
                </article>
                <article>
                    <h1>Mi primer post</h1>
                    <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="post1" >
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ex modi cum labore accusantium dolorem magnam recusandae sunt dicta delectus!</p>
                </article>
                <article>
                    <h1>Mi primer post</h1>
                    <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="post1" >
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ex modi cum labore accusantium dolorem magnam recusandae sunt dicta delectus!</p>
                </article>-->
                <?php        
                    $databaseConnect = new Database("localhost","root","mdv21.389863","blog");
                    $result= $databaseConnect -> getPost("marcos");
                    $arrayDataPost = mysqli_
                    echo "<article>";
                        // foreach($arrayDataPost as $dataPost){
                        //     echo "<img src='' alt='' />";
                        //     echo $dataPost['titulo'];
                        //     // echo "<h1>{$dataPost['titulo']}</h1>";
                        //     // echo "<p>{$dataPost['descripcion']}</p>";
                        // }

                    echo "</article>";
                ?>
            </section>
        </main>
    </div>
</body>
</html>