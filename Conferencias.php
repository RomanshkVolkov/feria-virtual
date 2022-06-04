<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="css/descUni.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <title>Conferencias</title>
</head>

<body>
    <?php
    include_once("Componentes/header.php");
    ?>
    <br>

    <h1 class="text-center">Conferencias</h1>

    <br>
    <div class="container">
                <hr>


                <div class="row  videoGallery wrapper">
                    <?php include("Tareas/ConsultasConferencias.php");
                    listarconferencias();
            ?>

                </div>
            </div>
   

  <!-- Footer -->
  <?php
    include_once("Componentes/footer.php");
?>

</body>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
<script src="js/lightgallery.min.js"></script>
<script src="js/lg-fullscreen.min.js"></script>
<script src="js/lg-thumbnail.min.js"></script>
<script src="js/lg-video.min.js"></script>

<script type="text/javascript">


    $(document).ready(function () {
        $(".videoGallery").lightGallery();
    });

</script>
<script>
    var myobj = document.getElementById("intro");
    myobj.remove();
    //active nav
    var element = document.getElementById('conferencias');
    resetnav();
    element.classList.add("active");
</script>
</html>