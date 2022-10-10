<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <title>Registro</title>
  </head>

  <body class="container-fluid">
    <!-- MENU -->


    <!-- TITULO DE MI PAGINA -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h1>Registro de nuevo usuario</h1>
    </div>
    <!-- FORMULARIO REGISTRO -->
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form action="registro_sql.php" method="POST">
            <div class="mb-3">
            <label for="usuario" class="form-label">Ingrese usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
            <label for="clave" class="form-label">Ingrese clave:</label>
            <input type="password" class="form-control" id="clave" name="clave">
            </div>
            <div class="mb-3">
            <label for="nombre" class="form-label">Ingrese nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
            <label for="apellido" class="form-label">Ingrese apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <div class="mb-3">
            <label for="correo" class="form-label">Ingrese email:</label>
            <input type="email" class="form-control" id="correo" name="correo">
            </div>

            <button type="submit" class="btn btn-primary form-control">Registrarse</button>
        </form>

        </div>
        <div class="col-4"></div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" ></script>

  </body>
</html>