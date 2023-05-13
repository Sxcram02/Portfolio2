<?php
    include("./public")
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/media/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="/styles/index.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>My projects</title>
</head>
<body>
<div id="root2">
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
        <h1 class="title2" id="title2">MIS TRABAJOS</h1>
        <main class="container2">
            <a href="/public/src/ContractMe.1/contractme.php" target="_blank">
                <section class="work1">
                    <h1 >Contract Me</h1>
                    <img src="/media/proyecto1.png" alt="work1" />
                </section>
            </a>
            <a href="/public/src/jsonTabla/index.php" target="_blank">
                <section class="work2">
                    <h1 >JSON Tabla</h1>
                    <img src="/media/jsonTabla.png" alt="work2" />
                </section>
            </a>
            <a href="/public/src/palabra-dia-cifp/index.html" target="_blank">
                <section class="work3">
                    <h1 >La palabra del CIFP</h1>
                    <img src="/media/palabraCifp.png" alt="work3" />
                </section>
            </a>
            <a href="https://ticktoe.vercel.app/" target="_blank">
                <section class="work4">
                    <h1 >Tick Tack Toe</h1>
                    <img src="/media/tiktacktoe.png" alt="work4" />
                </section>
            </a>
            <a href="/public/src/screen-split/index.html" target="_blank">
                <section class="work5">
                    <h1 >Screen Split</h1>
                    <img src="/media/screenSplit.png" alt="work5" />
                </section>
            </a>
            <a href="/public/src/article-block-page/index.html" target="_blank">
                <section class="work6">
                    <h1 >Article block</h1>
                    <img src="/media/articleBlock.png" alt="work5" />
                </section>
            </a>
        </main>
    </div>
</body>
</html>
