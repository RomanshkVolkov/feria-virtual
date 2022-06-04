<?php

if(isset($_GET["idUni"]) && $_GET["idUni"] != ""){



    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $idUni = $_GET["idUni"];

    $respuesta["Universidades"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

    $sql="SELECT * FROM `beca` WHERE `Universidad_ID`=$idUni";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría

    $tmp = array();

    $tmp["Nombre"] = $row["Titulo"];

    $tmp["Direccion"] = $row["Recurso"];

    

    // Push categoría a final json array

    array_push($respuesta["Universidades"], $tmp);

    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json


    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

}

?>

