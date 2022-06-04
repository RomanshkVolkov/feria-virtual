<?php
include 'funciones/fileSize.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/Listado.css">
    <link rel="stylesheet" type="text/css" href="../css/descUni.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <title>Editar feria</title>
</head>

<body>
    <!--header-->
    <?php
    include 'componentes/header.php';
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo']!="Supervisor.php")
        header("location:./");
    }
    ?>
    <!--header-->
    <section id="accordion " class="   border-primary container">
        <!--Textos-->
        <div class=" card-header border-primary bg-white ">
            <h1>Textos
                <a class="btn  btn-outline-info" data-toggle="collapse" href="#collapseTextos" role="button" aria-expanded="false" aria-controls="collapseTextos"> >
                </a>
            </h1>
            <div class="collapse" id="collapseTextos">
                <div class="card card-body">
                    <h4 class="py-1">Título Bienvenida</h4>
                    <p class="text-justify"> Actual: <?php include 'textos/Titulo.txt'; ?></p>
                    <form method="POST" id="formTitle">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Nuevo título de bienvenida" id="floatingTextarea1" name="message" required></textarea>
                        </div>
                        <input name="action" type="hidden" value="1">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                    <hr class="bg-primary">
                    <h4 class="py-1">Texto Bienvenida</h4>
                    <p class="text-justify"> Actual: <?php include 'textos/TextoBienvenida.txt'; ?></p>
                    <form method="POST" id="formWelcomeText">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Nuevo texto de bienvenida" id="floatingTextarea2" name="message" required></textarea>
                        </div>
                        <input name="action" type="hidden" value="2">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
        <!--Textos-->
        <!--Colores
        <div class=" card-header border-primary bg-white">
            <h1>Colores
                <a class="btn  btn-outline-info" data-toggle="collapse" href="#collapseColores" role="button" aria-expanded="false" aria-controls="collapseColores"> >
                </a>
            </h1>
            <div class="collapse" id="collapseColores">
                <div class="card card-body">
                    <h4 class="py-1">Temas disponibles</h4>

                    <div class="row">
                        <form id="formC" method="GET" class="col-12">
                            <div class=" col-3 btn btn-info mb-2 bg-primary text-white border border-dark">
                                <label for="html5colorpicker1">Seleccionar color</label>
                                <input name=html5colorpicker1 onchange="enCambio(this)" type="color" id="html5colorpicker1" class="collapse" value="#ff0000">
                            </div>
                            <br>
                            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                                <a class="navbar-brand" href="#"><strong>Feria Virtual</strong></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarColor02">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                            <br>
                            <div>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filtrar por tipo de institución
                                </button>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                            <br><br><br>
                            <div class="row align-items-center ">
                                <a class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 dr Uni" title="Instituto Tecnológico Superior de Felipe Carrillo Puerto" href="#" style="height:auto;width:100%;">
                                    <div class="text-center container my-4">
                                        <img data-src="https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa/docs_Unis/logos/1613500530.jpg" class="lazy photo justify-content-center text-decoration-none rounded entered loaded" alt="Logo Universidad" style="width:100%;height:auto;" src="https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa/docs_Unis/logos/1613500530.jpg">
                                        <span class="badge badge-pill badge-info h4 text-uppercase">Publica</span>
                                    </div>
                                </a>
                            </div>
                            <div class="container">
                                <div class="rounded btn" style="height:50px;width:auto;">
                                    <button type="button" class=" rounded btn " style="height:70px;width:auto;background-color:var(--hover-listado)">
                                        <img src="img/Inicio/escuela.png" class=" rounded " style="height:100%;width:auto;"><span>Bienvenida</span>
                                    </button>
                                </div>

                                <br> <br>
                                <div class="rounded btn" style="height:50px;width:auto;">
                                    <button type="button" class=" rounded btn " style="height:70px;width:auto;background-color:var(--hover-listado)" disabled>
                                        <img src="img/Inicio/escuela.png" class=" rounded " style="height:100%;width:auto"><span>Bienvenida</span>
                                    </button>
                                </div>
                                <br><br>
                               
                            </div>
                                  

                        </form>


                    </div>

                    
                </div>
            </div>
        </div>
       Colores-->
        <!--Multimedia-->
        <div class=" card-header border-primary mb-5 bg-white">
            <h1>Multimedia
                <a class="btn  btn-outline-info " data-toggle="collapse" href="#collapseMultimedia" role="button" aria-expanded="false" aria-controls="collapseMultimedia">
                    >
                </a>
            </h1>
            <div class="collapse" id="collapseMultimedia">
                <div class="card card-body">
                    <h4 class="py-1">Imagenes img_defaults</h4>
                    <div class="">
                        <div class="table-wrap">
                            <table class="table table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nombre</th>
                                        <th>Tamaño</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($images as $img) : ?>
                                        <?php echo ' 
                                <tr>
                                    <td class="border-bottom-0  col-2 ">
                                        <a href="' . $img . '" target="_blank">
                                            <img src="' . $img . '" class="img-fluid m-auto "alt="' . $img . '" >
                                        </a>
                                    </td>
                                    <td class=" align-items-center border-bottom-0 " >
                                        <a  target="_blank" href="' . $img . '">' . (pathinfo($img)['basename'])  . '</a>
                                    </td>
                                    <td class=" border-bottom-0">
                                        <span class="waiting">' . fileSizeConvert(filesize($img)) . '</span>
                                    </td>
                                    <td class="border-bottom-0 text-center">                                                                                         
                                        <form method="POST" class="cambioimg" enctype="multipart/form-data"> 
                                            <div class="input-group mb-3 btn-secondary">
                                                <input type="hidden" name="action" value="1" />
                                                <input type="hidden" name="old" value="' . $img . '" />
                                                <input type="file"  name="myfile" title="subir archivo"  accept="image/*" required />
                                            </div>
                                            <div class="input-group mb-3">
                                                <button title="Aceptar cambios"  type="submit " class="btn-primary btn-sm ">
                                                    <span >Confirmar</span>
                                                </button >
                                            </div>
                                        </form>
                                    </td>
                                </tr>'; ?>
                                    <?php endforeach;
                                    echo '
                                </tbody>
                            </table>
                            <hr>
                            <h4 class="py-1">Videos</h4>
                            <table class="table table-responsive-xl">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nombre</th>
                                        <th>Tamaño</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                            <tbody>';
                                    $images = glob('{../VideoPresentacionFeria/*.*}', GLOB_BRACE);
                                    foreach ($images as $img) :
                                        echo '
                                <tr>
                                <td class="border-bottom-0  col-2 ">
                                    <a href="' . $img . '" target="_blank">
                                        <img src="../Imagenes/repro.png" class="img-fluid m-auto "alt="' . $img . '" >
                                    </a>
                                </td>
                                <td class=" align-items-center border-bottom-0 " >
                                    <a  target="_blank" href="' . $img . '">' .(pathinfo($img)['basename'])  . '</a>
                                </td>
                                <td class=" border-bottom-0">
                                    <span class="waiting">' . fileSizeConvert(filesize($img)). '</span>
                                </td>
                                <td class="border-bottom-0 text-center">
                                <form method="POST" class="cambioimg" enctype="multipart/form-data"> 
                                <div class="input-group mb-3 btn-secondary">
                                    <input type="hidden" name="action" value="1" />
                                    <input type="hidden" name="old" value="' . $img . '" />
                                    <input type="file"  name="myvideo" title="subir archivo" accept="video/*" required />
                                </div>
                                <div class="input-group mb-3">
                                    <button title="Aceptar cambios"  type="submit " class="btn-primary btn-sm ">
                                        <span >Confirmar</span>
                                    </button >
                                </div>
                            </form>
                                </td>
                                </tr>';
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--Multimedia-->
        <?php
        include "Tareas/FileUpload.php";
        ?>
    </section>
    <!-- MDB -->
    <script src="./js/ajax.jquery.js">
    </script>
    <script src="js/bootstrap.bundle.min.js">
    </script>
    <script src="js/configuracion/configF.js">
    </script>
  <!--  <script src="../js/evitar_reenvio.js"> </script>-->
</body>

</html>