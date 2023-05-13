<?php
/**
 * doContentTable
 *
 * @param  object $consulta
 * @return  $alumnoObj 
 * 
 * El parametro pasado en este caso sera un objeto json
 * por ende usaremos un foreach,
 * el objeto devuelto devuelve un aviso de warning
 * y por eso usamos json_decode()
 * para hacer una conversion de este a un arreglo associativo 
 * y acceder a todas sus propiedades.
 */
function doContentTable($consulta){
    
    foreach ($consulta as $alumno){
        $alumnoObj = json_decode($alumno['alumno']);
        echo "<tr>";
        echo "<td>{$alumnoObj->dni}</td>";
        echo "<td>{$alumnoObj->asistencia}</td>";
        echo "<td>{$alumnoObj->asignatura}</td>";
        echo "<td>{$alumnoObj->nombre}</td>";
        echo "</tr>";
    }
}
    
    /**
     * doForm
     *
     * @return <form>
     * Este sera el formulario que recibira los parametros de consulta
     */
    function doForm(){
        echo "<form method='POST' action='#' class='formulario'>";
            echo "<span>Introduce el nombre del alumno: </span>\n";
            echo "<input type='text' name='nombre' placeholder='ALL' disable />";
            echo "<button name='start'>CLICK ME</button>";
        echo "</form>";
        // echo "<div>\n<ul>\n<li>Carlos López</li>\n<li>Laura Pérez</li>\n</ul>\n</div>";
    }
?>