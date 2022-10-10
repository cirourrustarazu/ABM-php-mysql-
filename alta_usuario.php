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
    ?>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Alta usuario</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->

    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Alta de nuevo usuario</h3>
    </div>
     <!-- FORMULARIO -->
     <div class="row">
      <div class="col-4"></div>
      <div class="col-4">

      <form action="alta_usuario_sql.php" method="POST">
          <div class="mb-3">
            <label for="usuario" class="form-label">Ingrese el nuevo usuario: </label>
            <input type="text" class="form-control" id="usuario" name="usuario">
           </div>
          <div class="mb-3">
            <label for="clave" class="form-label">Ingrese la clave: </label>
            <input type="text" class="form-control" id="clave" name="clave">
          </div>
          <div class="mb-3">
            <label for="rol" class="form-label">Ingrese su puesto: </label>
            <input type="text" class="form-control" id="rol" name="rol">
          </div>
          <button type="submit" class="btn btn-primary form-control">Enviar</button>
        </form>
      <br>
      <?php echo $mensaje; ?>
      </div>
      <div class="col-4">
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>