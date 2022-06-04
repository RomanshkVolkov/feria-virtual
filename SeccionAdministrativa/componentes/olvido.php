<br />

<br />

<form class="needs-validation " action="index.php" method="POST">

    <div class="input-div one ">

        <div class="i ">

            <i class="fas fa-mail-bulk"></i>

        </div>

        <div class="div input-group">

            <h5>Correo electr&oacute;nico</h5>

            <br />

            <input type="email" class="input custom-control-label input-group" id="CorreoL" name="correo" required>

            <br>



            <br>



            <div class="valid-feedback " style="width: 100%;">

                ok!

            </div>

            <div class="invalid-feedback" style="width: 100%;">

                Ingrese su correo electronico

            </div>

        </div>

    </div>

    <button class="btnL btn btn-primary btn-lg btn-block" type="submit" id="btnEnviarO" value="olvido" name="olvido">Recuperar

        contraseña

    </button>

</form>



<script type="text/javascript" src="js/main.js"></script>

<?php

if(@$_POST['olvido']){

    $to = $_POST['correo'];

    $subject = "Recuperacion de contraseña";

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $message = "

    <html>

    <head>

    <title>OLVIDE MI CONTRASEÑA</title>

    </head>

    <body>

    <h1>Esta es tu contraseña: </h1>

    <p>contraseña</p>

    </body>

    </html>"; 

    

    mail($to, $subject, $message, $headers);

}

?>