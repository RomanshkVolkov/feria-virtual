<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
  <!--css bootstrap-->
  <link rel="stylesheet" href="https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa/css/bootstrap.css">
  <!--css de la pagina-->
  <link rel="stylesheet" href="https://feriavirtual-upqroo.ozelot.it/css/index.css">
  <title>Error 404</title>

</head>
  <?php
   $Es404=true;
    include_once("Componentes/header.php");
    ?>
<body>
<br>
  <div class="text-center container-fluid">
    <h1>Ha ocurrido un error.</h1>

    <h3>La página o el archivo no están disponibles por el momento. La página o el archivo solicitado ya no existen o cambiaron de nombre. 
    La dirección de la página puede contener errores de escritura.</h3>
  </div>
  <!-- Footer -->
<?php
    include_once("Componentes/footer.php");
?>
</body>


<!--js index-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="popper.min.js"></script>
<script src="SeccionAdministrativa/js/bootstrap.min.js"></script>
</html>