<?php 

function obtenerCabeceraSA(){
    $conexion = conexion10();
    $consulta = "SELECT COUNT(*) AS `UT` FROM `usuario`  WHERE `Tipo`=1 OR `Tipo`=0";
    $consulta2 = "SELECT COUNT(*) AS `SA` FROM `usuario`  WHERE `Tipo`=0 ";
    $consulta3 = "SELECT COUNT(*) AS `SU` FROM `usuario`  WHERE `Tipo`=1 ";
    $consulta4 = "SELECT COUNT(*) AS `A` FROM `usuario`  WHERE `Tipo`=2 ";

    $resultado = mysqli_query($conexion, $consulta);
    $resultado2 = mysqli_query($conexion, $consulta2);
    $resultado3 = mysqli_query($conexion, $consulta3);
    $resultado4 = mysqli_query($conexion, $consulta4);

            echo "  <div class='card'>
            <div class='card-header text-center mb-2'>
                <h2 class='text-uppercase'>    Reporte de usuarios</h2>";
              $num_rows = mysqli_num_rows( $resultado);
                if ($num_rows > 0) {
                    $columna = mysqli_fetch_array($resultado);
                    echo"<span  class='text-uppercase'>".$columna['UT']." USUARIOS TOTALES</span>";
                }else{
                    echo"<span  class='text-uppercase'>0 USUARIOS TOTALES</span>";
                }

            echo"</div>   
            <div class='card-body text-center '>
                <div class='row justify-content-center'>";
                 echo "<div class='col-6'>
                        <h5>Super administradores  </h5>";
                     
                        if (mysqli_num_rows( $resultado2)> 0) {
                            $columna2 = mysqli_fetch_array($resultado2);
                            echo"  <span>".$columna2['SA']." </span>";
                        }
                        else{
                            echo"  <span> 0 </span>";
                        }
                    echo "</div>";

                    echo "
                    <div class='col-6'>
                        <h5>Supervisores</h5>";
                        $num_rows = mysqli_num_rows( $resultado3);
                        if ($num_rows > 0) {
                            $columna3 = mysqli_fetch_array($resultado3);
                            echo" <span>".$columna3['SU']." </span>";
                        }
                        else{
                            echo"  <span> 0 </span>";
                        }
           /*        echo" 
                   </div>
                   <div class='col-6'>
                   <h5>Administradores de universidades  </h5>";
                   $num_rows = mysqli_num_rows( $resultado4);
                   if ($num_rows > 0) {
                       $columna4 = mysqli_fetch_array($resultado4);
                       echo" <span>".$columna4['A']." </span>";
                   }
                   else{
                       echo"  <span> 0 </span>";
                   };*/
                   echo "</div>
                </div>
            </div>
        
        </div>";
        
    
   
}
function obtenerUsuarios(){
    $conexion = conexion10();
    $consulta = "SELECT * FROM   `usuario` WHERE `usuario`.`Tipo`=1 OR  `usuario`.`Tipo`=0";
    $resultado = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($resultado);
    $x=1;
    if ($num_rows > 0) {
        while ($columna = mysqli_fetch_array($resultado)) {
            echo '
            <tr class="dr ">
             <td class="text-center" style="width:1%;">'.$x.'</td>
                <td class="text-center" style="width:1%;">'.$columna['Nombre'].' </td>
                <td class="text-center" style="width:1%;">'.$columna['Apellido_P'].'</td>
                <td class="text-center" style="width:1%;">'.$columna['Apellido_M'].'</td>
            <td  class="text-center"style="width:1%;display:none;" >'.$columna['Telefono'].' </td>
            <td class="text-center"style="width:1%;display:none;" >'.$columna['Celular'].' </td>
            <td  class="text-center"style="width:1%;display:none;" >'.$columna['Correo_Electronico'].'</td>
                <td class="text-center">';
                
                switch($columna['Tipo']){
                    case 0:
                        echo "Super administrador";
                        break;
                        case 1:
                            echo "Supervisor";
                            break;
                }
                
                echo '</td>
                <td class="text-center" style="width:1%;">
                   
                         <button class="btn btn-warning d-inline-flex my-0 " data-toggle="modal" data-target="#modaleditar"
                         onclick="mostrarRed(`'.$columna['ID'].'`,`'.$columna['Nombre'].'`,`'.$columna['Apellido_P'].'`,`'.$columna['Apellido_M'].'`,`'.$columna['Telefono'].'`
                         ,`'.$columna['Celular'].'`,`'.$columna['Tipo'].'`,`'.$columna['Correo_Electronico'].'`)" style="height:2rem;">
                         <img src="img/Inicio/editar.svg" alt="E" style="height:100%;margin:0;padding:0">
                        </button>
                        <form action="Tareas/ConsultasSA.php" method="POST"  class=" d-inline-flex  myCoolForm my-0 " style="height:2rem;" >
                        <input type="hidden" name="dmsg">
                        <input type="hidden" name="id" value="'.$columna['ID'].'">
                        <button type="submit" class="btn btn-danger "  style="height:100%;margin:0;padding:0">
                        <img src="img/Inicio/basura.svg" alt="D"style="height:100%;margin:0;padding:0" >
                        </button>
                    </form>
                </td>
            </tr>';
            $x++;
        }
    
        }
        
    else{
     echo '<tr class="dr ">
        <td class="text-center" style="width:1%;">No</td>
           <td class="text-center" style="width:1%;"> hay</td>
           <td class="text-center" style="width:1%;"> usuarios</td>
           <td class="text-center" style="width:1%;"> disponibles</td>
           <td class="text-center"> </td>
           <td class="text-center" style="width:1%;">
               
           </td>
       </tr>';
    }
}
if (isset($_POST['dmsg']) && isset($_POST['id'])) {
    session_start();
    include_once("../conexiones/conexion.php");

    $conexion = conexion10();
    $id=$_POST['id'];
    $consulta = "UPDATE `usuario` SET `Tipo` = '3' WHERE `usuario`.`ID` = $id";

    if(  mysqli_query($conexion, $consulta)){
        $_SESSION['msg']="Se eliminó el usuario";
      }else{
        $_SESSION['msg']="hubo un problema con la eliminación";
      }

    mysqli_close($conexion);
    header("Location: ../Superadmin.php");
    exit();

}
if (isset($_POST['emsg']) && isset($_POST['idm'])) {
    session_start();
    include_once("../conexiones/conexion.php");
    $conexion = conexion10();
    $id=$_POST['idm'];
    $consulta = "UPDATE `usuario` SET `Tipo` = '";
    $consulta.=$_POST['tipo']."' ,`Nombre` = '".$_POST['nombre']."',
`Apellido_P` ='".$_POST['ap']."',`Apellido_M` ='".$_POST['am']."',`Telefono`='".$_POST['telefono']."',
`Celular`='".$_POST['celular']."',`Correo_Electronico` ='".$_POST['correo']."'

WHERE `usuario`.`ID` =  ".$id;

  if(  mysqli_query($conexion, $consulta)){
        $_SESSION['msg']="Se edito el usuario con exito";
      }else{
        $_SESSION['msg']=$consulta;
      }


    mysqli_close($conexion);
    header("Location: ../Superadmin.php");
    exit();
    

}
if(isset($_POST['msg'])){
    session_start();
    require "../conexiones/conexion.php";
    require "../PHPMailer/src/PHPMailer.php";
    require "../PHPMailer/src/SMTP.php";
    require "../PHPMailer/src/Exception.php";
    
    
      //    CONTRASEÑA RANDOM
      $contraseña="";
      $parametros="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $maximo=strlen($parametros)-1;
      for($i=0; $i<8; $i++){
        $s = rand(0, strlen($parametros)-1);
        $contraseña .= $parametros[$s];
      }
  
    
 //    USUARIO RANDOM
 $chekeo = "1";
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
 }
    $conexion = conexion10();
    $consulta = "INSERT INTO 
    `usuario` (`ID`, `Nombre`, `Apellido_P`, `Apellido_M`, `Telefono`, `Celular`, `Correo_Electronico`, `Tipo`, `Contrasena`, `Nombre_Usuario`) 
    VALUES
    (NULL,'".$_POST['nombre']."', '".$_POST['ap']."', '".$_POST['am']."', '".$_POST['telefono']."', '".$_POST['celular']."', '".$_POST['correo']."', '".$_POST['tipo']."',
     '$contraseña', '$usuario')";
  if(  mysqli_query($conexion, $consulta)){  
  
    $_SESSION['msg']="insercion exitosa";
    

    $mail = new PHPMailer(true);
    try{
        //configuracion de servidor
        $mail->isSMTP();
        $mail->Host ='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username='feria.orientacion.educativa@gmail.com';
        $mail->Password='feria2017';
        $mail->SMTPSecure = 'ssl';   
        $mail->Port='465';
        //destinatarios
        $mail->SetFrom("feria.orientacion.educativa@gmail.com","
        No contestar a este correo (feriaVirual)");
        $mail->addAddress($_POST['correo']);
        //contenido
        $mail->isHTML(true);
        $mail->Subject = 'Cuenta creada en la feria virtual asociada a este correo!';
        $mail->Body = '<div style="margin:0px;padding:0px;font-family:Avenir,sans-serif;line-height:100%">
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
                                                        Contrase&ntilde;a
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
        $mail->Send();
        $_SESSION['msg']="Se han enviado las credenciales al correo ".$_POST['correo'];
    }catch(Exception $e){
        $_SESSION['msg']="problema ".$e;
    }
    
}else{

    $_SESSION['msg']="hubo un problema con la insercion";
  }
   
     mysqli_close($conexion);


    header("Location: ../Superadmin.php");
    exit();
}

?>
