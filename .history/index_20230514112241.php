<?php
include("./public/objects/clases.inc.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST['LOGIN'])) {
    $logIn = $_POST['LOGIN'];
    if (isset($logIn)) {
        $_SESSION['user'] = $sesion;
        header("Location: ./public/src/login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="media/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/index.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Home Page</title>
</head>

<body>
    <div id="root">
        <header class="box-nav-bar">
            <a href="/index.php"><h3 class="nav-title">M a r c o s</h3></a>
            <nav class="nav-bar">
                <ul>
                    <a href="index.php"><li>Home Page</li></a>
                    <a href="/public/src/assets/work.php"><li>Work</li></a>
                    <a href="/public/src/assets/blog.php"><li>Blog</li></a>
                </ul>
            </nav>
            <form action="#" method="POST">
                <input type="submit" name="LOGIN" id="LOGIN" value="login" />
            </form>
        </header>
        <main class="container">
        <script src="/public/funciones/funciones.inc.js"></script>
            <section id="home_page">      
                <article class="box-name">
                    <h1 class="title">Hola!,Yo soy</h1>
                    <label id="box-ui-ux">UI/UX</label>
                </article>
                <h2 class="title">Marcos Dominguez</h2>
                <article class="box-presentation">
                    <p>Con 21 años soy diseñador web, con experiencia de 1 año en entornos de desarrollo web, y un flujo constante de trabajo.Además de especialiste en el analisis de metadatos</p>
                    <div class="box-inputs" style="widt">
                        <button onclick="mostrarApartado('box-services','box-aboutMe')">Sobre Mi</button>
                        <button onclick="mostrarApartado('box-aboutMe','box-services')">Servicios</button>
                    </div>
                </article>
            </section>
            <section id="box-services">
                <div id="services">
                    <article id="analisisDatos">
                        <img src="./media/Ilustración del concepto de análisis de configuración Vector Gratis.jpeg" alt="analisisDatos" />
                        <h3>Analisis de Datos</h3>
                        <p>Manejo del mapeo de equipos con nmap, cracking de redes wifi con aircrack-ng y analisis del trafico de red con wireshark.</p>
                    </article>
                    <article>
                        <img src="./media/Estudio socioeconómico para qué sirve, partes y ejemplo.png" alt="" />
                        <h3>Administrador de Sistemas</h3>
                        <p>Supervisión del flujo de datos entre los usuarios de una red y mantenimiento del sistema</p>
                    </article>
                    <article>
                        <img src="./media/Tips To Help Designers Work Better With Coders - Web Design Ledger.jpeg" alt="" />
                        <h3>Desarrollador Web</h3>
                        <p>Control en la programación de PHP con MySQL o MongoDB, diseñador con HTML5, CSS3 o React con JavaScript</p>
                    </article>
                    <article>
                        <img src="./media/superkid-robot-copy.gif" alt="superRobot" id="robot3D" />
                        <h3>Modelador 3D</h3>
                        <p>Modelador 3D de diseño aplicados a la web con Spline, y en modelos mas complejos 3dsMax y Zbrush</p>
                    </article>
                </div>
            </section>
            <section id="box-aboutMe">
                <div id="aboutMe">
                    <h1>Cronología</h1>
                    <hr class="hr" />
                    <article class="box-signatures">
                        <div class="signature1">
                            <i class='bx bx-radio-circle-marked' style='color:#17c3b2'></i>
                            <h3>Titulación ESO y BACHILLER</h3>
                            <img src="./media/chesterton.jpeg" alt="colegio1">
                            <img src="./media/agustinos.jpeg" alt="colegio2">
                            <p>2013-2020</p>
                        </div>
                        <div class="signature2">
                            <i class='bx bx-radio-circle-marked' style='color:#17c3b2'></i>
                            <h3>2º Años en Grado de Derecho</h3>
                            <img src="./media/unir.jpg" alt="universidad">
                            <p>2021-2022</p>
                        </div>
                        <div class="signature3">
                            <i class='bx bx-radio-circle-marked' style='color:#17c3b2'></i>
                            <h3>Grado Superior DAW</h3>
                            <img src="./media/cifp.png" alt="centroFormativo">
                            <p>2022-2024</p>
                        </div>
                        <div class="signature4">
                            <i class='bx bx-radio-circle-marked' style='color:#17c3b2'></i>
                            <h3>Curso de Git</h3>
                            <img src="./media/angulo.jpg" alt="CentroPrivado">
                            <p>2023-2023</p>
                        </div>
                        <div class="signature5">
                            <i class='bx bx-radio-circle-marked' style='color:#17c3b2'></i>
                            <h3>Curso de Animacion 3D</h3>
                            <img src="./media/comercio.png" alt="EntidadPublica">
                            <p>2023-2023</p>
                        </div>
                    </article>
                </div>
            </section>
            <section id="my_photo"></section>
        </main>
    </div>

</body>

</html>