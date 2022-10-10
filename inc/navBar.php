<?php 
function navBar(){
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="form.php">Formulario</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="abm.php">ABM</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
<?php 

}

?>