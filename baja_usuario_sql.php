<?php 
// Incluir archivo de conexion
    include('inc/conexion.php');

// Recibo los valores del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['usuario'];
$rol = $_POST['rol'];
$boton = $_POST['boton'];

// Estructura de gestion
if($boton==0){
    header("Location: abm.php");
}else{
    $baja = "delete from usuario where usuario = '$usuario' ";

    $resultado_baja = mysqli_query($conexion,$baja);

    header("Location: abm.php");
}

?>