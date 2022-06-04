<?php
include('../Tareas/conexion.php');
function recuperarDe($correo){
    $conexion=conexion10();
    require "../SeccionAdministrativa/PHPMailer/src/PHPMailer.php";
    require "../SeccionAdministrativa/PHPMailer/src/SMTP.php";
    require "../SeccionAdministrativa/PHPMailer/src/Exception.php";
echo'<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    //--------------VALIDAMOS EL CORREO------------------------------------------------------------------------------
    $validarUser = "SELECT * FROM `usuario` WHERE `Correo_Electronico`='$correo'";
    $valiUsuario=mysqli_query($conexion, $validarUser) or die("Error de llenado de tabla");
    $usuarios='';
    $contraseñas='';

    if(mysqli_num_rows($valiUsuario)>0){
        //----------Se almacenan los usuarios y contraseñas-----------------------------
        while ($columna = mysqli_fetch_array($valiUsuario)) {
            $usuarios.=$columna['Nombre_Usuario'].'<br><br>';
            $contraseñas.=$columna['Contrasena'].'<br><br>'; 
        }
        console_log($usuario);
        console_log($contraseña);
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
            $mail->addAddress($correo);
            //contenido
            $mail->isHTML(true);
            $mail->Subject = 'Cuenta recuperada en la feria virtual asociada a este correo!';
            $mail->Body = '<div style="margin:0px;padding:0px;font-family:Avenir,sans-serif;line-height:100%">
            <h3 class="my-4">Entrega de usuario(s) y contraseña(s) para la feria de universidades.</h3>
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
                                                            Usuario(s)
                                                            <br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center"
                                                            style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:30px;line-height:20px;color:#1a1a18;text-decoration:none;font-weight:normal">
                                                            '.$usuarios.'
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center"
                                                            style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:20px;line-height:30px;color:#454545">
                                                            Contraseña(s)
                                                            <br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center"
                                                            style="text-align:center;padding-bottom:20px;border-collapse:separate;table-layout:fixed;font-family:Avenir,sans-serif;font-size:30px;line-height:20px;color:#1a1a18;text-decoration:none;font-weight:normal">
                                                            '.$contraseñas.'
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
            if(mysqli_query($conexion, $validarUser)){
                console_log($valiUsuario);
                $mail->Send();
                echo '<script>swal("Correo enviado", "","success");</script>';
            }else{
               echo '<script>swal("Error al subir sus datos", "","warning");</script>';
            }
        }catch(Exception $e){
            echo '<script>swal("Error al enviar el correo", "","warning");</script>';
            console_log("El error es ".$e);
        }
    }
    else{
       echo '<script>swal("Error", "El usuario no existe","warning");</script>';
    }
    mysqli_close($conexion);
}

?>