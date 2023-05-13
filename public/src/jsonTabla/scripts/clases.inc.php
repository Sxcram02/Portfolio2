<?php

/**
 * Database
 * @param  string $host
 * @param  string $user
 * @param  string $pass
 * @param  string $database
 * @return $objMysql
 */
class Database {
    protected string $host;
    protected string $user;
    protected string $pass;
    protected string $database;
    protected $objMysql;
    
    /**
     * __construct
     *
     * @param  string $host
     * @param  string $user
     * @param  string $pass
     * @param  string $database
     * @return $objMysql
     * 
     * La idea era hacer un patron de Diseño mas concreto el composite,
     * sin embargo, intente llamar a la funcion __construct protected y
     * no fue acessible entonces decidi tomarla como publica por el momento
     */
    public function __construct($host,$user,$pass,$database){
        $this -> host = $host;
        $this -> user = $user;
        $this -> pass = $pass;
        $this -> database = $database;
        $this -> objMysql = new mysqli($host,$user,$pass,$database);
    }
    
    /**
     * updateAlumnos
     *
     * @param  string $dni
     * @param  string $nombre
     * @param  string $fechaNac
     * @return string $getRequest mysqli_connect_errno()
     * 
     * para actualizar la base de datos decidí llamar al objeto $objMysql para realizar el INSERT mediante la función proipa del objeto mysqli query() para luego realizar la comprobación correcta devolviendo como resultado una consulta.
     */
    public function updateAlumnos($dni,$nombre,$fechaNac){
        $addQuery = $this -> objMysql;
        if(func_get_args()){
            $insertINTO = "INSERT INTO daw.alumnos VALUES($dni,$nombre,$fechaNac)";
            $getRequest = "SELECT al.dni as dni FROM alumnos al";
            $query= $addQuery -> query($insertINTO);
            if($query){
                return $getRequest;
            }else {
                return mysqli_connect_errno();
            }
        }else{
            return "Introduzca los nuevos datos en orden: dni,nombre y la fecha de nacimiento";
        }
    }
    
    /**
     * doQuery
     *
     * @param  string $nombre
     * @return $jsonObj
     * 
     * ¡¡OJIIITOO!! LA COSA SE COMPLICA
     * intentando usar la funcion implementada de SQL llamada
     * FOR JSON AUTO debe de devolver una resultado 
     * bien estructurada en formato json.(NO es así)
     * XAMPP es MariaDB -> en su lugar transforme la consulta 
     * en un objeto json  con JSON_OBJECT() donde el string define la propiedad
     * y lo siguiente será su valor.
     */
    public function doQuery(){
        $consulta = "SELECT JSON_OBJECT('dni', cr.alumno, 'asistencia', cr.faltas, 'asignatura', sg.nombreAsignatura, 'nombre', al.nombreAlumno) AS alumno
        FROM curso cr 
        JOIN alumnos al ON cr.alumno = al.dni 
        JOIN faltas ft ON cr.faltas = ft.horas 
        JOIN signatures sg ON cr.asignatura = sg.codAsignatura;";
        $addQuery = $this -> objMysql;
        $createQueryObjet = $addQuery -> query($consulta);
        foreach ($createQueryObjet as $alumno){
            $alumnoObj = json_decode($alumno['alumno']);
            echo "<tr>";
            echo "<td>{$alumnoObj->dni}</td>";
            echo "<td>{$alumnoObj->asistencia}</td>";
            echo "<td>{$alumnoObj->asignatura}</td>";
            echo "<td>{$alumnoObj->nombre}</td>";
            echo "</tr>";
        }
        return $createQueryObjet;
    }
}

?>