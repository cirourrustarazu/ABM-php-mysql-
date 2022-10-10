<?php 
    //  Incluir archivo de conexion
    include('inc/conexion.php');

    // Recibo los valores del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $boton = $_POST['boton'];
    $usu = $_POST['usu'];

    // Estructura de gestion
    if($boton==0){
        header("Location: abm.php");
    }else{
    $modifica = "update usuario set usuario='$usu',clave='$clave',rol='$rol' where usuario = '$usu' ";

    $resultado_modifica = mysqli_query($conexion,$modifica);

    header("Location: abm.php");
}

?>