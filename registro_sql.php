<?php
    include('inc/conexion.php');

    // Recibo los valores del formulario
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $clave = filter_var($_POST['clave'], FILTER_SANITIZE_STRING);
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'], FILTER_SANITIZE_STRING);
    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);

    $clave2 = password_hash($clave,PASSWORD_DEFAULT);

    // Ingreso los datos en la base
    $alta = "insert into users (usuario,clave,nombre,apellido,correo,fc_alta,rol)
    values('$usuario','$clave2','$nombre','$apellido','$correo',now(),'analista')";


    mysqli_query($conexion,$alta);

    header("Location: index.php");

?>