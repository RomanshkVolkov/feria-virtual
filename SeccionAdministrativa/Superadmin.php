<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de usuarios</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
 
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="../js/CrearExcel.js"></script>
</head>
<body>
<?php 

if (isset($_GET['exmsg'])) {
    
    //create MySQL connection
    // Connection
    $sql = "Select * from usuario";
    $conexion = conexion10();
    // File Name
    $filename = "Webinfopen.xls"; 
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");
    $user_query = mysqli_query(  $conexion,$sql);
    // Write data to file
    $data = [];
    while ($rs = mysqli_fetch_array($user_query,MYSQLI_ASSOC)) {
        $data[0] = "slow";
        $data[1] = "slowx2";
        $data[2] ="slowx3";
    }
    $strExcelFileName="Member-All.xls";
header("Content-Type: application/x-msexcel; name=\"$strExcelFileName\"");
header("Content-Disposition: attachment; filename=\"$strExcelFileName\"");
header("Pragma:no-cache");

$i = 1;
foreach ($data as $row) {
   if ($i == 1) {
      // COLUMN HEADERS
      echo implode("\t", array_keys($row)) . "\r\n";
   }
   // DATA ROWS
   echo implode("\t", array_values($row)) . "\r\n";
   $i++;
}

}

?>
    <!--header-->
    <?php include_once("componentes/header.php");
    if(isset($_SESSION['tipo'])){
        if($_SESSION['tipo']!="Superadmin.php")
        header("location:./");
    }
    ?>

        <!--status del municipio-->
        <div class="container">
        <br>
        <section>
        <?php

        include("Tareas/ConsultasSA.php");
       
        obtenerCabeceraSA();
        ?>
          
            <br>
            <div class=" d-flex justify-content-end  my-4">
              
                <button class="btn btn-info btn-rounded  waves-effect"  onclick="tableToExcel('listado', 'Listado de usuarios')">Exportar tabla a excel</button>
         
 </div>
            <br>
            <?php
 if (isset($_SESSION['msg'])) {
    
     $msg=$_SESSION['msg'];
     echo '<!-- Flexbox container for aligning the toasts -->
    <div class="d-flex justify-content-end">
    <div role="alert" id="toast1" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false" style="z-index:100;position:relative;">
    <div class="toast-header">
      <strong class="mr-auto">Mensaje</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
    '.$msg.'
    </div>
  </div>
  </div>
   <script>  $(document).ready(function(){
    $(".toast").toast("show"); 
 $("#btnToasts").click(function(){
    $("#toast1").toast("show"); 
 });    
 $("#btnOcultar").click(function(){
    $("#toast1").toast("dispose"); 
 });      
 });</script>';
     unset($_SESSION['msg']);
 }

?>
            <div class=" d-flex justify-content-center  my-4">
                <button class="btn btn-success btn-rounded  waves-effect" data-toggle="modal" data-target="#modalagregar">Agregar usuario</button>
            </div>
            <br>
            <!--Barra de busqueda-->
            <div class="row  justify-content-center">
                <div class="form-group col-12">
                    <input type="text" class="form-control" name="" id="txt-busqueda" aria-describedby="helpId"
                        placeholder="Busqueda">
                </div>
            </div>
        </section>   
        <br>
        <section>
   <!-- tabla de usuario -->
   <style>
       tr td:last-child{ 
    width:1%; 
    white-space:nowrap; 
    }   
  .dr:hover {
            background: #b4ffff;
        }
   </style>
  
   <table class="table mb-5 table-responsive-mb sortable" id="listado">
    <thead class="thead-dark ">
        <tr class='text-center '  class="text-center" >
            <th scope="col" class="text-center" style="width:1%;">#</th>
            <th scope="col" class="text-center" style="width:4%;">Nombre</th>
            <th scope="col" class="text-center" style="width:1%;">Apellido Paterno</th>
            <th scope="col" class="text-center" style="width:1%;">Apellido Materno</th>
            <th scope="col" class="text-center"style="width:1%;display:none;" >Numero de telefono </th>
            <th scope="col" class="text-center"style="width:1%;display:none;" >Numero de celular </th>
            <th scope="col" class="text-center"style="width:1%;display:none;" >Correo electronico </th>
            <th scope="col" class="text-center"style="width:1%;" >Tipo </th>
            <th scope="col" class="text-center"style="width:1%;" >Acciones </th>
        </tr>
    </thead>
    <tbody id="Listado">
        <?php
        obtenerUsuarios();
     ?>
      
    </tbody>
</table>

        </section>
        
<?php require("componentes/VeradminsModal.php"); ?>

</body>


<!-- funcion para pasar valores a modal -->
<script>
      function mostrarRed(id,nombre,ApellidoP,ApellidoM,telefono
    ,celular,tipo,Correo){
        document.getElementById('nombre').value = nombre;
        document.getElementById('apellidoP').value = ApellidoP;
        document.getElementById('apellidoME').value = ApellidoM;
        document.getElementById('celular').value = telefono;
        document.getElementById('telefono').value = celular;
        document.getElementById('tipo').value = tipo;
        document.getElementById('idm').value = id;
        if(Correo.trim().length>0 && Correo.trim().value!="NA")
        {
            document.getElementById('correo').value =Correo;
            document.getElementById('correolabel').href = "https://mail.google.com/mail/?view=cm&fs=1&tf=1&to="+Correo;
       
        }else{
            document.getElementById('correo').value = "NA";
            document.getElementById('correolabel').removeAttribute("href");
    
        }
        
  }
</script>
<!-- funcion para filtrado de tabla -->
<script>
$(document).ready(function(){

  
  $("#txt-busqueda").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Listado tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  

$( ".myCoolForm" ).each(function( index ) {
  $( this ).submit(function( event ) {
      if (!confirm('Realmente desea eliminar?')) {
          event.preventDefault();
      }
  });

          
    });
});

</script>

</html>