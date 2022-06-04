<?php
if (isset($_GET['Area1']) && !empty($_GET['Area1']) && isset($_GET['Area2']) && !empty($_GET['Area2'])) {
    include_once("conexion.php");
    //funcion para regresar todas las universidades en un municipio
    $conexion = conexion10();
    $consulta =
        "SELECT 
        universidad.*,
        ubicacion.Municipio_ID AS munID,
        carrera.Nombre AS carNom,
        area.Nombre AS arNom
    FROM universidad 
    JOIN ubicacion
    	ON ubicacion.Universidad_ID=universidad.ID
    JOIN carrera 
        ON universidad.ID=carrera.Universidad_ID
    JOIN carrera_area
        ON carrera.ID=carrera_area.Carrera_ID
    JOIN area
        ON carrera_area.Area_ID=area.ID
    WHERE 
        (
            area.ID=".$_GET['Area1']."
            OR 
            area.ID=".$_GET['Area2']."
            OR
            area.ID=11
        )
        AND
        (
            universidad.Estatus_ID=3
            AND
            carrera.Estatus_ID=3    
        )
        ";

        
    $idUniAux = "";
    $iAux = 0;
    $result = mysqli_query($conexion, $consulta);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows > 0) {
        $formato = '<div class="mx-5 row align-items-center">';
        while ($row = mysqli_fetch_array($result)) {
            if ($idUniAux != $row['ID']) {
                if ($iAux != 0) {
                    $formato .= '
                        </div>
                    </a>
                    ';
                } else {
                    $iAux=1;
                }
                $formato .= '
                    <hr class="container-fluid bg-warning">
                    <a class="row dr align-items-center" href="DetallesUni.php?Uni=' . $row['ID'] . '&municipio=' . $row['munID'] . '" style="height:auto;width:100%;">
                        <div class="col-2 my-3 "  >
                            <img src="' . $row['Ruta_Escudo'] . '" class=" justify-content-center" alt="Logo Universidad"  style="width:100%;height:auto;" >  
                        </div>
                        <div class="col-3 text-center">
                            <span style="word-wrap: break-word;">' . $row['Nombre'] . '</span>
                        </div>
                        <div class="row col-7 text-right align-self-center">
                            <div style="word-wrap: break-word;" class="my-1 col-3">Area: ' . $row['arNom'] . '</div>
                            <div style="word-wrap: break-word;" class="my-1 col-9">Carrera: '.$row['carNom'].'</div>
                            ';
            } else {
                $formato .= '
                <br>
                <div style="word-wrap: break-word;" class="my-1 col-3">Area: ' . $row['arNom'] . '</div>
                <div style="word-wrap: break-word;" class="my-1 col-9">Carrera: '.$row['carNom'].'</div>
                ';
            }
            $idUniAux = $row['ID'];
        }
        $formato .= ' 
        </div>
      ';
        //Escuchando el resultado de json
        echo json_encode($formato, JSON_UNESCAPED_UNICODE);
    } else {
        echo "noData";
    }
}
