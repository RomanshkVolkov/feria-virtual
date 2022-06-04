
<html lang="en" class="full-height">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
  <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
    <title>Registro</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="../SeccionAdministrativa/css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="mystyle.css">
   <!-- add icon link -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<?php include("ConsultasDeRegistro.php"); ?>
<body>
  <!-- imagen principal class="img-fluid"-->
  <div class="container text-center mb-3 mt-5"><img src="img/secretaria-seq.png" class="img-fluid" alt="Feria Virtual"><hr class="my-3"></div>
  <!-- imagen principal fin -->

  <!--Menu-->
  <div class="container">
      <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
       <!-- <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Convocatoria</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="../SeccionAdministrativa/index.php" role="tab"
            aria-controls="pills-contact" >Ingreso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="../index.php" role="tab"
            aria-controls="pills-contact" >Regresar a la feria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">Sobre nosotros</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
      <!--  <div class="tab-pane fade show active text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          Bienvenidos a la convocatoria para la feria de universidades, para registrar su universidad está el apartado
          "Registro" <br>en donde deberá llenar sus respectivos campos para cumplir con su registro a la feria 
          virtual de universidades.<br>
          Cabe aclarar que este apartado es para las universidades que piensan registrar a su respectiva instalación 
          <br>en esta feria virtual para que los jovenes aspirantes las vean reflejadas en la aplicación móvil y en este
          sitio.<br>
          </div>-->
        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <?php include("registro.php"); ?>
        </div>
        <div class="tab-pane fade" id="pills-ingress" role="tabpanel" aria-labelledby="pills-ingress-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
          <?php include("aboutus.php"); ?>
        </div>
      </div>
  </div>
  <!--Menu Fin-->
  <br>
  <!-------- script base --------->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <!--------------script de funciones interna--------------->
  <script type="text/javascript">
    function validar(){
      var copia = document.getElementById("copiatxt").value;
      var captcha = document.getElementById("captcha").value;
      var carreras = document.getElementById("carrera");
      for(var i = 0; i < carreras.length; i++){
        if(document.getElementById("prov").checked) {
          document.getElementById('rp').disabled = true;
        }
      }
    }

// AGREGAR Inputs
$(document).ready(function () {
    var campos_max          = 20;   //max de 10 campos
      var contador = 1;
        var x = 0;
      
  
        $('#add_field').click (function(e) {
                e.preventDefault();     //prevenir novos clicks
               var tipo2 = $("#Tinstituto option:selected").text();
               var valorinstituto= '';
               var deshabilitar='';
               
                if (tipo2 == 'Pública') {deshabilitar=' value="NA" style="display:none"';}
                if (x < campos_max) {
                        $('#listado').append('<tr>'+
                                '<td><input class="form-control col-12 col-md-12" type="text" name="carrera[]" id="carrera" placeholder="Nombre de la carrera" required/></td>'+
                                '<td><select class="browser-default custom-select form-control col-12 col-md-9" id="lvlEdu[]" name="nvlEdu[]">'+
                                '<?php getNivelEducativo(); ?></select></td>'+
                                '<td><input type="checkbox" class="col-12 col-md-4 institutocheck"  style="display:none" id="prov[]" name="prov'+contador+'" value=1 checked onclick="return false;" >'+
                                '<input type="hidden" id="rp[]" name="check[]" value=0></td>'+
                                '<td><input class="form-control col-12 col-md-9 " type="text" name="rvoe[]" id="rvoe[]" placeholder="Dato solicitado"/></td>'+
                                '<td class="row"><input class="form-control col-12 col-md-7 RVOETEXT"  '+deshabilitar+' name="periodo[]" type="text" id="periodo[]"placeholder="Escriba su periodo..."/>'+
                                '<a href="#" class="remover_campo btn btn-primary btn-sm"> - </a></td>'+
                                '</tr>');
                        x++;
                        contador++;
                }
                console.log("Funcaaaa");
                if(x>19){
                  $('#add_field').prop( "disabled", true );
                }else{$('#add_field').prop( "disabled", false );}
        });
        // Remover o div anterior
        $('#listado').on("click",".remover_campo",function(e) {
                e.preventDefault();
                $(this).parent('td').parent('tr').remove();
                x--;
                if(x>9){
                  $('#add_field').prop( "disabled", true );
                }else{$('#add_field').prop( "disabled", false );}
        });
      });


        //Para el select de municipio dependiendo de su estado
      $(document).ready(function(){
        recargarlista(1);
      });

      function recargarlista(val){
        var dataContact = '';
    $.ajax({
        url: '../Tareas/ajaxRegistroMunicipio.php',
        type: 'POST',
        async: true,
        data: {
            action: val
        },
        success: function (resultado) {
            if (resultado == 'noData') {
                dataContact = 'no se encontraron resultados';
            } else {
                var info = JSON.parse(resultado);
                dataContact = info;
            }

            $('#slctBox').html(dataContact);
            
        }, error: function (error) {
            console.log(error);
        }

    });
      }

  </script>
  
