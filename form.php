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
    <?php include('inc/navBar.php'); ?>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Formulario</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->
    <?php navBar(); ?>

    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Envió de datos al servidor</h3>
    </div>

    <!-- FORMULARIO -->
    <div class="row">
      <div class="col-4"></div>
      <div class="col-4">

      <form action="form_destino.php" method="POST">
          <div class="mb-3">
            <label for="nombre" class="form-label">Ingrese su nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
           </div>
          <div class="mb-3">
            <label for="ape" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="ape" name="ape">
          </div>

          <button type="submit" class="btn btn-primary form-control">Enviar</button>
        </form>

      </div>
      <div class="col-4"></div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>