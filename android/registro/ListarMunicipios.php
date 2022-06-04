<?php
include_once ('../conexion/conexion.php');

$respuesta = array();

$respuesta["Municipios"] = array();

// Conectarse al servidor y seleccionar base de datos.

$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

mysqli_select_db($con,"$db_name")or die("cannot select DB");

$sql="SELECT `municipio`.* FROM `universidad` 
JOIN `ubicacion` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` 
JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` WHERE (universidad.Estatus_ID = 3 OR universidad.Estatus_ID = 2)  GROUP BY municipio.ID";

$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)){

// Array temporal para crear una sola categoría
   $tmp = array();

    $tmp["ID"] = $row["ID"];
    
    $tmp["Nombre"] = $row["Nombre"];
    
    $tmp["Escudo"] = "https://feriavirtual-upqroo.ozelot.it/".$row["Ruta_Escudo"];
    
    // Push categoría a final json array
    
    array_push($respuesta["Municipios"], $tmp);



}

// Mantener el encabezado de respuesta a json

header('Content-Type: application/json; Charset=UTF-8');

//Escuchando el resultado de json
echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

?>