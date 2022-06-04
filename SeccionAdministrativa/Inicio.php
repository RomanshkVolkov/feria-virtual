<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <title>Inicio</title>
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">

    <style>
        .active-cyan .fa,

        .active-cyan-2 .fa {

            color: #4dd0e1;

        }



        img {

            max-height: 84px;

            max-width: 84px;

        }

        .titulo-boton {
            font-size: 1rem;
        }
    </style>

</head>



<body>



    <!-- Importamos el header!-->

    <?php include_once("componentes/header.php"); ?>

    <?php

    $opciones = array(
        "Cuenta escolar", "Carreras", "Configuracion de usuario", "Videos", "Fotos", "Becas", "Contactos", "Conferencias"
    );

    $imgOpciones = array(
        "img/Inicio/escuela.png", "img/Inicio/archivos.svg", "img/Inicio/usuario.svg", "img/Inicio/camara-de-video.svg", "img/Inicio/img.svg", "img/Inicio/educacion.svg", "img/Inicio/agenda.svg", "img/Inicio/conferencia.svg"
    );


    if (isset($_SESSION['tipo'])) {
        if ($_SESSION['tipo'] != "Inicio.php")
            header("location:./");
    }


    ?>

    <br />

    <section class="container">



        <h1> Trámites por categoría </h1>

        <hr class="mb-4">

        <hr class="mb-4">



        <!-- Tablero donde se muestran los botones!-->

        <?php

        console_log($_SESSION['tipo']);

        $i = 0;

        while ($i < count($opciones)) {



            if ($i % 3 == 0) {
                echo '

   <!-- inicio row-->

<div class="row  py-auto">';
            }

            echo '

    <!-- inicio col' . $opciones[$i] . '-->

    <div class="col-sm  my-auto pb-4">

          <!--inicio Card -->

          <div class="card text-white bg-info text-center my-auto border-0">

              <form method="POST" action="Configuracion.php?CONFIG=' . $opciones[$i] . '" class="  my-auto ">

                <button type="submit" class=" btn btn-admin waves-effect btn-block lh-lg  my-auto text-white  " VALUE="' . $opciones[$i] . '">

                    <!-- Card content -->

                    <div class="card-body">

                   

                        <input type="hidden" name="CONFIG" value="' . $opciones[$i] . '" />

                        <input type="hidden" name="CONFIG_IMG" value="' . $imgOpciones[$i] . '"/>

                         <img src="' . $imgOpciones[$i] . '" class="card-img-top" alt="...">

                        <hr class="mb-4">

                        <p class="card-text center titulo-boton"><b>' . $opciones[$i] . '</b></p>



                    </div>

                </button>

              </form>

            </div>

              <!-- Card -->

    </div>

      <!-- fin col -->

 

 ';



            $i++;

            if ($i % 3 == 0) {

                echo '</div>

<hr class="mb-4">

<hr class="mb-4">

<br>

<!-- fin row -->  

';
            }
        }



        ?>

    </section>





    </section>

    <footer>



        <hr class="mb-4">

        <hr class="mb-4">

        <br>

    </footer>

    <script src="js/jquery.min.js"></script>

    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>



</html>