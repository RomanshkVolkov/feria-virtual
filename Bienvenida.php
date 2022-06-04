<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="title" content="Feria virtual Quintana Roo">
	<meta name="description" content="La Feria Virtual Universitaria es un evento estatal que reúne a todos los Programas Educativos de nivel superior.">
	<meta name="keywords" content="Feria Virtual,Universidades,Quintana Roo,Municipios,Benito Juarez,Othon P. Blanco,oferta educativa">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="Spanish">
	<meta name="author" content="Kegara">
    <!-- css mapa -->
    <link rel="stylesheet" href="css/leaflet.css" />
    <!--css bootstrap-->
    <link rel="stylesheet" href="./css/mdb.min.css">
    <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
    <!--css de la pagina-->
    <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png"
        type="image/x-icon">
    <title>Feria Universitaria</title>
    <style>
    .nav-pills .nav-link.active,
.show>.nav-pills .nav-link{
    background: #17a2b8 !important
}
html {
  scroll-behavior: smooth;
}
    </style>
</head>


<body>
    <?php
    $inicio=true;
    $Esbienvenida=true;
    include_once("Componentes/header.php");
    require_once("SeccionAdministrativa/conexiones/conexion.php");
    if(isset($_COOKIE["Registrado"]))
       {
               header("Location: index.php");
       }

    if(isset($_POST['registro']) && !isset($_COOKIE['registro'])){
        insertRegistrado($_POST['nombre'],$_POST['apP'],$_POST['apM'],$_POST['correo'],$_POST['tel'],$_POST['escuela'],$_POST['area'],$_POST['motivo']);
      /// CAMBIOS 2022 ///
      echo "<script> window.location='sesion.php'; </script>";
      ///
       } 
    ?>

    <br>
    <div class="position-relative text-center">
        <a href="#Bienvenida" class="position-absolute top-55 start-50 translate-middle mt-1 bi bi-caret-down-fill">
 
    </div>
    
    </a>
    <br>
    <div id="cookieConsent">
        <div id="closeCookieConsent">x</div>
        Este sitio usa cookies al navegar en esta p&aacute;gina acepta el uso de las mismas.<a class="cookieConsentOK">Entendido.</a>
    </div>
    <br id="Bienvenida">



  <!--  <div class="view intro-2" id="intro">
        <div class="embed-responsive embed-responsive-21by9">
       <iframe width="727" height="409" src="https://www.youtube.com/embed/NhORdsGfzx4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      
        
        

           
        </div>

    </div>-->
    <div class="row d-flex justify-content-around mr-0 ml-0" >
    <div class="card col-auto mt-4 " style="width: 18rem;">
 <div class="embed-responsive embed-responsive-16by9 mt-2">
  <iframe width="727" height="409" src="https://www.youtube.com/embed/IXqoD41MNVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
</div>
  <div class="card-body ">
    <h5 class="card-title">Bienvenida en maya</h5>
    <p class="card-text">La Secretaría de Educación te da la bienvenida, a la 3ª Feria Virtual de Orientación Educativa Educación Superior 2022.</p>
    
  </div>
</div>
<div class="card col-auto mt-4" style="width: 18rem;">
 <div class="embed-responsive embed-responsive-16by9 mt-2">
  <iframe width="727" height="409" src="https://www.youtube.com/embed/2c_ndUZ_Rr4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
</div>
  <div class="card-body">
    <h5 class="card-title">Elige tu carrera</h5>
    <p class="card-text">Tips que debes saber para elegir una carrera.</p>
    
  </div>
</div>
<div class="card col-auto mt-4" style="width: 18rem;">
 <div class="embed-responsive embed-responsive-16by9 mt-2">
  <iframe width="727" height="409" src="https://www.youtube.com/embed/vsBGvrnBdSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
</div>
  <div class="card-body">
    <h5 class="card-title">Feria virtual</h5>
    <p class="card-text">¡Ven! Te invito a visitar la 3ª Feria Virtual de Orientación Educativa Educación Superior 2022.</p>
  </div>
