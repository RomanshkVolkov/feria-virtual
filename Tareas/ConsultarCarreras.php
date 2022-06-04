<?php
  include_once("conexion.php");
  function loadselect($MID)
  {
$conexion = conexion10();
if ($MID==000) {
    $consulta="SELECT `carrera`.`Nombre`, `universidad`.`Nombre` AS uniNombre FROM `ubicacion`
JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID`
JOIN `carrera` ON `ubicacion`.`Universidad_ID` = `carrera`.`Universidad_ID` 
WHERE `universidad`.`Estatus_ID`=3 AND `carrera`.`Estatus_ID`=3";
}else{
    $consulta="SELECT `carrera`.`Nombre`, `universidad`.`Nombre` AS uniNombre FROM `ubicacion`
JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID`
JOIN `carrera` ON `ubicacion`.`Universidad_ID` = `carrera`.`Universidad_ID` 
WHERE `municipio`.`ID`=$MID AND (`universidad`.`Estatus_ID`=3 AND `carrera`.`Estatus_ID`=3)";
}

 $result = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        echo('<select data-placeholder="Carreras disponibles..." style="width: 100%"id="elegircarrera" class="chosen-select   " multiple >');
     
      while ($row = mysqli_fetch_array($result)) {
          echo '
            <option  value="' . $row['uniNombre'] . '">' . mb_strtoupper($row['Nombre'], 'UTF-8') . '</option>  
          ';
      }
echo("</select>");

    } else {
    
    }
  }

  ?>