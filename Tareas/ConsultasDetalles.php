<?php
 
 
?>

<?php


//seccion de detalle uni
include_once("conexion.php");
function obtenerTitulo($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT * FROM `universidad` where `universidad`.`ID`=$idUni";
    $results = mysqli_query($conexion, $consulta);
    $i=false;
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            if(!$i){
                $i=true;
                echo '
                <script type="text/javascript">
                t=document.getElementById("titulo").innerHTML = " '. $columna1["Nombre"] .' ";
                </script>'
                ;
            }


            echo '  
      <br>
      <div class="container titulo" >
            <div class="container-fluid">
                <div class="row justify-content-center">';
            if(isset( $columna1["Ruta_Escudo"])){
                if ($columna1["Ruta_Escudo"]=="NA") {
                    echo'  <img src="img_defaults/feria_app_icon.png" alt="Escudo escuela" class=" rounded-pill escudo col-sm-2 float-left img-responsive ">   
                    '; 
                  }else
                  {
                      echo '   <img src="' . $columna1["Ruta_Escudo"] . '" alt="Escudo escuela" class="rounded-pill escudo col-sm-2 float-left img-responsive ">  
                    ';
                  }
            }else{
                echo'  <img src="img_defaults/feria_app_icon.png" alt="Escudo escuela" class="rounded-pill escudo col-sm-2 float-left img-responsive ">   
                    ';
            }
                echo'<div class="col-10 h1  text-center align-self-center">
                            ' . $columna1["Nombre"] . '
                        </div>
                </div>
            </div>
            <br>
     </div>
  ';
        }
    } else {
        
    header("Location: 404.php");
        echo ' <br>
        <div class="container" >
              <div class="container-fluid">
                  <div class="row justify-content-center">
                          <div class="col-12 h1  text-center align-self-center">
                          No se encontraron los datos de la universidad
                          </div>
                  </div>
              </div>
              <br>
       </div>';
    }
}
function obtenermenu($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT 
    (SELECT COUNT( `carrera`.`Universidad_ID`) FROM `carrera` WHERE `carrera`.`Universidad_ID`=$idUni AND `carrera`.`Estatus_ID`=3  AND `Recurso`!='NA'  GROUP BY `Universidad_ID`) AS ofertas
    ,(SELECT COUNT(`Titulo`) FROM `beca` WHERE `Universidad_ID`=$idUni AND `beca`.`Estatus_ID`=3 GROUP BY `Universidad_ID` ) AS Becas,
    (SELECT COUNT(`Universidad_ID`) FROM `video`  WHERE`Universidad_ID`=$idUni AND Seccion_ID=3 AND `video`.`Estatus_ID`=3  GROUP BY `Universidad_ID` ) AS Videos,
    (SELECT  count(`seccion`.`ID`)
    FROM `video` 
     LEFT JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID`
    WHERE `video`.`Universidad_ID`=$idUni AND `video`.`Seccion_ID`!=1 AND `video`.`Seccion_ID`!=2 AND `video`.`Seccion_ID`!=3 AND `video`.`Estatus_ID`=3
    GROUP BY  `video`.`Universidad_ID`) AS Videos2,
    (SELECT COUNT(`Universidad_ID`) FROM `foto` WHERE  `Universidad_ID` =$idUni AND `foto`.`Estatus_ID`=3 GROUP BY `Universidad_ID` )AS Fotos,
    (SELECT `Proceso_Admision` FROM `universidad` WHERE `ID`=$idUni  GROUP BY `ID`) AS Admision";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        $columna1 = mysqli_fetch_array($results);

        echo ' <nav class="nav-opc">
 <ul class="list-group">
     <li>';
         
        echo '<button type="button" class=" btn btn-md buttonm " id="btnbienvenida" onclick="mostrar(`Bienvenida`);">
             <img src="SeccionAdministrativa/img/Inicio/escuela.png" class=" rounded "></img><span id="txtbienvenida">Bienvenida</span>
         </button>';
    

        echo'</li>
     <li>';
        if ($columna1['ofertas']>0) {
            echo'    
        <button type="button" class="btn btn-md  buttonm " onclick="mostrar(`oferta`);">
            <img src="SeccionAdministrativa/img/Inicio/editar.svg" class=" rounded "></img>
            <span>Oferta educativa</span>
        </button>';
        } else {
            echo'   
            <button type="button" class="btn btn-md disabled buttonm " disabled>
                  <img src="SeccionAdministrativa/img/Inicio/editar.svg" class=" rounded "></img>
                    <span>No disponible</span>
            </button>';
        }
        echo'</li>
     <li>';
        if ($columna1['Videos']>0 |$columna1['Videos2']>0) {
            echo'    
         <button type="button" class="btn btn-md buttonm " onclick="mostrar(`videos`);">
             <img src="SeccionAdministrativa/img/Inicio/camara-de-video.svg" class=" rounded "></img>
             <span>Videos</span>
         </button>';
        } else {
            echo ' <button type="button" class="btn btn-md buttonm disabled " disabled>
        <img src="SeccionAdministrativa/img/Inicio/camara-de-video.svg" class=" rounded "></img>
        <span>No disponible</span>
    </button>';
        }

        echo '</li>
     <li>';
        if ($columna1['Fotos']>0) {
            echo '
         <button type="button" class="btn btn-md buttonm " onclick="mostrar(`fotos`);">
             <img src="SeccionAdministrativa/img/Inicio/img.svg" class=" rounded "></img>
             <span>Fotos</span>
         </button>';
        } else {
            echo '
         <button type="button" class="btn btn-md buttonm disabled " disabled>
             <img src="SeccionAdministrativa/img/Inicio/img.svg" class=" rounded "></img>
             <span>No disponible</span>
         </button>';
        }
        echo '</li><li>';
        if ($columna1['Becas']>0) {
            echo '
         <button type="button" class="btn btn-md buttonm " onclick="mostrar(`becas`);">

             <img src="SeccionAdministrativa/img/Inicio/educacion.svg" class=" rounded "></img>
             <span>Becas</span>
         </button>'
         ;
        } else {
            echo '
        <button type="button" class="btn btn-md buttonm  disabled" disabled">

            <img src="SeccionAdministrativa/img/Inicio/educacion.svg" class=" rounded "></img>
            <span>No disponible</span>
        </button>'
        ;
        }
         
        echo '</li>     <li>';
        if ($columna1['Admision']!=="" && $columna1['Admision']!=="NA") {
            echo '
         <button type="button" class="btn btn-md buttonm " onclick="mostrar(`admision`);">
             <img src="SeccionAdministrativa/img/Inicio/usuario.svg" class=" rounded "></img>
             <span>Admisión</span>
         </button>';
        } else {
            echo '
        <button type="button" class="btn btn-md buttonm disabled" disabled>
            <img src="SeccionAdministrativa/img/Inicio/usuario.svg" class=" rounded "></img>
            <span>No disponible</span>
        </button>';
        }

        echo'</li>
     <li>
         <button type="button" id="Contacto" class="btn btn-md buttonm " onclick="mostrar(`contacto`);">
             <img src="SeccionAdministrativa/img/Inicio/agenda.svg" class=" rounded "></img>
             <span>Contacto</span>
         </button>

     </li>
 </ul>
</nav
>';
    }
}
function obtenerBienvenida($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT * FROM `video` WHERE `Universidad_ID`=$idUni AND `Seccion_ID`=1 AND `video`.`Estatus_ID`=3";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            echo '  
        <hr>
        <br>
        <div class="videoGallery wrapper">
            <a href="https://youtu.be/' . $columna1["Recurso"] . '" class="img-fluid text-center position-relative" style="width: 100% ">
                <img src="Imagenes/repro.png" alt="Video de bienvenida" class=" text-center img-fluid  position-absolute rounded" style=" top: 45%;left: 45%;max-width:50px;max-height:50px" width="10%">
                <img src="https://img.youtube.com/vi/' . $columna1["Recurso"] . '/0.jpg" class="rounded img-thumbnail bg-dark img-fluid" alt="Video de bienvenida" style="width="100%">
                <br>
            </a>
        </div>
        <br>
    ';
        }
    } else {
        echo '<h2 class="vacio1">>No se encontró video de bienvenida</h2>';
    }
}
function obtenerFotos($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT  `seccion`.`ID`,`foto`.`Titulo`, `seccion`.`Nombre`
    FROM `foto` 
     LEFT JOIN `seccion` ON `foto`.`Seccion_ID` = `seccion`.`ID`
    WHERE (`foto`.`Universidad_ID`=$idUni AND `foto`.`Seccion_ID`!=1 AND `foto`.`Seccion_ID`!=2 AND `foto`.`Estatus_ID`=3 )
            OR (`foto`.`Universidad_ID`=$idUni AND `foto`.`Seccion_ID`=3  AND `foto`.`Estatus_ID`=3 )
    GROUP BY `seccion`.`ID`";

    $results = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            echo '<h2 class="text-center"> ' . $columna1["Nombre"] . '</h2>
        <hr>
        <hr>
        <br>  
         ';
            $consulta2 = "SELECT `foto` .*
         FROM `foto` 
             LEFT JOIN `seccion` ON `foto`.`Seccion_ID` = `seccion`.`ID` 
             WHERE `foto`.`Universidad_ID`=$idUni AND `foto`.`Estatus_ID`=3 AND `seccion`.`ID`=" . $columna1['ID'];

            $results2 = mysqli_query($conexion, $consulta2);
            echo '
             <div id="lightgallery2" class="container row justify-content-center lightgallery">';
            if (mysqli_num_rows($results2) > 0) {
                while ($columna2 = mysqli_fetch_array($results2)) {
                    echo ' <a href="' . $columna2["Recurso"] . '" class="col-12 col-sm-6 mx-auto  text-center  mb-2" style="width: 300px; ">
                    <img src="' . $columna2["Recurso"] . '" alt="' . $columna2["Titulo"] . '" class="img-thumbnail justify-content-center rounded" style="width: 100%">
                    </a>
                 ';
                }
                echo '   
            </div>
            <br>';
            } else {
                echo '<h2 class="text-center"> No se han cargado fotografias en esta seccion</h2> </div>';
            }
        }
    } else {
        echo ' <h2 class="text-center vacio"> No se han cargado fotografias </h2>  ';
    }
}
function obtenerVideos($idUni)
{
    $conexion = conexion10();
    $ConsutaVideosInstalaciones="SELECT*FROM video where Universidad_ID=$idUni AND Seccion_ID=3 AND `video`.`Estatus_ID`=3";
    
    $resultsVideosInstalaciones = mysqli_query($conexion, $ConsutaVideosInstalaciones);
    $y=false;
    if (mysqli_num_rows($resultsVideosInstalaciones) > 0) {
        $y=true;
        echo '   <hr>
        <hr><h2 class="text-center"> Instalaciones</h2>
        <hr>
        <hr>
    <br>  
     ';
         echo ' <div id="lightgallery2" class="container row justify-content-center   videoGallery ">';
        while ($columna1 = mysqli_fetch_array($resultsVideosInstalaciones)) {
            echo '   <a href="https://www.youtube.com/watch?v=' . $columna1["Recurso"] . '"
               class="col-12 col-sm-6  text-decoration-none mx-auto p-3 text-center position-relative text-center mb-2 "
               >
           <div class="card-img-top mx-auto my-3">
               <img src="Imagenes/repro.png" alt="' . $columna1["Titulo"] . '"
                   class=" text-center img-fluid  position-absolute rounded"
                   style=" top: 45%;left: 45%;max-width:50px;max-height:50px" width="10%";>
               <img src="https://img.youtube.com/vi/' . $columna1["Recurso"] . '/0.jpg" alt="' . $columna1["Titulo"] . '" width="100%">
           </div>
           <div class=" text-muted">
               <span>' . $columna1["Titulo"] . '</span>
           </div>
       </a> ';
        }
        echo '   
        </div>
        <br>';
    }
    $consulta = "SELECT  `seccion`.`ID`,`seccion`.`Nombre`
    FROM `video` 
     LEFT JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID`
    WHERE `video`.`Universidad_ID`=$idUni AND `video`.`Seccion_ID`!=1 AND `video`.`Seccion_ID`!=2 AND `video`.`Seccion_ID`!=3 AND `video`.`Estatus_ID`=3
    GROUP BY `seccion`.`ID`";
    $results = mysqli_query($conexion, $consulta);
    $x=false;
    if (mysqli_num_rows($results) > 0) {
        $x=true;
        while ($columna1 = mysqli_fetch_array($results)) {
            echo '   <hr>
            <hr><h2 class="text-center"> ' . $columna1["Nombre"] . '</h2>
            <hr>
            <hr>
        <br>  
         ';
            $consulta2 = "SELECT `video`.*
         FROM `video` 
             LEFT JOIN `seccion` ON `video`.`Seccion_ID` = `seccion`.`ID` 
             WHERE `video`.`Universidad_ID`=$idUni AND `video`.`Estatus_ID`=3 AND `seccion`.`ID`=" . $columna1['ID'];
            $results2 = mysqli_query($conexion, $consulta2);
            echo ' <div id="lightgallery2" class="container row justify-content-center   videoGallery ">';
            if (mysqli_num_rows($results2) > 0) {
                while ($columna2 = mysqli_fetch_array($results2)) {
                    echo '   <a href="https://www.youtube.com/watch?v=' . $columna2["Recurso"] . '"
               class="col-12 col-sm-6  text-decoration-none mx-auto p-3 text-center position-relative text-center mb-2 "
               >
           <div class="card-img-top mx-auto my-3">
               <img src="Imagenes/repro.png" alt="' . $columna2["Titulo"] . '"
                   class=" text-center img-fluid  position-absolute rounded"
                   style=" top: 45%;left: 45%;max-width:50px;max-height:50px" width="10%";>
               <img src="https://img.youtube.com/vi/' . $columna2["Recurso"] . '/0.jpg" alt="' . $columna2["Titulo"] . '" width="100%">
           </div>
           <div class=" text-muted">
               <span>' . $columna2["Titulo"] . '</span>
           </div>
       </a> 
                 ';
                }
                echo '   
            </div>
            <br>';
            } else {
                echo '<h2 class="text-center"> No se han cargado videos en esta seccion</h2> </div>';
            }
        }
    }
    if(!$x && !$y){
            echo ' <h2 class="text-center vacio2"> No se han cargado videos </h2>';
    }
}
function obtenerAdmision($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT `Proceso_Admision` FROM `universidad` WHERE `ID`=$idUni ";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {

    if ($columna1["Proceso_Admision"]=="NA") {
    echo' <h2 class="text-center text-white" style="background-color:#044f69">Admisiones</h2>';
     echo '<h2 class="text-center vacio"> No se han cargado documentos </h2> ';
    } else {
                echo '  
     
           <h2 class="text-center text-white" style="background-color:#044f69">Admisiones</h2>
        <hr>
        <br>
        <embed    src="'.$columna1["Proceso_Admision"].'"
        frameborder="0" height="800px" width="100%" >
           </embed >
           <span>Adjunto : </span><a target="_blank" href="' . $columna1["Proceso_Admision"] . '" class="text-center align-self-center">' . $columna1["Proceso_Admision"] . '</a>
    ';
}



        }
    } else {
        echo 'No se encontro pdf de admision';
    }
}
function obtenerContactos($idUni)
{
    echo '<h2 class="text-center text-white" style="background-color:#044f69">Contacto</h2>
    <hr>';
    $conexion = conexion10();
    $consulta = "SELECT(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=1 AND `universidad_red_social`.`Universidad_ID`=$idUni) as 'facebook',(SELECT TRIM(`universidad_red_social`.`Recurso`)
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=2 AND `universidad_red_social`.`Universidad_ID`=$idUni) as 'whatsapp',
    (SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=3 AND `universidad_red_social`.`Universidad_ID`=$idUni ) as 'Instagram',(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=4 AND `universidad_red_social`.`Universidad_ID`=$idUni) as 'Twitter',(SELECT `universidad_red_social`.`Recurso`
    FROM `red_social`
    LEFT JOIN `universidad_red_social` ON `universidad_red_social`.`Red_Social_ID`=`red_social`.`ID` WHERE `red_social`.`ID`=5 AND `universidad_red_social`.`Universidad_ID`=$idUni)'PaginaWeb',
    (SELECT TRIM(`contacto_universidad`.`Telefono`)
    FROM `contacto_universidad`
    WHERE `contacto_universidad`.`Universidad_ID`=$idUni GROUP BY Universidad_ID ) as 'Telefono',
    (SELECT `contacto_universidad`.`Correo_Electronico`
    FROM `contacto_universidad`
    WHERE `contacto_universidad`.`Universidad_ID`=$idUni GROUP BY Universidad_ID) as 'Correo_Electronico'";

    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        $columna1 = mysqli_fetch_array($results);
        echo '<h4 class="text-center"> Redes sociales</h4>
    <hr>
    <div class="row justify-content-center">
   ';
        if (strlen($columna1['facebook'])>0 && preg_match("/^(https|http):\/\/(www\.)?.*/",trim($columna1['facebook']))) {
            echo' 
        <div  class="m-2 col-4  " >
        <a href="'.$columna1['facebook'].'" class=" btn btn-link " target="_blank" >
        <img src="img/contactos/facebook.svg" class="card-img-top af" alt="..." style="max-height: 7rem;">
        </a>
        </div>';
        } else {
            echo' 
        <div  class="m-2 col-4 d-flex flex-column " >
        <a   class=" btn btn-link disabled" target="_blank" >
        <img src="img/contactos/facebook.svg" class="card-img-top af" alt="..." style="max-height: 7rem;">

        </a>
        No disponible
        </div>';
        }

        if (strlen($columna1['Twitter'])>0 && preg_match("/^(https|http):\/\/(www\.)?.*/",trim($columna1['Twitter']))) {
            echo'
        <div  class="m-2 col-4  " >
        <a href="'.$columna1['Twitter'].'" class=" btn btn-link " target="_blank" >
        <img src="img/contactos/twitter.svg" class="card-img-top af" alt="..." style="max-height: 7rem;">
        </a> </div>';
        } else {
            echo'
        <div  class="m-2 col-4  d-flex flex-column" >
        <a   class=" btn btn-link disabled" target="_blank" >
        <img src="img/contactos/twitter.svg" class="card-img-top af" alt="..." style="max-height: 7rem;">
        </a>
        No disponible
         </div>';
        }
        if (strlen($columna1['Instagram'])>0 && preg_match("/^(https|http):\/\/(www\.)?.*/",trim($columna1['Instagram']))) {
            
            echo'
        <div  class="m-2 col-4  " > 
        <a  href="'.$columna1['Instagram'].'"  class="btn btn-link " target="_blank">
            <img src="img/contactos/instagram.svg" class="card-img-top" alt="..." style="max-height: 7rem;">
        </a>   
         </div>';
        } else {
            echo'
        <div  class="m-2 col-4 d-flex flex-column " > 
        <a   class=" btn btn-link disabled" target="_blank" >
            <img src="img/contactos/instagram.svg" class="card-img-top" alt="..." style="max-height: 7rem;">
        </a>    
        No disponible
        </div>';
        }
        if (strlen($columna1['PaginaWeb'])>0 && preg_match("/^(https|http):\/\/(www\.)?.*/", trim($columna1['PaginaWeb']))) {
            echo'
        <div  class="m-2 col-4  " > 
        <a href="'.$columna1['PaginaWeb'].'" class=" btn btn-link " target="_blank">
            <img src="img/contactos/web.svg" class="card-img-top" alt="..." style="max-height: 7rem;">
        </a>
        </div>';
        } else {
                echo'
        <div  class="m-2 col-4 d-flex flex-column " > 
        <a   class=" btn btn-link disabled" target="_blank" >
            <img src="img/contactos/web.svg" class="card-img-top" alt="..." style="max-height: 7rem;">
        </a>
        No disponible
        </div>';
            }
     
        echo'  
    </div>
    <hr>';
    if (strlen($columna1['whatsapp'])>0) {
        $num_whats=trim($columna1['whatsapp']);
        if(preg_match("/^\d*$/",$num_whats)){
            echo'<a target="_blank" href="https://wa.me/'.$num_whats.'?text=Referido%20de%20la%20feria%20virtual%20interesado%20en%20más%20información%20:)"  class="text-decoration-none text-blue"><span>Whatsapp : </span>'.$num_whats.'</a>
            <hr>';
        }
        else if(preg_match("/^(https?:\/\/)?wa\.+(me|link)\/.*$/",trim($columna1['whatsapp']))){
            $only_digits = preg_replace('/\?text=.*/', '?text=Referido%20de%20la%20feria%20virtual%20interesado%20en%20más%20información%20:)', $num_whats);
            $number = preg_replace("/[^0-9](%20)*/",'',  $only_digits);
            echo'<a href="'.$only_digits.'"  class="text-decoration-none text-blue"><span>Whatsapp : </span>'.$number.'</a>
            <hr>';
        }
       
    } else {
        echo'<a  class="text-decoration-none disabled"><span>Whatsapp : </span>No asignado</a>
    <hr>';
    }
        if (strlen($columna1['Telefono'])>0) {
            $phone=trim($columna1['Telefono']);
            $phone  =  str_replace( ' ','', $phone); 
            $phone  =  str_replace( '+','', $phone);    
            if(preg_match("/^\d*$/",$phone)){
                echo'<a href="tel:'.$phone.'" class="text-decoration-none"><span>Telefono : </span>'.$phone.'</a>
                <hr>';
            }else{
              echo '<span>Telefono :'.$columna1['Telefono'].'</span><hr>';
            }
        } else {
            echo'<a  class="text-decoration-none disabled"><span>Telefono : </span>No asignado</a>
        <hr>';
        }
       
        if (strlen($columna1['Correo_Electronico'])>0 && preg_match("/^[a-zA-Z0-9.!#$%&'*+\=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/",trim($columna1['Correo_Electronico']))) {
          
            
            echo'<a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to='.$columna1['Correo_Electronico'].'&subject=slow" class="text-decoration-none"><span>Correo : </span>'.$columna1['Correo_Electronico'].'</a>
        <hr>';
        } else {
            echo'<a  class="text-decoration-none disabled"><span>Correo : </span>No asignado</a>
        <hr>';
        }
    }
}
function obtenerUbicacion($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT * FROM `ubicacion` where Universidad_ID= $idUni";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        $columna1 = mysqli_fetch_array($results);
        echo " <h4 class='text-center'>Ubicacion</h4>
            <span>Calle. ".$columna1['Calle'].", Colonia. ".$columna1['Colonia'].", Codigo Postal. ".$columna1['Codigo_Postal'].", Numero Interior ".$columna1['Num_Interior']." Numero exterior ".$columna1['Num_Exterior'].",  ".$columna1['Ciudad'].".
         </span>
         <br><br>
          ";
         if($columna1['url_Maps']!="NA" && $columna1['url_Maps']!=""){

            echo "  <h5>Mapa</h5>
            <input type='hidden' id='srcmapa' value='".$columna1['url_Maps']."' >
            <div id='output' class='embebed my-5' style='width: 100%;height: 550px;'>
            </div>";
         } 
    }
}
function obtenerBecas($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT * FROM `beca` where Universidad_ID= $idUni AND `beca`.`Estatus_ID`=3";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            echo"
      <div class='col-12 col-sm-6 col-md-4 text-center container'> 
      <a  class='btn btn-link  pdf-link' href='".$columna1['Recurso']."' target='_blank'>
      <canvas></canvas> 
    </a> 
            <div class='lead '>
            <a class='h6 ' href='".$columna1['Recurso']."'>".$columna1['Titulo']."</a>
            </div>
    </div>
 
    ";
        }
    } else {
        echo '<h2 class="text-center col-12 vacio2">No se ha subido la información</h2>';
    }
}
function obtenerOferta($idUni)
{
    $conexion = conexion10();
    $consulta = "SELECT `nivel_educativo`.`ID`,`nivel_educativo`.`Nombre` FROM `carrera` JOIN 
    `nivel_educativo` ON `carrera`.`Nivel_Educativo_ID` = `nivel_educativo`.`ID`
    WHERE Universidad_ID= $idUni
    AND `carrera`.`Estatus_ID`=3  AND `Recurso`!='NA'
    
     GROUP BY `Nivel_Educativo_ID` ORDER BY `Nivel_Educativo_ID`";
    $results = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($results) > 0) {
        while ($columna1 = mysqli_fetch_array($results)) {
            echo   " <h3 class='text-center'>  ".$columna1['Nombre']."</h3>
            <hr>";
            $consulta2 = "SELECT * FROM carrera WHERE Universidad_ID= $idUni
            AND `carrera`.`Estatus_ID`=3  AND `Recurso`!='NA' AND `Nivel_Educativo_ID`=".$columna1['ID'];
            $results2 = mysqli_query($conexion, $consulta2);
            if (mysqli_num_rows($results2) > 0) {
                echo  "<div class='row'>";
                while ($columna2 = mysqli_fetch_array($results2)) {
                    echo "
                        <div class='col-12 col-sm-6 col-md-4  text-center'> 
                        <a  class='btn btn-link  pdf-link' href='".$columna2['Recurso']."' target='_blank'>
                        <canvas>Loading</canvas> 
                      </a> 
                                <div class='lead'>
                                <a class='h6' href='".$columna2['Recurso']."' >".$columna2['Nombre']."</a>
                                </div>
                        </div>
                    ";
                }
                echo " </div><br><br>";
            } else {
                echo "No se han asignado carreras en esta seccion";
            }
        }
    } else {
        echo   " <h3 class='text-center vacio'> No se han cargado carreras</h3>
        <hr>";
    }
}
