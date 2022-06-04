<?php

    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $respuesta["VideoSeccion"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

    $sql="SELECT `video`.*, `seccion`.`Nombre` 
    FROM `video` 
    INNER  JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID`
    
    WHERE   `video`.`Seccion_ID`=2 
    ORDER BY `video`.`Seccion_ID` ASC";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría
        if(strlen(trim($row["Recurso"]))>0 && strlen(trim($row["Titulo"]))>0 && strlen(trim($row["Nombre"]))>0){
           

            /*$tmp["Titulo"] = $row["Titulo"];
        
            $tmp["Direccion"] = $row["Recurso"];
        
            $tmp["Nombre"] = $row["Nombre"];*/
            $tmp = array();

            $tmp["ID"] = $row["Seccion_ID"];
    
            $tmp["Titulo"] = $row["Titulo"];
    
            $tmp["VT"] = $row["Nombre"];
    
            $tmp["Direccion"] = $row["Recurso"];
    
            array_push($respuesta["VideoSeccion"], $tmp);


        }
       
    

    // Push categoría a final json array

    //array_push($respuesta["Conferencias"], $tmp);



    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);



?>

