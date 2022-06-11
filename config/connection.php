<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$basedatos  = "BAJOS";

$mysqli = new mysqli($server,$usuario,$contraseña,$basedatos);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// echo $mysqli->host_info . "\n";

$mysqli = new mysqli($server,$usuario,$contraseña,$basedatos, 3306);
if ($mysqli->connect_errno) {
     echo "<script type='text/javascript'>alert('" . $mysqli->connect_errno . ") " . $mysqli->connect_error."')</script>";
}
else
{
  
   //echo "<script type='text/javascript'>alert('Funciona la conexion');</script>";	

   $sql = "SELECT I.NOMBRE,I.PRECIO,I.OBSERVACION FROM INSTRUMENTO";
  
}

echo $mysqli->host_info . "\n";
?>