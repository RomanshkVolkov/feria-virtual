<?php
include_once("../conexiones/conexion.php");
$conexion=conexion10();
$ID_Video = $_POST['ID_Video'];
console_log($ID_Video);
$consulta="DELETE FROM `video` WHERE `ID`=".$ID_Video;
$results = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header("location:../Configuracion.php?CONFIG=Videos");
?>