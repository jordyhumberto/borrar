<?php
$mysqli= new mysqli("localhost","root","","prueba");
$mysqli->set_charset("utf-8");
if($mysqli->connect_error){
    echo "no se hubo conexion".$mysqli->connect_error;
    exit();
}
?>