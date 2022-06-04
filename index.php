<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
	<meta name="title" content="Feria virtual Quintana Roo">
	<meta name="description" content="La Feria Virtual Universitaria es un evento estatal que reúne a todos los Programas Educativos de nivel superior.">
	<meta name="keywords" content="Feria Virtual,Universidades,Quintana Roo,Municipios,Benito Juarez,Othon P. Blanco">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Spanish">
	<meta name="author" content="Kegara">
  <!-- css mapa -->
  <link rel="stylesheet" href="css/leaflet.css" />
  <!--css bootstrap-->
  <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
  <!--css de la pagina-->
  <link rel="stylesheet" href="css/index.css">
  <title>Feria Universitaria</title>

</head>


<body>
<?php

$inicio=true;

    include_once("Componentes/header.php");
    ?>
  <br>
  <div class="position-relative text-center">
    <a href="#Bienvenida" class="position-absolute top-55 start-50 translate-middle mt-1 bi bi-caret-down-fill">
 
  </div>
  </a>

  <br id="Bienvenida">
  <br>
  <br>

  <div class="Bienvenida text-center container-fluid">
    <div>    
    <h1 class="txtTitulo"><b><?php include "SeccionAdministrativa/textos/Titulo.txt"; ?></b></h1>
        <p class="txtBienvenida" align="justify" ><?php include "SeccionAdministrativa/textos/TextoBienvenida.txt"; ?></p>
        </div><hr style="color: #044f69" /></div>
 <h4 class="text-center text-uppercase">Buscar universidad</h4>
    <br>
    <div class="embed-responsive embed-responsive-1by1  " >
<iframe src="https://feriavirtual-upqroo.ozelot.it/ListadoALL.php?municipio=000"  width="1000" height="1000" class="embed-responsive-item "  title="description"></iframe></div>

<br><hr><br>

  <section>
    <div class="container-fluid">
      <div id="map" class="jumbotron jumbotron-fluid ">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      </div>
    </div>
  <br>
 <!-- <div class="container">
  
  <div class="row">
  <div class="col-12 col-sm-6 col-xl-3 pb-4">
  <img src="./img_defaults/HORIZONTAL1.jpg" class="img-fluid" alt="Responsive image" style="width: 100% \9; height:auto; ">
 
  </div>
  
  <div class="col-12 col-sm-6 col-xl-3 pb-4">
  <img src="./img_defaults/HORIZONTAL3.jpg" class="img-fluid" alt="Responsive image" style="width: 100% \9; height:auto; ">
        
  </div>
  <br>
  <div class="col-12 col-sm-6 col-xl-3 pb-4 " style="height: auto;">
  <img src="./img_defaults/HORIZONTAL4.jpg" class="img-fluid" alt="Responsive image" style="width: 100% \9; height:auto; ">
        
  </div>
  <br>
  <div class="col-12 col-sm-6 col-xl-3 pb-4">
  <img src="./img_defaults/HORIZONTAL2.jpg" class="img-fluid" alt="Responsive image" style="width: 100% \9; height:auto; ">
        
  </div>
  </div>
</div>-->
  </section>
  <br><br>
  <!-- Footer -->
<?php
    include_once("Componentes/footer.php");
?>
</body>


<!--js index-->

<script src="js/leaflet.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="SeccionAdministrativa/js/bootstrap.min.js"></script>
<script src="js/mapaIndex.js">
</script>

</html>
