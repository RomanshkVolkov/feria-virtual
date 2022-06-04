<?php
//seccion de detalle uni
include_once("conexion.php");

function listarconferencias(){
    $conexion = conexion10();
    $consulta = "SELECT * FROM `video` 
    JOIN `universidad` ON `universidad`.`ID`=`video`.`Universidad_ID`  
    WHERE `Seccion_ID`=2 AND (`universidad`.`Estatus_ID`=3 OR `universidad`.`Estatus_ID`=3) ORDER BY `video`.`ID` DESC ";
    $results = mysqli_query($conexion, $consulta);
    $x=1;
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            echo'      
            <a href="https://www.youtube.com/watch?v='.trim($columna1["Recurso"]).'"
            class="col-12 col-sm-6 col-lg-4  text-decoration-none mx-auto text-center position-relative text-center mb-2 "
            >
                <div class="mt-2">
                    <p class="text-dark">'.$columna1["Nombre"].'</p>
                </div>
        <div class="card-img-top mb-2 text-decoration-none">
            <img loading="lazy" src="Imagenes/repro.png" alt=" '.$columna1["Titulo"].'"
                class=" text-center img-fluid  position-absolute rounded "
                style=" top: 50%;left: 45%;max-width:50px;max-height:50px" width="10%";>
            <img src="https://img.youtube.com/vi/'.trim($columna1["Recurso"]).'/0.jpg" alt=" '.$columna1["Titulo"].'" width="100%">
        </div>
        <div class=" text-muted">
            <span>'.$columna1["Titulo"].'</span>
        </div>
    </a>  ';
    $x++;
        }
    }
   
}

?>