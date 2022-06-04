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



<body class=" justify-content-center">
	<div class="">
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar
        bg-info ">
        <a class="navbar-brand align-items-start" href="../index.php">
            <strong>SECRETARÍA DE EDUCACIÓN</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">
            <div class=" align-items-start">
                <ul class="navbar-nav mr-auto d-flex">


                </ul>
            </div>
           
            <hr>
        
			<div style="align-items: flex-end;">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                	                    <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" id="inicio" href="../index.php" target="_self" style="display: flex;">Inicio </a>
                    </li>
                <li class="nav-item align-items-end">

                        <a class="nav-link text-uppercase" href="../SeccionAdministrativa/index.php" target="_self" id="Test" style="display: flex;">Ingreso</a>
                    </li>
                    <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" href="../Registro" target="_self" id="Test" style="display: flex;">Inscribe a tu universidad!</a>
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
						<h3>Iniciar sesion</h3>
					</div>
				</div>

				<div id="caja">

					<div>

						<!-- Modal -->

						<span id="respuestalogin">

							<?php

							session_start();

							$error = '';

							if (@$_POST['Ingresar']) {

								$username = $_POST['username'];

								$password = $_POST['password'];

								include("conexiones/conexion.php");

								validarlogin($username, $password);
								
							}
							if (isset($_SESSION['Nombre'])) {
								header("location:./".$_SESSION['tipo']);
							}
							?>
						</span>

						<span id="respuesta">

						</span>



					</div>

					<div id="resultado">

						<?php require("componentes/login.php"); ?>
						<button type="button" class="btn btn-primary" onclick="location.href='../SeccionAdministrativa/Recuperacontra.php'"> Olvido su contraseña?
						</button>
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



</html>