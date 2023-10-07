<?php
$usuario = "";
$password = "rosario789";
$servidor = "localhost";
$basededatos = "Maria";


$conexion = mysqli_connect($servidor,$usuario, "") or die ("Error con el servidor de la base de datos");

$bd = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la base de datos");

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$colonia=$_POST['colonia'];
$codigo=$_POST['codigo'];
$telefono=$_POST['telefono'];
$cantidad=$_POST['cantidad'];
$concepto=$_POST['concepto'];

$sql="INSERT INTO datos VALUES ('$nombres','$apellidos','$fecha','$direccion','$colonia','$codigo','$telefono','$cantidad','$concepto' )";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
echo"Hubo un error";

}else{
   echo"Datos guardados correctamente"," <a href='index.html'>Volver</a>";

}

?>