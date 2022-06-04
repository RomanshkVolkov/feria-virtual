<?php
include('../Tareas/conexion.php');
if(isset($_POST['esta'])){
  $Estadosele=$_POST['esta'];
  //getMunicipiosBox($Estadosele);

}
echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
// EL USUARIO SE REGISTRA
function InsertUsuario($Nombre, $ApellidoP, $ApellidoM, $Telefono, $Celular, $Correo, $contraseña,
$usuario, $Nombre1, $Tipo1, $TelefonoUni1, $CorreoUni1, $NumIn11, $NumEx11, $Calle11, $Colonia11, 
$Ciudad11, $CP11, $idMunicipios11, $carreras, $rvoes, $provs, $lvl, $claveTra, $per1odo){
    $conexion=conexion10();
    require "../SeccionAdministrativa/PHPMailer/src/PHPMailer.php";
    require "../SeccionAdministrativa/PHPMailer/src/SMTP.php";
    require "../SeccionAdministrativa/PHPMailer/src/Exception.php";

    //    CONTRASEÑA RANDOM
    /*$contraseña="";
    $parametros="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $maximo=strlen($parametros)-1;
    for($i=0; $i<8; $i++){
      $s = rand(0, strlen($parametros)-1);
      $contraseña .= $parametros[$s];
    }*/

    //    USUARIO RANDOM
    /*$chekeo = "1";
    $usuario="";
    while ($chekeo == "1") {
      $datos="ABCUDEFOGHIJKLMNOPQRISTEUVWXYZA";
      $max=strlen($datos)-1;
      for($i=0; $i<5; $i++){
      $s = rand(0, strlen($datos)-1);
      $usuario .= $datos[$s];
      }
      $validarUser = "SELECT * FROM `usuario` WHERE `Nombre_Usuario`='$usuario'";
      $valiUsuario=mysqli_query($conexion, $validarUser);
      if(mysqli_num_rows($valiUsuario)>0){
        $chekeo = "1";
      }
      else{
        $chekeo = "0";
      }
    }*/
    
    //  VALIDAR UNIVERSIDAD
    $validarUni = "SELECT * FROM `universidad` WHERE `Nombre`='$Nombre1'";
    $valiUniversidad=mysqli_query($conexion, $validarUni);
    if(mysqli_num_rows($valiUniversidad)>0){
      echo '<script>swal("Error", "la universidad ya existe","warning");</script>';
    }else{
    $consulta="INSERT INTO `usuario`
    (`Nombre`, `Apellido_P`, `Apellido_M`, `Telefono`, `Celular`, `Correo_Electronico`, `Tipo`, `Contrasena`, `Nombre_Usuario`) 
    VALUES ('$Nombre', '$ApellidoP', '$ApellidoM', '$Telefono', '$Celular', '$Correo', '2', '$contraseña', '$usuario')";
    //// CAMBIOS 2022 ///
    $consultamail = "SELECT * FROM mail";
    $resultadomail = mysqli_query($conexion, $consultamail) or die("Error en obtener mail bd");
    while ($columnamail = mysqli_fetch_array($resultadomail)) {
    $mailres=$columnamail['correo'];
    $mailres2=$columnamail['pass'];
    }
    ////////////////
    $mail = new PHPMailer(true);
    try{
        //configuracion de servidor
        $mail->isSMTP();
       $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username= $mailres;
        $mail->Password= $mailres2;
        $mail->SMTPSecure = 'ssl';   
        $mail->Port='465';
        //destinatarios
        $mail->SetFrom("feria.orientacion.educativa@gmail.com","
        No contestar a este correo (feriaVirual)");
        $mail->addAddress($Correo);
        //contenido
        $mail->isHTML(true);
        $mail->Subject = 'Cuenta creada en la feria virtual asociada a este correo!';
        $mail->Body = '<div style="margin:0px;padding:0px;font-family:Avenir,sans-serif;line-height:100%">
        <h4 class="my-4">Entrega de usuario y contraseña para la feria de universidades.</h4>
        <p class="my-4">ATENCIÓN. Su usuario no cuenta con logo de su universidad ni archivos correspondientes, <br>
        los cuales podrá subir ingresando a su usuario asignado.</p>
        <table border="0" align="center" cellpadding="0" cellspacing="0" 
            style="table-layout:fixed;border-collapse:separate;background-color:#5bc0de;width:100%;min-width:100%">
            <tbody>
                <tr>
                    <td align="center" style="border-collapse:separate;table-layout:fixed">
                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                            width="600"
                            style="width:600px;table-layout:fixed;border-collapse:separate;min-width:600px">
                            <tbody>
                                <tr>
                                    <td align="center" bgcolor="#E7E6E3" 
                                        style="border-collapse:separate;table-layout:fixed;padding-top:30px">
                                        <table border="0" cellspacing="0"
                                            cellpadding="0"
                                            style="table-layout:fixed;border-collapse:separate;width:90%">
                                            <tbody>
                                                <tr>
                                                    <td align="center" 
                                                        style="padding-bottom:40px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:31px;line-height:32px;color:#1a1a18;text-decoration:none;font-weight:normal">
                                                        <strong>Credenciales para la feria virtual</strong>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center" 
                                                        style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:20px;line-height:30px;color:#454545">
                                                        Usuario
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"
                                                        style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:40px;line-height:32px;color:#1a1a18;text-decoration:none;font-weight:normal">
                                                        '.$usuario.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"
                                                        style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:20px;line-height:30px;color:#454545">
                                                        Contraseña
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center"
                                                        style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:40px;line-height:32px;color:#1a1a18;text-decoration:none;font-weight:normal">
                                                        '.$contraseña.'
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
          </table>
        </div>';
        if(mysqli_query($conexion, $consulta)){
          console_log($consulta);
          $mail->Send();
  
          $IDUSER = mysqli_insert_id($conexion);
          console_log($IDUSER);
  
          InsertUni($Nombre1, $Tipo1, $IDUSER, $TelefonoUni1, $CorreoUni1, $NumIn11, $NumEx11, $Calle11, $Colonia11, 
          $Ciudad11, $CP11, $idMunicipios11, $carreras, $rvoes, $provs, $lvl, $claveTra, $per1odo);
        }else{
          echo '<script>swal("Error al subir sus datos", "","warning");</script>';
        }
    }catch(Exception $e){
       echo '<script>swal("Error al enviar el correo", "","warning");</script>';
      console_log("El error es ".$e);
    }
      
  }
    mysqli_close($conexion);
}

// SE AÑADE LA UNIVERSIDAD AL USUARIO 
function InsertUni($Nombre, $Tipo, $UserInsertId, $TelefonoUni, $CorreoUni,
$NumIn1, $NumEx1, $Calle1, $Colonia1, $Ciudad1, $CP1, $idMunicipios1, $carreras1, $rvoes1, $provs1, $nvl, $claveT, $per10do){

  $conexion2=conexion10();
  $nombreMayus=strtoupper($Nombre);

  $consulta="INSERT INTO `universidad`(`Nombre`, `Ruta_Escudo`, `Tipo`, `Proceso_Admision`, `Clave_Centro_Trabajo`, `Usuario_ID`, `Estatus_ID`) 
  VALUES ('".$nombreMayus."', 'NA', '".$Tipo."', 'NA', '".$claveT."', '".$UserInsertId."', '1')";

  if(mysqli_query($conexion2, $consulta)){
    console_log($consulta);
    $idUNI = mysqli_insert_id($conexion2);
    //Pasamos parametros
    // CONTACTOS
    InsertContacUni($TelefonoUni, $CorreoUni, $idUNI);
    // UBICACIONES
    InserUbica($NumIn1, $NumEx1, $Calle1, $Colonia1, $Ciudad1, $CP1, $idUNI, $idMunicipios1);
    // CARRERAS
    InsertCarrera($carreras1, $rvoes1, $provs1, $idUNI, $nvl, $per10do);
  }
  // SE CIERRA
  mysqli_close($conexion2);

}

// SE AÑADE EL CONTACTO DEL INSTITUTO
function InsertContacUni($Telefono, $Correo, $IDUniAlways){
  $conexion5=conexion10();

  $consulta="INSERT INTO `contacto_universidad`(`Telefono`, `Correo_Electronico`, `Universidad_ID`) VALUES ('".$Telefono."', '".$Correo."', '".$IDUniAlways."')";

  if(mysqli_query($conexion5, $consulta)){
    console_log($consulta);

    console_log("El id de la universidad es ".$IDUniAlways);
  }
  mysqli_close($conexion5);

}

// SE AÑADE LA UBICACIÓN DEL INSTITUTO
function InserUbica($NumIn, $NumEx, $Calle, $Colonia, $Ciudad, $CP, $idInstituto, $idMunicipios){
  $conexion6=conexion10();

  $consulta="INSERT INTO `ubicacion`(`Num_Interior`, `Num_Exterior`, `Calle`, `Colonia`, `Ciudad`, `Codigo_Postal`, `url_Maps`, `Universidad_ID`, `Municipio_ID`) 
  VALUES ('$NumIn', '$NumEx', '$Calle', '$Colonia', '$Ciudad', '$CP', 'NA', '$idInstituto', '$idMunicipios')";

  if(mysqli_query($conexion6, $consulta)){
    console_log($consulta);
  }

  mysqli_close($conexion6);
}
//funcion para crear una nueva seccion en base al nombre de la carrera
/*function nuevaSeccion($titulo)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO seccion (Nombre)

  VALUES ('" . $titulo . "');";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  $IDSeccion = mysqli_insert_id($conexion);

  console_log($IDSeccion);

  return $IDSeccion;

  mysqli_close($conexion);
}*/

// SE AÑADEN LAS CARRERAS
function InsertCarrera($nombreCarrera, $RVOEs, $checks, $idUniversidades, $nivel, $per){
  $conexion7=conexion10();
  $valores="";
  while (true) {
    // RECUPERAMOS VALORES DEL ARRAY
    $carrera= current($nombreCarrera);
    $rvoe= current($RVOEs);
    $check= current($checks);
    $nvlEdu= current($nivel);
    $periodoV= current($per);

    // ASIGNAMOS LOS VALORES
    $carr=(($carrera !== false) ? $carrera : ", &nbsp;");
    $registro=(($rvoe !== false) ? $rvoe : ", &nbsp;");
    $c=(($check !== false) ? $check : ", &nbsp;");
    $pVigencia=(($periodoV !== false) ? $periodoV : ", &nbsp;");
    $educacion=(($nvlEdu !== false) ? $nvlEdu : ", &nbsp;");
    $auxiliar ="NULL";


    //////////////////  CAMBIOS 06-02-22 //////////
    $IDsecc="";
$consul01="INSERT INTO `seccion`(`Nombre`) VALUES ('$carr')";
      if(mysqli_query($conexion7, $consul01)){
        $IDsecc = mysqli_insert_id($conexion7);
      console_log($IDsecc);
    }

   
    // CONDICIONAL PARA LA CONSULTA RESPECTO AL RVOE
    if($c != 1){
      $valores="('$carr', $auxiliar, 'NA', $auxiliar, '$idUniversidades', '1', '$IDsecc', '$educacion'),";
    }else{
      $valores="('$carr', '$registro', 'NA', '$pVigencia', '$idUniversidades', '1', '$IDsecc', '$educacion'),";
    }

    // YA QUE TERMINAMSO CON COMA HACEMOS ESTO
    $valoresF= substr($valores, 0, -1);

    // GUARDAMOS LA CONSULTA
    $consulta="INSERT INTO `carrera`(`Nombre`, `RVOE`, `Recurso`,  `Periodo_Vigencia`, `Universidad_ID`, `Estatus_ID`, `Seccion_ID`, `Nivel_Educativo_ID`) VALUES $valoresF";
    // Y LA EJECUTAMOS 
    if(mysqli_query($conexion7, $consulta)){
      console_log($consulta);
    }

    /////// FIN //////



    // Pasamos siguiente valores
    $carrera= next($nombreCarrera);
    $rvoe= next($RVOEs);
    $check= next($checks);
    $nvlEdu= next($nivel);
    $periodoV= next($per);

    // CHECK TERMINATOR
    if($carrera === false && $rvoe === false && $check === false && $nvlEdu === false) break;

  }
  console_log($nombreCarrera);
  console_log($RVOEs);
  console_log($checks);
  console_log($nivel);
  console_log($per);
  mysqli_close($conexion7);

}

// Conseguimos los Estados
function getEstadosBox()
{
  $conexion = conexion10();
  $consulta = "SELECT * FROM estado;";
  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");
  if (mysqli_num_rows($resultado) > 0) {
    while ($columna = mysqli_fetch_array($resultado)) {
        if($columna['ID'] == 1){
          echo '<option selected value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
        }else{
        echo '<option value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
        } 
    }
  }
  mysqli_close($conexion);
}

function getNivelEducativo(){
  $conexion = conexion10();
  $consulta = "SELECT * FROM `nivel_educativo`";
  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");
  if (mysqli_num_rows($resultado) > 0) {
    while ($columna = mysqli_fetch_array($resultado)) {
        if($columna['ID'] == 1){
          echo '<option selected value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
        }else{
        echo '<option value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
        } 
    }
  }
  mysqli_close($conexion);
}

?>