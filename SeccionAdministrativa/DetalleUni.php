<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/btnComoLink.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/lightgallery.min.css">
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.0.943/build/pdf.min.js"></script>


    <title>Detalle universidad</title>
</head>

<body>

    <?php include_once("componentes/header.php");?>
    <!-- Importamos el header!-->

    <?php
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo']!="Supervisor.php")
            header("location:./");
    }
?>
    <section>
        <?php   //Resivimos y guardamos todos los valores que se necesitan enviar a ListadoUniversidades.php usando el btn de regreso
        $Id_mun = $_POST['ID_MUN'];
        $MunImg = $_POST['MUN_IMG'];
        $MunNom = $_POST['NOM_MUN'];
        echo '<form action="ListadoUniversidades.php" method="POST">
             <input type="hidden" value="' . $Id_mun . '" name ="ID_MUN">
             <input type="hidden" value="' . $MunImg . '" name ="MUN_IMG">
             <input type="hidden" value="' . $MunNom . '" name ="NOM_MUN">
                <ol class="breadcrumb">
                    <li><a href="Supervisor.php">Lista de municipios/</a></li>
                    <li><button class="btn-link">Lista de universidades/</button></li>
                    <li class="active">Informaci&oacute;n universidad</li>
                </ol>
              </form>';
        ?>
    </section>
    <!---------------------------------------------------------------nombre uni -------------------------------------------------------------->
    <section class="container mt-4">

        <div class="card">
            <div class="card-header text-center">
                <div class="row bd-example-container">
                    <div class="col">
                        <?php NombreUni($_POST['ID_UNI']) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------------------------------------info uni -------------------------------------------------------------->
    <?php MostraResponsableUni($_POST['ID_UNI']) ?>
    <!------------------------------------------------------ Datos de la universidad ----------------------------------------------------------->
    <?php DatosUniversidad($_POST['ID_UNI']); ?>
    <!---------------------------------------- Direccion ---------------------------------------------------------->
    <?php DireccionUni($_POST['ID_UNI']); ?>
    <!---------------------- Carreras -------------------------->
    <hr>

    <div id="accordion">
        <div class="card">
            <h4 class="text-center my-4" data-toggle="collapse" data-target="#carrerasCollapse" style="cursor: pointer" aria-expanded="false">Carreras de la universidad</h4>
        </div>
    </div>
    <!-- aqui va el metodo -->
    <table class="table text-center collapse" id="carrerasCollapse">
        <thead>
            <tr>
                <th scope="col">Carrera</th>
                <th scope="col">PDF</th>
                <th scope="col">RVOE/DGP</th>
                <th scope="col">Per&iacute;odo Vigencia</th>
                <th scope="col">¿Aceptar?</th>
            </tr>
        </thead>
        <?php MostrarCarreras($_POST['ID_UNI']); ?>
    </table>
    <!---------------------- Fotos -------------------------->
    <div id="accordion">
        <div class="card">
            <h4 class="text-center my-4" data-toggle="collapse" data-target="#fotosCollapse" style="cursor: pointer" aria-expanded="false">Fotos de la universidad</h4>
        </div>
    </div>
    <table class="table text-center collapse" id="fotosCollapse">
        <thead>
            <tr>
                <th scope="col">Foto</th>
                <th scope="col">Titulo</th>
                <th scope="col">¿Aceptar?</th>
            </tr>
        </thead>
        <?php MostrarFotos($_POST['ID_UNI']); ?>
    </table>
    <!---------------------- Videos -------------------------->
    <div id="accordion">
        <div class="card">
            <h4 class="text-center my-4" data-toggle="collapse" data-target="#videosCollapse" style="cursor: pointer" aria-expanded="false">Videos de la universidad</h4>
        </div>
    </div>
    <table class="table text-center collapse" id="videosCollapse">
        <thead>
            <tr>
                <th scope="col">Video</th>
                <th scope="col">Titulo</th>
                <th scope="col">¿Aceptar?</th>
            </tr>
        </thead>
        <?php MostrarVideos($_POST['ID_UNI']); ?>
    </table>
    <!---------------------- Becas -------------------------->
    <div id="accordion">
        <div class="card">
            <h4 class="text-center my-4" data-toggle="collapse" data-target="#BecasCollapse" style="cursor: pointer" aria-expanded="false">Becas de la universidad</h4>
        </div>
    </div>
    <table class="table text-center collapse" id="BecasCollapse">
        <thead>
            <tr>
                <th scope="col">PDF</th>
                <th scope="col">Nombre</th>
                <th scope="col">¿Aceptar?</th>
            </tr>
        </thead>
        <?php MostrarBecas($_POST['ID_UNI']); ?>
    </table>
    <br>
    <!--------------------------------------------------------- Datos de la universidad fin -------------------------------------------------->
    <!-- modal de aceptación -->
    <?php
    //Con este codigo determinados si el estado de la universidad es aceptado o cualquiero otro
    if ($_POST['Estatus_UNI'] == 'Aprobado') {
        echo '
            <div class="row text-center">
        <div class="col-6 text-end">
            <div class="modal fade" id="modalaceptacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Escriba la carta de aceptacion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="form8">Mensaje de aceptacion</label>
                                <textarea type="text" id="txtareaaceptacion" class="md-textarea form-control name = "mensaje" "
                                    rows="4" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" id="btnAceptarUniversidad">Confirmar</button>
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id="btnCancelar">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" data-toggle="modal"
                    data-target="#modalaceptacion">Guardar cambios</a>
            </div>
        </div>
        <div class="col-6">
            <!-- codigo para el modal de rechazo -->

            <div class="modal fade" id="modalrechazo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Escriba la carta de rechazo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="form8">Motivo de rechazo</label>
                                <textarea type="text" id="txtarearechazo" class="md-textarea form-control"
                                    rows="4" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id = "btnRechazarUniversidad">Revocar permiso</button>
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id = "btnCancelarRechazar">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" data-toggle="modal"
                    data-target="#modalrechazo">Revocar permiso</a>
            </div>
        </div>
    </div>
    </section>';
    } else if ($_POST['Estatus_UNI'] == 'Negado') {
        echo '
            <div class="row text-center">
        <div class="col-6 text-end">
            <div class="modal fade" id="modalaceptacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Escriba la carta de aceptacion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="form8">Mensaje de aceptacion</label>
                                <textarea type="text" id="txtareaaceptacion" class="md-textarea form-control name = "mensaje" "
                                    rows="4" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" id="btnAceptarUniversidad">Enviar</button>
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id="btnCancelar">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" data-toggle="modal"
                    data-target="#modalaceptacion">Aceptar universidad</a>
            </div>
        </div>
        <div class="col-6">
    </section>';
    } else {
        echo '
            <div class="row text-center">
        <div class="col-6 text-end">
            <div class="modal fade" id="modalaceptacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Escriba la carta de aceptacion</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="form8">Mensaje de aceptacion</label>
                                <textarea type="text" id="txtareaaceptacion" class="md-textarea form-control name = "mensaje" "
                                    rows="4" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" id="btnAceptarUniversidad">Enviar</button>
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id="btnCancelar">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-info text-white btn-rounded mb-4 text-decoration-none" data-toggle="modal"
                    data-target="#modalaceptacion">Aceptar</a>
            </div>
        </div>
        <div class="col-6">
            <!-- codigo para el modal de rechazo -->

            <div class="modal fade" id="modalrechazo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog  modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Escriba la carta de rechazo</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <label data-error="wrong" data-success="right" for="form8">Motivo de rechazo</label>
                                <textarea type="text" id="txtarearechazo" class="md-textarea form-control"
                                    rows="4" ></textarea>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id = "btnRechazarUniversidad">Rechazar</button>
                            <button class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" id = "btnCancelarRechazar">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn btn-danger text-white btn-rounded mb-4 text-decoration-none" data-toggle="modal"
                    data-target="#modalrechazo">Rechazar</a>
            </div>
        </div>
    </div>
    </section>';
    }

    ?>
