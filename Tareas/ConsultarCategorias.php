<?php
  include_once("conexion.php");
  function loadselect2()
  {
$conexion = conexion10();
    $consulta="SELECT  `area1` FROM `carrera_clasificacion` GROUP BY `area1`";


 $result = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        echo('<select class="form-select form-select-sm btn btn-info  " id="elegircategoria"><option value="Categoria" selected>Área</option>');
     
      while ($row = mysqli_fetch_array($result)) {
        if ($row['area1']!="") {
                     echo '
            <option  value="' . str_replace(' ', '', $row['area1']). '">' . mb_strtoupper($row['area1'], 'UTF-8') . '</option>  
          ';
        }

      }
echo("</select>");

    } else {
    
    }
  }

  ?>