</div></div>
 <div id="menu"><br></div>
    <br ><br>
 <!--Menu-->
 <div class="container">
    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
       <li class="nav-item">
        <a class="nav-link active"  data-toggle="pill" href="#pills-Ingreso" role="tab" aria-controls="pills-Ingreso" aria-selected="true">¿Ya te registraste?</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link "  data-toggle="pill" href="#pills-Registro" role="tab" aria-controls="pills-Registro" aria-selected="true">Registro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Sobre nosotros</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
   
    <div class="tab-pane fade show active " id="pills-Ingreso" role="tabpanel" aria-labelledby="pills-Ingreso">
    
      <div class="container tab-pane fade show "  >
          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>#Bienvenida" method="post">
          <div class="container">
                    <input type="hidden" name="registrado" value="true">
                    <div class="row">
                        <label class="h3">Ingresa el correo con el que te registraste</label>
                    </div>
                    <br>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="CorreoR">Correo</label>
                           
                        <input type="text" class="form-control col-auto col-sm-10" id="CorreoR" name="CorreoR"
                            placeholder="Correo electr&oacute;nico" required>
                    </div>
                    <div class="row text-center">
                    <span class="col-12 text-danger">
                    <br>
                            <?php
 if(isset($_POST['registrado'])){
    if($_POST['CorreoR']=="invitado_feria2021"){
      /// CAMBIOS 2022 ///
      echo "<script> window.location='sesion.php'; </script>";
      ///
    }else{
    buscarRegistrado($_POST['CorreoR']);
    }

   }
   
?>
						</span> 
                        <br><br>
                        <br>
                        </div>
                    <div class="row ">
                        <button class="btn mx-auto bg-info text-white">Ingresar</button>
                    </div>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
          
          </form>
        </div>
      </div>
      <div class="tab-pane fade " id="pills-Registro" role="tabpanel" aria-labelledby="pills-Ingreso">
      <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="container">
                    <input type="hidden" name="registro" value="true">
                    <div class="row">
                        <label class="h3">Registrate para poder ingresar a la feria</label>
                    </div>
                    <br>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="nombre">Nombre(s)*</label>
                        <input type="text" class="form-control col-auto col-sm-10" id="nombre" name="nombre"
                            placeholder="Nombre(s)" required>
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;" for="apP">Apellido
                            Paterno*</label>
                        <input type="text" class="form-control col-auto col-sm-10" id="apP" name="apP"
                            placeholder="Apellido Paterno" required>
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;" for="apM">Apellido
                            Materno*</label>
                        <input type="text" class="form-control col-auto col-sm-10" id="apM" name="apM"
                            placeholder="Apellido Materno" required>
                    </div>
                    <div class="row my-2">
                        <label class="col-12 col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="correo">E-mail*</label>
                        <span class="input-group-text col-2 col-sm-1 justify-content-center"
                            id="inputGroupPrepend21">@</span>
                        <input type="text" class="form-control col-10 col-sm-9" id="correo" name="correo"
                            placeholder="E-mail" aria-describedby="inputGroupPrepend21" required>
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="tel">T&eacute;lefono*</label>
                        <input type="text" class="form-control col-auto col-sm-10" id="tel" name="tel"
                            placeholder="Numero de T&eacute;lefono" required>
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="escuela">Escuela de procedencia*</label>
                            <input type="text" class="form-control col-auto col-sm-10" id="escuela" name="escuela"
                            placeholder="Escuela de procedencia" required>
                       
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;" for="area">&Aacute;rea
                            de
                            Inter&eacute;s</label>
                        <select class="col-auto col-sm-10 custom-select" id="area" name="area">
                            <?php
                    $con2 = conexion10();
                    $cns2 = "SELECT * FROM area;";
                    $aux2 = mysqli_query($con2, $cns2);
                    while ($res2 = mysqli_fetch_array($aux2)) {
                        echo "<option value=".$res2['ID'].">".$res2['Nombre']."</option>";
                    }
                    mysqli_close($con2);
                    ?>
                        </select>
                    </div>
                    <div class="row my-2">
                        <label class="col col-sm-2" style="margin-top: auto;margin-bottom: auto;"
                            for="motivo">Motivo</label>
                        <select class="col-auto col-sm-10 custom-select" id="motivo" name="motivo">
                            <option value=0>Egresado o estudiando bachillerato</option>
                            <option value=1>Padre o tutor</option>
                            <option value=2>Trabajando y quiere estudiar</option>
                        </select>
                    </div>
                    <br>
                    <div class="row ">
                        <button class="btn mx-auto bg-info text-white">Registrarse</button>
                    </div>

                </div>
            </form>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <?php include("./Registro/aboutus.php"); ?>
      </div>
      
    </div>
  </div>
  <!--Menu Fin-->

<!-- Pills content -->


  <!-- Pills content -->
    <br><br>
    <!-- Footer -->
    <?php
    include_once("Componentes/footer.php");
?>
</body>


<!--js index-->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="SeccionAdministrativa/js/bootstrap.min.js"></script>

<script type="text/javascript" src="Registro/evitar_reenvio.js"></script>

</script>
<script>

    $(document).ready(function(){   
        setTimeout(function () {
            $("#cookieConsent").fadeIn(50);}, 2000);
        $("#closeCookieConsent, .cookieConsentOK").click(function() {
            $("#cookieConsent").fadeOut(200);
        }); 
    }); 
</script>

</html>