</body>

<?php 
if(isset($_POST['enviando']) && isset($_POST['copiatxt'])){
  if($_POST['copiatxt']==$_POST['captcha'] && $_POST['correoCon']==$_POST['correoR']){
    $conexion=conexion10();
    // Datos del usuario
    $nombreRes=$_POST['responsablename'];
    $ApPa=$_POST['APResponsable'];
    $ApMa=$_POST['AMResponsable'];
    $Tel=$_POST['telfijo'];
    $Movil=$_POST['numeromovil'];
    $correoR=$_POST['correoR'];
    $user=$_POST['usuarionam'];
    $password=$_POST['contra'];
    // Datos de la universidad
    $NameInstituto=$_POST['uniname'];
    $TipoInstituto=$_POST['Tinstituto'];
    $cTrabajo=$_POST['ctraba'];
    // Datos de la ubicación
    $numeroI=$_POST['numeroI'];
    $numeroE=$_POST['numeroE'];
    $calle=$_POST['calleD'];
    $colonia=$_POST['coloniavalue'];
    $ciudad=$_POST['ciudadvalue'];
    $codiPos=$_POST['CPdato'];
    $Muni=$_POST['municipio'];
    // Datos del contacto de la uni
    $TelUni=$_POST['telefonovalue'];
    $correoU=$_POST['correoUni'];
    // Datos de la carrera
    $carrera=($_POST['carrera']);
    $rvoe=($_POST['rvoe']);
    $nivel=($_POST['nvlEdu']);
    $periodo=($_POST['periodo']);
    $check=array();
    $n=count($carrera);
    for($i=0; $i<$n; $i++) 
    {       
      if (isset($_POST['prov'.$i])){
        $check[]=1;
      }
      else{
        $check[]=0;
      }
    }
    $validarUser = "SELECT * FROM `usuario` WHERE `Nombre_Usuario`='$user'";
    $validarUser=mysqli_query($conexion, $validarUser);
    if(mysqli_num_rows($validarUser)>0){
       echo '<script>swal("Error", "el usuario ya existe","warning");</script>';
    }
    else{
      // Insert Master
      InsertUsuario($nombreRes, $ApPa, $ApMa, $Tel, $Movil, $correoR, $password,
      $user, $NameInstituto, $TipoInstituto, $TelUni, $correoU, $numeroI, $numeroE, 
      $calle, $colonia, $ciudad, $codiPos, $Muni, $carrera, $rvoe, $check, $nivel, $cTrabajo, $periodo);
      // Borramos datos
      unset($nombreRes, $ApPa, $ApMa, $Tel, $Movil, $correoR, $password, $NameInstituto, $user,
      $TipoInstituto, $TelUni, $correoU, $numeroI, $numeroE, $calle, $colonia, $ciudad, $codiPos, $Muni, $carrera, 
      $rvoe, $check, $nivel, $n, $cTrabajo, $periodo);
    }
    mysqli_close($conexion);
  }else{
   echo '<script>swal("Error al enviar el correo", "","warning");</script>';
  }
}
?>
<?php 
include_once("../Componentes/footer.php");
?>
<script type="text/javascript" src="evitar_reenvio.js"></script>
</html>