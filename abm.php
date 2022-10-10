<?php
// session_start();
// if(!isset($_SESSION['autorizado']) or $_SESSION['autorizado']=='no'){
//   header("Location: index.php");
// }


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ARCHIVOS A INCLUIR -->
    <?php 
    include('inc/navBar.php');
    include('inc/conexion.php');

    $rol1 = 'administrador';
    $rol2 = 'analista';

    $consulta = 'select count(distinct usuario) as usuarios from usuario';
    $consulta1 = "select count(distinct usuario) as usuarios from usuario where rol = '$rol1' ";
    $consulta2 = "select count(distinct usuario) as usuarios from usuario where rol = '$rol2' ";
    $consulta3 = "select distinct * from usuario";

    $resultado = mysqli_query($conexion,$consulta) or die('Error en consulta 0');
    $resultado1 = mysqli_query($conexion,$consulta1) or die('Error en consulta 1');
    $resultado2 = mysqli_query($conexion,$consulta2) or die('Error en consulta 2');
    $resultado3 = mysqli_query($conexion,$consulta3) or die('Error en consulta 3');

    while($fila=mysqli_fetch_assoc($resultado)){
        $usuarios_total = $fila['usuarios'];
    }
    while($fila=mysqli_fetch_assoc($resultado1)){
        $usuarios_administrador = $fila['usuarios'];
    }
    while($fila=mysqli_fetch_assoc($resultado2)){
        $usuarios_analistas = $fila['usuarios'];
    }


    ?>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>ABM</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->
    <?php navBar(); ?>

    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h2>ABM </h2>
    </div>

    <!-- FILA 1 -->
    <div class="row">
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark">Usuarios total: <?php echo $usuarios_total; ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark">Administradores: <?php echo $usuarios_administrador; ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-dark">Analistas: <?php echo $usuarios_analistas; ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-danger">
                    <a href="alta_usuario.php" style="color:white; text-decoration:none;">Alta usuario</a>
                </button>
            </div>
        </div>

    </div>
    <!-- FILA 1 -->

    <!-- FILA 2 -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-hover">
                    <thead>
                        <tr class="text-center">
                            <td>Usuario</td><td>Clave</td><td>Rol</td><td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        while($columna = mysqli_fetch_array($resultado3)){
                            echo '<tr>';
                                echo '<td>'.$columna['usuario'].'</td>';
                                echo '<td>'.$columna['clave'].'</td>';
                                echo '<td>'.$columna['rol'].'</td>';
                                echo '<td style="text-align:center;">
                                    <a href="modificar_usuario.php?usuario='.$columna['usuario'].'&clave='.$columna['clave'].'&rol='.$columna['rol'].'" style="color:blue; text-decoration:none;">Modificar |</a>
                                    <a href="baja_usuario.php?usuario='.$columna['usuario'].'&clave='.$columna['clave'].'&rol='.$columna['rol'].'" style="color:blue; text-decoration:none;">Eliminar</a>
                                </td>';
                            echo '</tr>';

                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- FILA 2 -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>