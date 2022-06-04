<?php
session_start();
if (isset($_SESSION['Nombre']) and isset($_SESSION['ID'])) {

// works
    include("conexiones/conexion.php");
    $usuario  = $_SESSION['Nombre'];
    $Id_usuario =  $_SESSION['ID'];
} else 
{
    header("location:./");
}

?>

<style>
  .NAG {

    text-align: center;

    font-size: 24px;

    font-weight: bolder;

    text-transform: capitalize;

    margin-top: 14%;

  }
</style>

<header class=" text-white my-4">

  <!--Navbar 2-->
  <nav class="mb-1 navbar fixed-top  navbar-expand-lg lighten-4 navbar-dark bg-info scrolling-navbar text-white">
    <a class="navbar-brand align-items-start text-white" href="<?php echo $_SESSION['tipo'];?>">
      <strong>Administraci&oacute;n de la feria</strong></a>
    <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto text-white">
     

      </ul>
      <div style="align-items: flex-end;">
        <ul class="navbar-nav mr-auto d-flex justify-content-end">
          <?php

            if($_SESSION['tipo']=="Supervisor.php")
              echo '   <li class="nav-item align-items-end">
              <a class="btn-link btn text-white" href="./EditarFeria.php">Editaferia</a>
            </li>';
          ?>
     
          <li class="nav-item  text-white">
            <form method="POST" action="Configuracion.php?CONFIG=Configuracion de usuario" class="my-0 mx-0">
              <button type="submit" class=" btn btn-link  text-white  " value="Configuracion de usuario">
                <input type="hidden" name="CONFIG" value="Configuracion de usuario">
                <input type="hidden" name="CONFIG_IMG" value="img/Inicio/usuario.svg">
                <p class="card-text center">Configuraci&oacute;n de usuario</p>
              </button>
            </form>
          </li>
          <li class="nav-item align-items-end">
            <a class="btn-link btn text-white" href="./conexiones/cerrarsesion.php">Salir</a>
          </li>
        </ul>
      </div>
    </div>

  </nav>
  <!--/.Navbar -->
  <br><br>
</header>