<?php
$conexion = mysqli_connect("localhost", "bd_prueba");//faltan datos en esta conexion

$conexion = mysqli_connect("localhost","root","", "bd_prueba" );//correcto
   if (!$conexion){
        echo 'Error al conectar a la base de datos';
    }
else {
    echo 'Conectado a la base de datos';
}

<?php
include 'cn.php';
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$telefono = $_POST["telefono"];

//en esta consulta te falto el $ en usuario 
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = 'usuario'");

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");//correcto


if (mysqli_num_rows($verificar_usuario) > 0){
    echo 'El usuario ya esta registrado';
    exit;
}else{

$insertar =mysqli_query($conexion, "INSERT INTO usuarios(nombre, apellidos, correo, usuario, clave, telefono) VALUES ('$nombre', '$apellidos', '$correo', '$usuario', '$clave', '$telefono')");


if (!$insertar){
    echo 'Error al registrarse';

}else {
    echo'Usuario registrado exitosamente';
}





}




//Cerrar conexion
mysqli_close($conexion);