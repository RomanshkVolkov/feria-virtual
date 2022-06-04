<?php
if (isset($_GET['actionid']) && !empty($_GET['actionid'])) {
  include_once("conexion.php");
  //funcion para regresar todas las universidades en un municipio
  function ObtenerTodasLasUnis($MID)
  {

    $conexion = conexion10();
    if ($MID==000) {
          $consulta = "SELECT `ubicacion`.`Municipio_ID`,`municipio`.`nombre`,`municipio`.`Ruta_Escudo` as 'ruta_mun', `universidad`.*
    FROM `ubicacion` 
      JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID`
       JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID`
        WHERE `universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=2";
    }
    else{
          $consulta = "SELECT `ubicacion`.`Municipio_ID`,`municipio`.`nombre`,`municipio`.`Ruta_Escudo` as 'ruta_mun', `universidad`.*
    FROM `ubicacion` 
      JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID`
       JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID`
        WHERE `municipio`.`ID`=$MID AND (`universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=2)";
    }

    $result = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($result);
  
    if ($num_rows > 0) {
      $formato = '
        <div class="row align-items-center "> ';
      $I = 0;
      while ($row = mysqli_fetch_array($result)) {
        if ($I < 1) {

        $I++;
          $formato .= '
            <input   type="hidden" value="' . $row['ruta_mun'] . '" id="log_mun">
            <input   type="hidden" value="' . $row['nombre'] . '" id="mun">
         
          ';
        }
        $texto=obtenercategorias($row['Nombre']);
        $formato .= '
      
          <a class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 dr Uni '.$texto.'" title="'.$row['Nombre'] .'" category="'.$row['Tipo'].'" target="_top" href="DetallesUni.php?Uni=' . $row['ID'] . '&municipio=' . $MID . '" style="height:auto;width:100%;" >
       
          <div class="text-center container my-4"  >
 ';       
if(isset($row['Ruta_Escudo']))
{
  if($row['Ruta_Escudo']=="NA"){
    $formato.= '  <img   data-src="./img_defaults/feria_app_icon.png" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="width:100%;height:auto;" >  
    ';
  }else
  {
      $formato.= '  <img    data-src="'.$row['Ruta_Escudo'].'" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="width:100%;height:auto;" >  
    ';
  }
}else{
  $formato.= '   <img   data-src="./img_defaults/feria_app_icon.png" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="height:50px;" >  
    ';
}
if($row['Tipo']==0)
{
 $formato .= '  <span class="badge badge-pill badge-info h4 text-uppercase">Publica</span>';

}else{
 $formato .= '  <span class="badge badge-pill badge-info h4 text-uppercase">Privada</span>';

}         
$formato.='    
</div>
      
     
      </a>
    ';
      }
    
      $formato .= '   </div> ';
      //Escuchando el resultado de json
      echo json_encode($formato, JSON_UNESCAPED_UNICODE);
    } else {
      
      $formato="noData";
      echo  json_encode($formato, JSON_UNESCAPED_UNICODE);
    }
  }
  
  //funcion para regresar todas las universidades en un municipio con criterio de busqueda
  function ObtenerTodasLasUnisCtriterio($MID, $NUni)
  {
    /////////////////////// 2022 /////////////////////
    $conexion = conexion10();
    if ($MID==000) {
         $consulta = "SELECT `ubicacion`.`Municipio_ID`,`municipio`.`nombre`, `universidad`.* 
    FROM `ubicacion` 
    JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
    JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` 
    JOIN `carrera` ON `ubicacion`.`Universidad_ID` = `carrera`.`Universidad_ID` 
    WHERE (`universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=2)
    AND (`universidad`.`Nombre` LIKE '%$NUni%'  )
    GROUP BY `universidad`.`Nombre`";
    }
    else{
          $consulta = "SELECT `ubicacion`.`Municipio_ID`,`municipio`.`nombre`, `universidad`.* 
    FROM `ubicacion` 
    JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` 
    JOIN `universidad` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` 
    JOIN `carrera` ON `ubicacion`.`Universidad_ID` = `carrera`.`Universidad_ID` 
    WHERE `municipio`.`ID`=$MID AND (`universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=2)
    AND (`universidad`.`Nombre` LIKE '%$NUni%'  )
    GROUP BY `universidad`.`Nombre`";
    }

    ///////////////
    $result = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
      $formato = '  
    <div class="row align-items-center "> ';
      $I = 0;
      while ($row = mysqli_fetch_array($result)) {
       
        if ($I < 1) {
         
          $I++;
            $formato .= '
            ';
          }
           $texto=obtenercategorias($row['Nombre']);
        // Array temporal para crear una sola categoría
        $formato .= '
    
        <a class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 dr Uni '.$texto.'" title="'.$row['Nombre'] .'" category="'.$row['Tipo'].'"target="_top" href="DetallesUni.php?Uni=' . $row['ID'] . '&municipio=' . $MID . '" style="height:auto;width:100%;" >
       
          <div class="text-center container my-4"  >
      ';
      
 
          
   
      if(isset($row['Ruta_Escudo']))
      {
        if($row['Ruta_Escudo']=="NA"){
          $formato.= '  <img   data-src="./img_defaults/feria_app_icon.png" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="width:100%;height:auto;" >  
          ';
        }else
        {
            $formato.= '  <img    data-src="'. $row['Ruta_Escudo'].'" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="width:100%;height:auto;" >  
          ';
        }
      }else{
        $formato.= '   <img   data-src="./img_defaults/feria_app_icon.png" class="lazy photo justify-content-center text-decoration-none rounded" alt="Logo Universidad"  style="height:50px;" >  
          ';
      }

if($row['Tipo']==0)
{
 $formato .= '  <span class="badge badge-pill badge-info h4 text-uppercase">Publica</span>';

}else{
 $formato .= '  <span class="badge badge-pill badge-info h4 text-uppercase">Privada</span>';

}     
$formato.='   
</div>
   
      </a>
       
    ';
      }
      $formato .= '  </div> ';
      //Escuchando el resultado de json
      echo json_encode($formato, JSON_UNESCAPED_UNICODE);
    } else {
      $formato="noData";
      echo  json_encode($formato, JSON_UNESCAPED_UNICODE);
    }
  }

 function obtenercategorias($UniNom){
     include_once("conexion.php");
     $conexion=conexion10();
      // $UniNom="UNIVERSIDAD DEL CARIBE";
       
         $consulta1 = "SELECT  `carrera_clasificacion`.`area1`

    FROM `universidad` JOIN `carrera` ON `universidad`.`ID` = `carrera`.`Universidad_ID` 

    JOIN `carrera_clasificacion` ON `carrera`.`Nombre`=`carrera_clasificacion`.`nombre_carrera` 

    WHERE `universidad`.`Nombre`=".'"'.$UniNom.'"';

             $consulta2 = "SELECT  `carrera_clasificacion`.`area2`

    FROM `universidad` JOIN `carrera` ON `universidad`.`ID` = `carrera`.`Universidad_ID` 

    JOIN `carrera_clasificacion` ON `carrera`.`Nombre`=`carrera_clasificacion`.`nombre_carrera` 

    WHERE `universidad`.`Nombre`=".'"'.$UniNom.'"';       
         $consulta3 = "SELECT  `carrera_clasificacion`.`area3`

    FROM `universidad` JOIN `carrera` ON `universidad`.`ID` = `carrera`.`Universidad_ID` 

    JOIN `carrera_clasificacion` ON `carrera`.`Nombre`=`carrera_clasificacion`.`nombre_carrera` 

    WHERE `universidad`.`Nombre`=".'"'.$UniNom.'"';

$result1 = mysqli_query($conexion, $consulta1);
$result2 = mysqli_query($conexion, $consulta2);
$result3 = mysqli_query($conexion, $consulta3);

$categorias=array();
while ($row1 = mysqli_fetch_array($result1)) {
    if($row1['area1']!=""){
    $cadena =str_replace(' ', '', $row1['area1']);
array_push($categorias, $cadena);
    }
    
}
while ($row2 = mysqli_fetch_array($result2)) {
      if($row2['area2']!=""){
    $cadena =str_replace(' ', '', $row2['area2']);
array_push($categorias, $cadena);
    }
}
while ($row3 = mysqli_fetch_array($result3)) {
        if($row3['area3']!=""){
    $cadena =str_replace(' ', '', $row3['area3']);
array_push($categorias, $cadena);
    }
}
$array = array_unique($categorias);
$string = implode(" ",$array);
return $string;
}


  $action = $_GET['actionid'];
  //switch de las acciones a realizar
  switch ($action) {
    case '1':
      if (isset($_GET['MunicipioId']) && !empty($_GET['MunicipioId'])) {
        $MunicipioId = $_GET['MunicipioId'];
        ObtenerTodasLasUnis($MunicipioId);

        exit;
      }
      break;
    case '2':
      if (
        isset($_GET['MunicipioId']) && !empty($_GET['MunicipioId'])  &&
        isset($_GET['NombreUni']) && !empty($_GET['NombreUni'])
      ) {
        $MunicipioId = $_GET['MunicipioId'];
        $NombreUni = $_GET['NombreUni'];
        ObtenerTodasLasUnisCtriterio($MunicipioId, $NombreUni);

        exit;
      }
      break;

  }
}
?>