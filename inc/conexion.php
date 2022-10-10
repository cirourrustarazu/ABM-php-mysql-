<?php 

// PASO 1) Datos de Conexion
$usuario = 'root';
$clave = '';
$servidor = 'localhost';
$basededatos = 'ecommerce';

// PASO 2) Creamos la conexion
$conexion = mysqli_connect($servidor,$usuario,$clave) or die ('No se pudo conectar al servidor');

// PASO 3) Conecto a la base de datos
$db = mysqli_select_db($conexion,$basededatos) or die ('No se conecto a la base de datos');

?>