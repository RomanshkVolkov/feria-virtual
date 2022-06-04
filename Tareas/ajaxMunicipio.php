<?php
if($_POST){
    require_once("conexion.php");

    if(!empty($_POST['NombreMun']) && $_POST['action']==1){
            $nombreMun = $_POST['NombreMun'];
        
            $conexion = conexion10();
    
            $consulta = "SELECT ID,Nombre,Ruta_Escudo FROM municipio WHERE  Nombre LIKE '%$nombreMun%'";
    
            $final = mysqli_query($conexion, $consulta);
    
            $formato ='';
    
            if (mysqli_num_rows($final) > 0){

                while ($kevin = mysqli_fetch_array($final)){
                    $cstatus="SELECT (SELECT COUNT(ubicacion.Municipio_ID) FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 1 GROUP BY ubicacion.Municipio_ID)
                    as Status1,(SELECT COUNT(ubicacion.Municipio_ID)  FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 2 GROUP BY ubicacion.Municipio_ID) AS Status2,
                    (SELECT COUNT(ubicacion.Municipio_ID) AS CantidadStatus FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 3 GROUP BY ubicacion.Municipio_ID) AS Status3,
                    (SELECT COUNT(ubicacion.Municipio_ID) AS CantidadStatus FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 4 GROUP BY ubicacion.Municipio_ID) AS Status4";
                      $resultadoStatus1 = mysqli_query($conexion, $cstatus);
                      $status1 =mysqli_fetch_array($resultadoStatus1);


                    $formato.= '<form class=" col-6 col-sm-5 col-md-3 m-3" method="POST" action="ListadoUniversidades.php">
                    <input type="hidden" value="' . $kevin['Ruta_Escudo'] . '" name="MUN_IMG">
                    <input type="hidden" value="' . $kevin['Nombre'] . '" name="NOM_MUN">
                    <input type="hidden" value="' . $kevin['ID'] . '" name ="ID_MUN" id ="IdMun">
                    <button  type="submit" data-toggle="tooltip" class=" text-center justify-self-center" 
                    title=" Universidades:&#10;Fase 1(solicitudes): ';
                    if($status1['Status1']!=null){
                        $formato.=$status1['Status1'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 2(pendientes): ';
                    if($status1['Status2']!=null){
                        $formato.=$status1['Status2'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 3(listas): ';
                    if($status1['Status3']!=null){
                        $formato.=$status1['Status3'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 4(rechazadas): ';
                    if($status1['Status3']!=null){
                        $formato.=$status1['Status4'];
                    }else{
                        $formato.='0'; 
                    }
                    if($status1['Status1']!=null || $status1['Status2']!=null){
                        $formato.='">
                        <img class="card-img-top pt-2"  src="../' . $kevin['Ruta_Escudo'] . '"
                            alt="Card image cap" height="250px" width = "300px">
                        <div class="card-body text-center">
                            <hr class="bg-info">
                            <h5 class="card-title text-center">' . $kevin['Nombre'] . '</h5>
                            <font color="red" class="card-title text-center"><b>Requiere atención</b></font>
                        </div>
                    </button>
                    </form>';
                    }else{
                        $formato.='">
                        <img class="card-img-top pt-2"  src="../' . $kevin['Ruta_Escudo'] . '"
                            alt="Card image cap" height="250px" width = "300px">
                        <div class="card-body text-center">
                            <hr class="bg-info">
                            <h5 class="card-title text-center">' . $kevin['Nombre'] . '</h5>
                        </div>
                    </button>
                    </form>';
                    }
                }
       
            }else{
                $formato = "No se encontraron resultados";
            }
            echo json_encode($formato, JSON_UNESCAPED_UNICODE);
            exit;
    }


    
    if($_POST['action']==2){
                
            $conexion = conexion10();
    
            $consulta = "SELECT ID,Nombre,Ruta_Escudo FROM municipio";
    
            $final = mysqli_query($conexion, $consulta);
    
            $formato ='';
    
            if (mysqli_num_rows($final) > 0){
                while ($kevin = mysqli_fetch_array($final)){
                    $cstatus="SELECT (SELECT COUNT(ubicacion.Municipio_ID) FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 1 GROUP BY ubicacion.Municipio_ID)
                    as Status1,(SELECT COUNT(ubicacion.Municipio_ID)  FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 2 GROUP BY ubicacion.Municipio_ID) AS Status2,
                    (SELECT COUNT(ubicacion.Municipio_ID) AS CantidadStatus FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 3 GROUP BY ubicacion.Municipio_ID) AS Status3,
                    (SELECT COUNT(ubicacion.Municipio_ID) AS CantidadStatus FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID= ".$kevin['ID']." AND universidad.Estatus_ID = 4 GROUP BY ubicacion.Municipio_ID) AS Status4";
                      $resultadoStatus1 = mysqli_query($conexion, $cstatus);
                      $status1 =mysqli_fetch_array($resultadoStatus1);


                    $formato.= '<form class=" col-6 col-sm-5 col-md-3 m-3" method="POST" action="ListadoUniversidades.php">
                    <input type="hidden" value="' . $kevin['Ruta_Escudo'] . '" name="MUN_IMG">
                    <input type="hidden" value="' . $kevin['Nombre'] . '" name="NOM_MUN">
                    <input type="hidden" value="' . $kevin['ID'] . '" name ="ID_MUN" id ="IdMun">
                    <button  type="submit" data-toggle="tooltip" class=" text-center justify-self-center" 
                    title=" Universidades:&#10;Fase 1(solicitudes): ';
                    if($status1['Status1']!=null){
                        $formato.=$status1['Status1'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 2(pendientes): ';
                    if($status1['Status2']!=null){
                        $formato.=$status1['Status2'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 3(listas): ';
                    if($status1['Status3']!=null){
                        $formato.=$status1['Status3'];
                    }else{
                        $formato.='0';
                    }
                    $formato.='&#10;Fase 4(rechazadas): ';
                    if($status1['Status3']!=null){
                        $formato.=$status1['Status4'];
                    }else{
                        $formato.='0'; 
                    }
                    if($status1['Status1']!=null || $status1['Status2']!=null){
                        $formato.='">
                        <img class="card-img-top pt-2"  src="../' . $kevin['Ruta_Escudo'] . '"
                            alt="Card image cap" height="250px" width = "300px">
                        <div class="card-body text-center">
                            <hr class="bg-info">
                            <h5 class="card-title text-center">' . $kevin['Nombre'] . '</h5>
                            <font color="red" class="card-title text-center"><b>Requiere atención</b></font>
                        </div>
                    </button>
                    </form>';
                    }else{
                        $formato.='">
                        <img class="card-img-top pt-2"  src="../' . $kevin['Ruta_Escudo'] . '"
                            alt="Card image cap" height="250px" width = "300px">
                        <div class="card-body text-center">
                            <hr class="bg-info">
                            <h5 class="card-title text-center">' . $kevin['Nombre'] . '</h5>
                        </div>
                    </button>
                    </form>';
                    }
                }
       
            }else{
                $formato = "No se encontraron resultados";
            }
            echo json_encode($formato, JSON_UNESCAPED_UNICODE);
            exit;
    }

}
?>