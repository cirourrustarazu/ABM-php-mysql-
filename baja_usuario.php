<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ARCHIVOS A INCLUIR -->
    <?php 
    // include('inc/navBar.php');
    include('inc/conexion.php');

    $mensaje = 'Ingrese los nuevos datos';
    if(isset($_GET['mensaje'])){
        if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base de datos';}
    }

    // Recibir datos recibidos por la URL
    $usuario = $_GET['usuario'];
    $clave = $_GET['clave'];
    $rol = $_GET['rol'];


    ?>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Baja de usuario</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->

    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Baja de usuario existente en la BDD</h3>
    </div>
     <!-- FORMULARIO -->
     <div class="row">
      <div class="col-4"></div>
      <div class="col-4">

      <form action="baja_usuario_sql.php" method="POST">
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuario: </label>
            <input type="text" class="form-control" id="usuario" name="usuario" value=<?php echo $usuario; ?> >
           </div>
          <div class="mb-3">
            <label for="clave" class="form-label">Clave: </label>
            <input type="text" class="form-control" id="clave" name="clave" value=<?php echo $clave; ?>>
          </div>
          <div class="mb-3">
            <label for="rol" class="form-label">Puesto: </label>
            <input type="text" class="form-control" id="rol" name="rol" value=<?php echo $rol; ?>>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger form-control" name="boton" value=1>Eliminar</button>
            <button type="submit" class="btn btn-primary form-control" name="boton" value=0>Cancelar</button>
          </div>
        </form>
      <br>
      </div>
      <div class="col-4">
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>