<?php

if(isset($_GET["idUni"]) && $_GET["idUni"] != ""){

    include_once ('../conexion/conexion.php');

    $respuesta = array();

    $idUni = $_GET["idUni"];

    $respuesta["SeccionesD"] = array();

    // Conectarse al servidor y seleccionar base de datos.

    $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect server ");

    mysqli_select_db($con,"$db_name")or die("cannot select DB");

    $sql="SELECT(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=1 AND `universidad_red_social`.`Universidad_ID`= $idUni) as 'facebook',(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=2 AND `universidad_red_social`.`Universidad_ID`= $idUni) as 'whatsapp',
    (SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=3 AND `universidad_red_social`.`Universidad_ID`= $idUni ) as 'Instagram',(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=4 AND `universidad_red_social`.`Universidad_ID`= $idUni) as 'Twitter',(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social` 
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=5 AND `universidad_red_social`.`Universidad_ID`= $idUni)'PaginaWeb',
    (SELECT `contacto_universidad`.`Telefono`
    FROM `contacto_universidad`
    WHERE `contacto_universidad`.`Universidad_ID`= $idUni GROUP BY Universidad_ID) as 'Telefono',
    (SELECT `contacto_universidad`.`Correo_Electronico`
    FROM `contacto_universidad`
    WHERE `contacto_universidad`.`Universidad_ID`= $idUni GROUP BY Universidad_ID) as 'Correo_Electronico'";

    $result=mysqli_query($con,$sql);

    $consulta = "SELECT * FROM `ubicacion` where Universidad_ID= $idUni";

    $results = mysqli_query($con, $consulta);
  
    while($row = mysqli_fetch_array($result)){

    // Array temporal para crear una sola categoría

    $tmp = array();

    

    $tmp["FACEBOOK"] = $row["facebook"];

    $tmp["TWITTER"] = $row["Twitter"];

    $tmp["WHATSAPP"] = $row["whatsapp"];

    $tmp["INSTAGRAM"] = $row["Instagram"];

    $tmp["PAGINA"] = $row["PaginaWeb"];
    if (mysqli_num_rows($results) > 0) {
        $columna1 = mysqli_fetch_array($results);
        $tmp["UBICACIONT"] ="Calle ".$columna1['Calle'].", Colonia. ".$columna1['Colonia'].", Codigo Postal. ".$columna1['Codigo_Postal'].", Numero Interior ".$columna1['Num_Interior']." Numero exterior ".$columna1['Num_Exterior'].",  ".$columna1['Ciudad'];
        $tmp["MAPA"] = $columna1['url_Maps'];
}
   // $tmp["MAPA"] = $row["MAPA"];

    //$tmp["UBICACIONT"] = $row["UBICACIONT"];

    $tmp["TELEFONO"] = $row["Telefono"];

    // Push categoría a final json array

    array_push($respuesta["SeccionesD"], $tmp);

    }

    // Mantener el encabezado de respuesta a json

    header('Content-Type: application/json');

    //Escuchando el resultado de json

    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

    

}

?>



