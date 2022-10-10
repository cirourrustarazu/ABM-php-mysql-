<?php 
// session_start();
// if(!isset($_SESSION['autorizado'])){
//   $_SESSION['autorizado']='no';
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
    ?>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Inicio</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->
    <?php navBar(); ?>

    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Página de inicio</h3>
    </div>

    <!-- Formulario de ingreso -->

    <div class="container">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
          

            <!-- FORMULARIO -->
              <form action="#" method="POST">
                  <div class="mb-3">
                    <label for="usuario" class="form-label">Ingrese su usuario:</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                   </div>
                  <div class="mb-3">
                    <label for="clave" class="form-label">Ingrese su clave:</label>
                    <input type="password" class="form-control" id="clave" name="clave">
                  </div>
        
                  <button type="submit" class="btn btn-primary form-control">Ingresar</button>
                </form>
                <div class="row">
                  <div class="col text-center"><a href="registro.php">Registrarse</a></div>
                  <div class="col text-center"><a href="#">Olvide mi clave</a></div>
                </div>

          
        </div>
        <div class="col-3"></div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>