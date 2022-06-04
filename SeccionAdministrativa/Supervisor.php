<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css" />
<style>
    .tooltip-inner {
    white-space: pre-wrap;
}

</style>
    <title>Supervisor</title>
</head>

<body>
<?php include_once("componentes/header.php");
        
        if(isset($_SESSION['tipo'])){
            if($_SESSION['tipo']!="Supervisor.php")
            header("location:./");
        }
?>

    <!-- Importamos el header!-->

    <?php
    
    ?>
    <!--status del municipio-->
    <div class="container">
        <br>
        <section>
        <div class='card'>
                <div class='card-header text-center'>
                    <h2 class='caps'>TOTAL UNIVERSIDADES</h2>
                    <?php TotalUniversidades();?>
                </div>
                <div class='card-body text-center'>
                    <div class='row'>
                        <div class='col-6'>
                            <h5>Universidades con solicitudes</h5>
                            <?php UniversidadesFases(1);?>
                        </div>
                        <div class='col-6'>
                            <h5>Universidades con cambios pendientes</h5>
                            <?php UniversidadesFases(2);?>
                        </div>
                        <div class='col-6'>
                            <h5>Universidades listas </h5>
                            <?php UniversidadesFases(3);?>
                        </div>
                        <div class='col-6'>
                            <h5>Universidades rechazadas </h5>
                            <?php UniversidadesFases(4);?>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <br>
        <div class = "text-center">
            <h2 >Lista de municipios</h2>
        </div>
        <div class=" d-flex justify-content-end  my-4">
            <button class="btn btn-info btn-rounded  waves-effect" onclick="tableToExcel('tablaExcel', 'ListaUniversidades')">Descargar lista de aspirantes</button>
        </div>
        <br>
            <!--Barra de busqueda-->
            <div class="row  justify-content-center">
                <div class="form-group col-12">
                    <input type="text" class="form-control" name="" id="txt-busqueda" aria-describedby="helpId"
                        placeholder="Introduce el nombre del municipio">
                </div>
            </div>
    </div>
  
        <section>
    <div class="container">
    
            <!--listado de municipios-->
        <div id = "municipio" class="row   justify-content-center ">
        
        </div>
    </div>
    
    </section>
    </div>
    <!-- tabla oculta de la que se tomaran los datos para crear el archivo excel -->
    <table id = "tablaExcel" class = "usuariosTablaExcel" style="display: none;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apelido paterno</th>
                    <th>Apellido materno</th>
                    <th>Telefono</th>
                    <th>Correo electronico</th>
                    <th>Escuela de procedencia</th>
                    <th>Motivo</th>
                    <th>Area de interes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                alumnosExcel();
                ?>
            </tbody>
        </table>    

</body>

<script src="../js/jquery.min.js"></script>

<script src="js/popper.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/busquedaMun.js"></script>

<script src="../js/CrearExcel.js"></script>

<script>
    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

</script>
</html>