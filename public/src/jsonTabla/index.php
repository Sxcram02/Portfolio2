<?php
    include("./scripts/clases.inc.php");
    include("./scripts/funciones.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>JSON Table</title>
</head>
<body>
    <div class="root">
        <header>
            <p class="title">Gestiona y Administra tu propia plataforma</p>
            <nav>
                <ul class="nav-bar">
                    <li>Home</li>
                    <li>Database</li>
                    <li>Help</li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="intro">
                <h1>Bienvenido a la Mooodle</h1>
                <p>Aqui podras llevar la consulta y la actualización de los datos de cualquier alumno</p>
            </section>
            <section class="content">
                <?php
                    if(isset($_POST['start'])){
                        echo "<table class='faltas-tabla'>";
                        echo "<tr>\n<th>DNI</th>\n<th>FALTAS/H</th>\n<th>MATERIA</th>\n<th>NOMBRE</th>\n</tr>";
                        echo "<tr>\n<td></td>\n<td></td>\n<td></td>\n<td><td></tr>";
                        $conexionDB = new Database("localhost","root","mdv21.389863","daw");
                        $resultado= $conexionDB -> doQuery();
                        echo doContentTable($resultado);
                        echo "</>";
                    }else {
                        echo doForm();
                    }
                ?>
            </section>
        </main>
    </div>
</body>
</html>