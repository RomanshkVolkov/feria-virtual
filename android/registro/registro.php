<?php 
include_once ('../conexion/conexion.php');
  //creacion de la conexion a la base de datos con mysql_conect()

  $conexion = mysqli_connect($host, $username, $password, $db_name) or die ("No se ha podido conectar a la base de datos");

//Seleccion de la base de datos a utilizar


$db = mysqli_select_db($conexion,$db_name) or die ("No se ha podido x2");


if (isset($_GET["nombre"]) && $_GET["nombre"] != "" && isset($_GET["apellidoP"]) && $_GET["apellidoM"] != "" &&

isset($_GET["apellidoM"]) && $_GET["apellidoM"] != "" && isset($_GET["numero"]) && $_GET["numero"] != ""

&& isset($_GET["correo"]) && $_GET["correo"] != "" && isset($_GET["escuela"]) && $_GET["escuela"] != ""

&& isset($_GET["AreaInteres"]) && $_GET["AreaInteres"] != "" ) {

// variable respuesta array para json


$respuesta = array();

$nombre = $_GET["nombre"];

$apellidoP = $_GET["apellidoP"];

$apellidoM = $_GET["apellidoM"];

$numero =  $_GET["numero"];

$correo=  $_GET["correo"];

$Motivo= $_GET["Motivo"];

$escuela= $_GET["escuela"];

$AreaInteres =  $_GET["AreaInteres"]; 






// mysql query

$query = "INSERT INTO registrado(Nombre,Apellido_P,Apellido_M,Correo_Electronico,Telefono,Motivo,Escuela,Area_ID) VALUES(

'$nombre','$apellidoP','$apellidoM','$correo','$numero','$Motivo','$escuela','$AreaInteres')";


$result = mysqli_query($conexion,$query) or die("Problemas al insertar".mysqli_error($conexion));

if ($result) {

$respuesta["error"] = false;

$respuesta["message"] = "Bienvenido a la feria!";

} else {

$respuesta["error"] = true;

$respuesta["message"] = "Fallo con el registro!";

}

} else {

$respuesta["error"] = true;

$respuesta["message"] = "No se encontraron los datos!";

}

// echo json respuesta


echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
?>