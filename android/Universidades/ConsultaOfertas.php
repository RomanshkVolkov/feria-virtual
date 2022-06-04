<?php

if(isset($_GET["idUni"]) && $_GET["idUni"] != ""){



    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $idUni = $_GET["idUni"];

    $respuesta["Ofertas"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

    $sql="SELECT `carrera`.`Nombre` AS NombreCarrera,`carrera`.`Recurso`, `nivel_educativo`.`Nombre`,`carrera`.`Nivel_Educativo_ID` ,
`nivel_educativo`.`ID`
    FROM `carrera` 
    LEFT JOIN `nivel_educativo` ON

`carrera`.`Nivel_Educativo_ID` = `nivel_educativo`.`ID`
     WHERE `Universidad_ID`=$idUni AND Recurso!='NA' ORDER BY `Nivel_Educativo_ID` ASC";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría

    $tmp = array();

    

    $tmp["ID"] = $row["ID"];

    $tmp["Titulo"] = $row["Nombre"];

    $tmp["VT"] = $row["NombreCarrera"];

    $tmp["Direccion"] = $row["Recurso"];

    

    // Push categoría a final json array

    array_push($respuesta["Ofertas"], $tmp);

    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

    

}

?>

