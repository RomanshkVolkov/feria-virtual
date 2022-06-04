<?php

if(isset($_GET["idUni"]) && $_GET["idUni"] != ""){

    include_once ('../conexion/conexion.php');

    

    $respuesta = array();

    $idUni = $_GET["idUni"];

    $respuesta["SeccionesD"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

   /* $sql="SELECT 

    (SELECT  Nombre from universidad WHERE ID=$idUni ) AS NU,

    (SELECT  count(*) from beca WHERE Universidad_ID=$idUni ) AS CB,

    (SELECT  count(*) from carrera WHERE Universidad_ID=$idUni) AS CC,

    (SELECT count(*) from video WHERE Universidad_ID=$idUni) AS CV,

    (SELECT  count(*) from foto WHERE Universidad_ID=$idUni) AS CF ,

    (SELECT  count(*) from contacto_universidad WHERE Universidad_ID=$idUni) AS CU ,

    (SELECT  Proceso_Admision from universidad WHERE ID=$idUni) AS PA";*/
    $sql="SELECT 
    (SELECT  Nombre from universidad WHERE ID=$idUni ) AS NU,
    (SELECT COUNT( `carrera`.`Universidad_ID`) FROM `carrera` WHERE `carrera`.`Universidad_ID`=$idUni AND `carrera`.`Estatus_ID`=3  AND `Recurso`!='NA'  GROUP BY `Universidad_ID`) AS CC
    ,(SELECT COUNT(`Titulo`) FROM `beca` WHERE `Universidad_ID`=$idUni GROUP BY `Universidad_ID`) AS CB,
    (SELECT COUNT(`Universidad_ID`) FROM `video`  WHERE`Universidad_ID`=$idUni  GROUP BY `Universidad_ID`) AS CV,
    (SELECT COUNT(`Universidad_ID`) FROM `foto` WHERE  `Universidad_ID` =$idUni GROUP BY `Universidad_ID` )AS CF,
    (SELECT  COUNT(*) from contacto_universidad WHERE Universidad_ID=$idUni) AS CU ,
    (SELECT `Proceso_Admision` FROM `universidad` WHERE `ID`=$idUni  GROUP BY `ID`) AS PA";

    $result=mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría

    $tmp = array();

    

    $tmp["NU"] = $row["NU"];

    $tmp["CB"] = $row["CB"];

    $tmp["CC"] = $row["CC"];

    $tmp["CV"] = $row["CV"];

    $tmp["CF"] = $row["CF"];

    $tmp["PA"] = $row["PA"];

    $tmp["CU"] = $row["CU"];

    

    // Push categoría a final json array

    array_push($respuesta["SeccionesD"], $tmp);

    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

    

}

?>



