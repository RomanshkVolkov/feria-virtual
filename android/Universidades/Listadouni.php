<?php

if(isset($_GET["municipio"]) && $_GET["municipio"] != ""){



    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $municipio = $_GET["municipio"];

    $respuesta["Universidades"] = array();
    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

    $sql="SELECT universidad.Nombre, universidad.Ruta_Escudo, universidad.ID,municipio.Nombre as NM FROM `universidad` 
    LEFT JOIN `ubicacion` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` 
    LEFT JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
    WHERE ubicacion.Municipio_ID = $municipio AND (universidad.Estatus_ID = 3 OR universidad.Estatus_ID = 2)";
    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría

    $tmp = array();

    $tmp["Escudo"] = $row["Ruta_Escudo"];

    $tmp["Nombre"] = $row["Nombre"];

    $tmp["ID"] = $row["ID"];
    $tmp["NM"] = $row["NM"];
    // Push categoría a final json array

    array_push($respuesta["Universidades"], $tmp);

    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

}

?>

