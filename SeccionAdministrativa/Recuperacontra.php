<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login - Feria</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
 
	<!-- Custom styles for this template -->

	<style>
		input[type=radio] {

			display: none;

		}



		input[type=radio]:checked+label {

			border-radius: 50%;



			border: 3px solid #0774D9;

		}
	</style>

</head>

<?php include("funciones/contraRecuperada.php"); ?>

<body class=" justify-content-center">
	<div class="">
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar
        bg-info ">
        <a class="navbar-brand align-items-start" href="../index.php">
            <strong>Feria Virtual</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">
            <div class=" align-items-start">
                <ul class="navbar-nav mr-auto d-flex">
                    <li class="nav-item align-items-start">
                        <a class="nav-link" id="inicio" href="../index.php" target="_self">Inicio </a>
                    </li>
                    <li class="nav-item align-items-start">
                        <a class="nav-link" id="Mapa" href="../index.php#Bienvenida" target="_self" onclick="marcarMapa();">Mapa de universidades</a>
                    </li>
                    <li class="nav-item align-items-start">
                        <a class="nav-link" href="../Conferencias.php" target="_self" id="conferencias">Conferencias</a>
                    </li>
                    <li class="nav-item align-items-start">
                        <a class="nav-link" href="../TestVocacional.php" target="_self" id="Test">Test Vocacional</a>
                    </li>

                </ul>
            </div>
           
            <hr>
        
			<div style="align-items: flex-end;">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                <li class="nav-item align-items-end">
                        <a class="nav-link" href="../SeccionAdministrativa/index.php" target="_self" id="Test" style="display: flex;">Ingreso</a>
                    </li>
                    <li class="nav-item align-items-end">
                        <a class="nav-link" href="../Registro" target="_self" id="Test" style="display: flex;">Inscribe a tu universidad!</a>
                    </li>
                </ul>
            </div>

        </div>
         

    </nav>

</header>
		<div class="login-content container justify-content-center">
			<div>
				<img src="img/llave.png">
				<h2 class="title">Bienvenido</h2>
				<div class="row ">
					<div class="col d-flex justify-content-center">
						<h3>Recuperar contraseña</h3>
					</div>
				</div>
                <hr>
				<div id="caja">

					<div id="resultado">

                    <form form="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="col-12 mb-3">
                        <div class="row">
                            <label for="correoresponsable" class="col-12 col-md-3">Correo:</label>
                            <input type="text" class="form-control col-12 col-md-9" id="correoresponsable" name="correoresponsable" placeholder="Correo registrado del coordinador" required>
                        </div>
                    </div>
                    <button class="btnL btn btn-primary btn-lg btn-block" type="submit" id="brecu" value="Recuperar" name="brecu" >Recuperar
                    </button>
                    </form>
                    <p>El correo a poner es el del coordinador de la institución <br>
                        previamente registrado. Se le enviará una nueva <br>
                        contraseña a el correo del coordinador</p>
					</div>



				</div>





			</div>



		</div>

	</div>



	<script src="js/jquery.min.js"></script>

	<script src="js/popper.js"></script>

	<script src="js/bootstrap.min.js"></script>





	<script>
		$(document).ready(function() {

			$('bEnviarL').click(function() {

				$(".toast").toast({

					autohide: false

				});

				$(".toast").toast("show");

			});



		});
	</script>



	<script src="js/ajax.jquery.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

	<script type="text/javascript" src="js/validar_inicio.js"></script>

</body>

<?php
if(isset($_POST['correoresponsable'])){
	$correoco=$_POST['correoresponsable'];
	//Insert
	recuperarDe($correoco);
	//Borrado de datos
	unset($correoco);
}
?>
<script type="text/javascript" src="../Registro/evitar_reenvio.js"></script>
</html>