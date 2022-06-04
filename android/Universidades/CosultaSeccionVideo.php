<?php

if(isset($_GET["idUni"]) && $_GET["idUni"] != ""){

    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $idUni = $_GET["idUni"];

    $respuesta["VideoSeccion"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");
    $sql="SELECT `video`.*, `seccion`.`Nombre` 
    FROM `video` 
    LEFT JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID`
    WHERE   video.Universidad_ID=$idUni  AND(`video`.`Seccion_ID`=1  OR `video`.`Seccion_ID`=3) AND `video`.`Seccion_ID`!=2 ORDER BY `video`.`Seccion_ID` ASC";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

        $tmp = array();
    // Array temporal para crear una sola categoría
    $tmp["ID"] = $row["Seccion_ID"];

    $tmp["Titulo"] = $row["Titulo"];

    $tmp["VT"] = $row["Nombre"];

    $tmp["Direccion"] = $row["Recurso"];
    array_push($respuesta["VideoSeccion"], $tmp);
    }

    $sql="SELECT `video`.*, `seccion`.`Nombre` 
    FROM `video` 
    LEFT JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID`
    LEFT JOIN `carrera` ON `video`.`Seccion_ID` = `carrera`.`Seccion_ID`
    WHERE   video.Universidad_ID=$idUni  AND(`video`.`Seccion_ID`!=1 AND `video`.`Seccion_ID`!=2 AND `video`.`Seccion_ID`!=3)
    AND `carrera`.`Estatus_ID`=3 ORDER BY `video`.`Seccion_ID` ASC";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría
    $tmp = array();
    $tmp["ID"] = $row["Seccion_ID"];

    $tmp["Titulo"] = $row["Titulo"];

    $tmp["VT"] = $row["Nombre"];

    $tmp["Direccion"] = $row["Recurso"];

    
    array_push($respuesta["VideoSeccion"], $tmp);
    
    }
// Push categoría a final json array

  
    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

}

?>

