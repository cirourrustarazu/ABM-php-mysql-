<?php 
   include('inc/conexion.php');
// Recupero los datos del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];

// Verifico si el usuario ya existe en la BDD
$consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario' ";

$resultado1 = mysqli_query($conexion,$consulta1);

while($a = mysqli_fetch_assoc($resultado1)){
    $existe = $a['nuevo'];
}

// Estrucustura de decision
if($existe == 1){
    // Mostrar un mensaje y volver al formulario
    header("Location: alta_usuario.php?mensaje=uno");
}else{
    $alta = "insert into usuario values ('$usuario','$clave','$rol')";
    $resultado_alta = mysqli_query($conexion,$alta);

    header("Location: abm.php");
}
?>