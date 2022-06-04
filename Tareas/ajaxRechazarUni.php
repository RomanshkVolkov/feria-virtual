<?php 
    if($_POST){
        require_once("conexion.php");
        require "../SeccionAdministrativa/PHPMailer/src/PHPMailer.php";
        require "../SeccionAdministrativa/PHPMailer/src/SMTP.php";
        require "../SeccionAdministrativa/PHPMailer/src/Exception.php";

        $opcion = $_POST['action'];

    //Determinamos si vamos a actualizar las carreras o solo la universidad
    if($opcion == 1){
        //Codigo que se realiza para actualizar el estatus de las carreras
        $IdElemento = $_POST['IdElemento'];

        $conexion = conexion10();
    
        $consulta = "UPDATE carrera SET Estatus_ID = 4 WHERE ID = $IdElemento";
    
        $resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);
    }else if($opcion == 2){
         //Codigo que se realiza para actualizar el estatus de las fotos
         $IdElemento = $_POST['IdElemento'];

         $conexion = conexion10();
     
         $consulta = "UPDATE foto SET Estatus_ID = 4 WHERE ID = $IdElemento";
     
         $resultado = mysqli_query($conexion, $consulta);
 
         mysqli_close($conexion);       
    }else if($opcion == 3){
        //Codigo que se realiza para actualizar el estatus de las fotos
        $IdElemento = $_POST['IdElemento'];

        $conexion = conexion10();
    
        $consulta = "UPDATE video SET Estatus_ID = 4 WHERE ID = $IdElemento";
    
        $resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);       
   }else if($opcion == 4){
    //Codigo que se realiza para actualizar el estatus de las fotos
    $IdElemento = $_POST['IdElemento'];

    $conexion = conexion10();

    $consulta = "UPDATE beca SET Estatus_ID = 4 WHERE ID = $IdElemento";

    $resultado = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);       
}else if($opcion == 10){
        //Codigo que se realiza si vamos a actualizar el estatus de la universidad
        $IdUni = $_POST['IdUni'];
        $mensaje = $_POST['Mensaje'];
        $email = $_POST['Email'];

        $conexion = conexion10();
    
        $consulta = "UPDATE universidad SET Estatus_ID = 4 WHERE ID = $IdUni";
    
        $resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);

        //Empieza el codigo para mandar el correo que contiene el mensaje de rechazo
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
                $mail->addAddress($email);
                //contenido
                $mail->isHTML(true);
                $mail->Subject = 'Mensaje para notificar el rechazo a su solicitud de participaci&oacute;n en la feria virtual';
                $mail->Body = $mensaje;
                $mail->Send();
            }catch(Exception $e){

            }
    }
            
    exit;
    }
    
?>