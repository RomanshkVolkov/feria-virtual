<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- aqui pido por post el nombre de la pag -->
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
 
    <title>Areas</title>

    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        .active-cyan .fa,

        .active-cyan-2 .fa {

            color: #4dd0e1;

        }

        img {

            max-height: 84px;

            max-width: 84px;

        }
    </style>

</head>



<body>

    <style>
        .NAG {

            text-align: center;

            font-size: 24px;

            font-weight: bolder;

            text-transform: capitalize;

            margin-top: 14%;

        }
    </style>

    <?php include_once("componentes/header.php"); ?>
    <script>
        console.log("Sabe que esta en los detalles de una Carrera")
    </script>
    <style>
        @media only screen and (max-width: 576px) {

            .Desaparecer_l {

                display: none;

            }



        }
    </style>

    <div class="row bd-example-container">

        <div class="col">


            <h1 class="  text-center text-wrap justify-content-center m-2">

                Areas de la Carrera <br>
                "<?php echo getNombreCarrera($_POST['ID_Carrera']);  ?>"
            </h1>

        </div>



    </div>

    <hr class="mb-4">

    <hr class="mb-4">
    <br />

    <?php
    if (isset($_POST['area'])) {
        console_log($_POST['area']);
        insertCarreraArea($_POST['area'], $_POST['ID_Carrera']);
    }
    if (isset($_POST['ID_Area'])) {
        console_log($_POST['ID_Area']);
        deleteCarreraArea($_POST['ID_Area'], $_POST['ID_Carrera']);
    }
    ?>

    <section class="container text-center">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <?php printSelectAreas($_POST['ID_Carrera']); ?>

                </div>
                <input type="hidden" name="ID_Carrera" value="<?php echo $_POST['ID_Carrera']; ?>" />
                <button type="submit" class="btn btn-primary btn-sm col-auto">
                    <img src="img/Inicio/mas.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">
                </button>
            </div>
        </form>
        <br>
        <div class="row">
            <?php printTablaAreas($_POST['ID_Carrera']); ?>
        </div>

    </section>

    <div class="container-fluid">

        <div class="row align-items-end">

            <div class="col align-self-end">

                <form class="col-1" method="POST" action="Configuracion.php?CONFIG=Carreras">

                    <button type="submit" class="btn btn-info waves-effect btn-block   text-white  " value="Volver">

                        <input type="hidden" name="CONFIG" value="Carreras">

                        <input type="hidden" name="CONFIG_IMG" value="img/Inicio/archivos.svg">

                        <img src="img/Inicio/back-arrow.svg" class="card-img-top" alt="...">

                    </button>

                </form>

            </div>

        </div>

    </div>

    <!-- Card -->

    <script src="js/jquery.min.js"></script>

    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>



</html>