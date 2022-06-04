<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="../css/OcultarTabla.css">
    <title>Lista de universidades</title>
    <style>
        .dr:hover {
            background: #b4ffff;
        }
   a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none
}
a:hover {
  text-decoration: none;
}
a:active {
  text-decoration: none;
}
    </style>
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

    <ol class="breadcrumb" >
        <li><a href="Supervisor.php">Lista de municipios/</a></li>
        <li class="active">Lista de universidades</li>
    </ol>
    <!--status del municipio -->
    <section class="container mt-4">
        <div class="card">
            <div class="card-header text-center">
                <div class="row bd-example-container">
                    <img src="../<?php echo $_POST['MUN_IMG']; ?>" style="height: 150px;" width="auto"
                        class="col-2   img-fluid  ml-auto" alt="logo municipio">
                    <div class="col">
                        <h1 class="  text-center text-wrap justify-content-center m-2">
                            <?php echo $_POST['NOM_MUN']; ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col-12">
                        <h5>Total de universidades</h5>
                        <?php  GetUniMunicipio($_POST['ID_MUN']);  ?>
                    </div>
                    <div class="col-6">
                        <h5>Universidades con solicitudes </h5>
                        <?php  GetUniMuniStatus($_POST['ID_MUN'],1);  ?>
                    </div>
                    <div class="col-6">
                        <h5>Universidades con cambios pendientes </h5>
                        <?php  GetUniMuniStatus($_POST['ID_MUN'],2);  ?>
                    </div>
                    <div class="col-6">
                        <h5>Universidades listas </h5>
                        <?php  GetUniMuniStatus($_POST['ID_MUN'],3);  ?>
                    </div>
                    <div class="col-6">
                        <h5>Universidades rechazadas </h5>
                        <?php  GetUniMuniStatus($_POST['ID_MUN'],4);  ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- listado de universidades -->
    <section class="container">

        <div class=" d-flex justify-content-end  my-4">
            <button class="btn btn-info btn-rounded  waves-effect" onclick="tableToExcel('tablaExcel', 'ListaUniversidades')">Exportar tabla a excel</button>
        </div>
        <!--Barra de busqueda-->
        <div class="row  justify-content-center my-4">
            <div class="form-group col-12">
                <input type="text" class="form-control" name="" id="txt-busqueda" aria-describedby="helpId"
                    placeholder="Introduce el nombre de la universidad/estatus/#">
            </div>
        </div>
        <!-- tabla de universidades -->
        <table class="table mb-5" id = "listaUniversidades">
            <thead class="thead-dark">
                <tr class=' ' data-href='/slow' class="text-center" >
                    <th scope="col" class="text-left" >#</th>
                    <th scope="col" class="text-center" >Nombre</th>
                    <th scope="col" class="text-center" >Estatus</th>
                    <th scope="col" class="text-center"></th>
                </tr>
            </thead>
            <tbody id = "listaUni">
                <?php 
                MostrarListaUni($_POST['ID_MUN']);
                ?>
            </tbody>
        </table>

        <!-- tabla oculta de la que se tomaran los datos para crear el archivo excel -->
        <table id = "tablaExcel" class = "UniversidadesTablaExcel" style="display: none;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Universidad</th>
                    <th>Clave del Centro de Trabajo</th>
                    <th>Estatus</th>
                    <th>Ciudad</th>
                    <th>Colonia</th>
                    <th>Calle</th>
                    <th>Numero Interior</th>
                    <th>Numero Exterior</th>
                    <th>E-mail Universidad</th>
                    <th>Telefono Universidad</th>
                    <th>Administrador</th>
                    <th>Telefono Administrador</th>
                    <th>Celular Administrador</th>
                    <th>E-mail Administrador</th>
                </tr>
            </thead>
            <tbody>
                <?php
                tablaExcel($_POST['ID_MUN']);
                ?>
            </tbody>
        </table>    


    </section>

</body>
<script src="../js/jquery.min.js"></script>

<script src="js/popper.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="../js/CrearExcel.js"></script>

<script>
$(document).ready(function(){
  $("#txt-busqueda").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#listaUni tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</html>