</body>

<script src="../js/jquery.min.js"></script>

<script src="js/popper.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/ajaxAgregarUni.js"></script>

<script src="../js/lightgallery.min.js"></script>
<script src="../js/lg-fullscreen.min.js"></script>
<script src="../js/lg-thumbnail.min.js"></script>
<script src="../js/lg-video.min.js"></script>

<script async src="../js/DetallesUni/pdfthumb.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".lightgallery").lightGallery();
    });

    $(document).ready(function() {
        $(".videoGallery").lightGallery();
    });

    ocultartodo();
    mostrar('Bienvenida');

    function mostrar(actual) {
        ocultartodo();
        document.getElementById(actual).style.display = "initial";
        location.href = "#title";
    }

    function ocultartodo() {
        var x = document.getElementsByClassName("contenido-item");

        for (var i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

    }
    $(function() {
        try {
            var str = $("#srcmapa").val();
            const regex = /@(-?\d+\.\d+),(-?\d+\.\d+)/g;
            //,(\d+\.?\d?)+z =zoom
            const regex2 = /<iframe\s*src="https:\/\/www\.google\.com\/maps\/embed\?[^"]+"*\s*[^>]+>*<\/iframe>/g;


            let match = regex.exec(str);
            let match2 = regex2.exec(str);
            if (match) {
                var i = 0


                const lat = match[1];
                console.log(lat + "lat");
                const long = match[2];
                console.log(long + "long");
                //   const zoom =match[3];
                //  console.log(long+"zoom");

                //   console.log(zoom);
                var url = 'http://maps.google.com/maps?q=' + lat + ',' + long + '&z=' + 15 + '&maptype=satellite&output=embed';
                console.log(url);

                //  var url = 'http://maps.google.com/maps?q=' + lat + ',' + long + '&z=' + zoom + '&maptype=satellite&output=embed';

                //     $('#output').html('<iframe width= "100%"" height="100%" src = ' + url + ' frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>');
                $('#output').removeAttr('style');

                $('#output').html(`<a href='` + str + `' target='_blank'><span>` + str + `</span></a><hr>`);

            } else if (match2) {

                // const regex3 = /https:\/\/www\.google\.com\/maps\/embed\?[^"]+"*/g;
                // let match3 =regex3.exec(str);
                // var url = match3[0];
                // console.log(url+"url");
                // let res = url.substr(0, str.length-1);
                $('#output').html(str);



            } else {
                $('#output').removeAttr('style');

                $('#output').html(`<a href='` + str + `' target='_blank'><span>` + str + `</span></a><hr>`);
            }
        } catch (error) {
            console.log(error);
        }
    });
</script>

</html>