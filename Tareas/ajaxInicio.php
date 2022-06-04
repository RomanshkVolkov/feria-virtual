<?php
if (isset($_GET['actionid']) && !empty($_GET['actionid'])) {
  include_once("conexion.php");
  function ObtenerDatosUni()
  {
    $respuesta = array();
    $respuesta["ConteoUni"] = array();
    $conexion = conexion10();
    $consulta = "SELECT * FROM `municipio`";
    $result = mysqli_query($conexion, $consulta);
    while ($row = mysqli_fetch_array($result)) {
      // Array temporal para crear una sola categoría
      $consulta2 =  "SELECT COUNT(`municipio`.`ID`) AS CM
      FROM `municipio` 
      JOIN `ubicacion` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
      JOIN `universidad` ON `universidad`.`ID` = `ubicacion`.`Universidad_ID` 
      WHERE `municipio`.`ID`=".$row['ID']."  AND (`universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=2)  GROUP BY `municipio`.`ID`";
      $resultado2 = mysqli_query($conexion, $consulta2);
      if (mysqli_num_rows($resultado2) > 0)
      { 
        while ($row2 = mysqli_fetch_array($resultado2)) {
      
          $tmp = array();
          $tmp["CM"] = $row2["CM"];
          $tmp["ID"] = $row["ID"];
          $tmp["Ruta_Escudo"] = $row["Ruta_Escudo"];
      }    
    }
      else{
        $tmp = array();
        $tmp["CM"] = 0;
        $tmp["ID"] = $row["ID"];
        $tmp["Ruta_Escudo"] = $row["Ruta_Escudo"];
      }
    // Push categoría a final json array
    array_push($respuesta["ConteoUni"], $tmp);
    
    }
    // Mantener el encabezado de respuesta a json
    header('Content-Type: application/json');
    //Escuchando el resultado de json
    echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
  }

  $action = $_GET['actionid'];
  switch ($action) {
    case '1':
      ObtenerDatosUni();
      break;
    case '2':
      //marcaba error asi que mejor lo comente
      //blah();
      break;
  }
}
?>