<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/btnComoLink.css">
    <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
 
    <title>Document</title>
</head>
<body>

<?php include_once("componentes/header.php");?>
    <?php  
    include_once("./conexiones/conexion.php");
        function getInst_Mun_Tipo_Logo($id){
            $conexion = conexion10();

            $consultaBeca = "SELECT `universidad`.`Nombre` as Nombre,`universidad`.`Ruta_Escudo`,`universidad`.`Tipo`,`universidad`.`Proceso_Admision`,`municipio`.`Nombre` as NM
             FROM `universidad`
             JOIN ubicacion on universidad.ID=ubicacion.Universidad_ID
             JOIN municipio on municipio.ID=ubicacion.Municipio_ID
              where universidad.ID=$id";
          
            $resultadoBeca = mysqli_query($conexion, $consultaBeca);
           echo  '
           <thead>
           <tr>
               <th class="text-center" >Municipio</th>
               <th  class="text-center" >Nombre</th>
               <th  class="text-center" >Ruta_Escudo</th>
               <th  class="text-center">Tipo</th>
               <th  class="text-center">Proceso_Admision</th>
           </tr>
         </thead>';
            if (mysqli_num_rows($resultadoBeca) > 0) {
                echo '
                <tr><h2 class="text-center">Información</h2></tr>
                <tbody>';
                while ($final = mysqli_fetch_array($resultadoBeca)) {
                    echo '<tr>
                    <td>' . $final['NM'] . '</td>
                        <td>' . $final['Nombre'] . '</td>
                        <td>' . $final['Ruta_Escudo'] . '</td>
                        <td>'; 
                        if($final['Tipo']==1){
                            echo 'Privada';
                        }else{
                            echo 'Publica';
                        } 
                         echo '</td>
                        <td>' . $final['Proceso_Admision'] . '</td>
                    </tr>';
                }
                echo '
                </tbody>';
            }
        } 
        function getVideos($id){
            $conexion = conexion10();

            $consultaBeca = "SELECT Titulo,Recurso,universidad.Nombre as NU,seccion.Nombre as NS FROM `video` JOIN universidad ON universidad.ID=video.Universidad_ID JOIN seccion ON seccion.ID=video.`Seccion_ID` where universidad.ID=$id ORDER BY Universidad_ID, seccion.Nombre  ";
            
            $resultadoBeca = mysqli_query($conexion, $consultaBeca);
           echo  '
           <thead>
           <tr>
             <th class="text-center" >Universidad</th>
               <th class="text-center" >Titulo del video</th>
               <th class="text-center" >Recurso url del video</th>
               <th class="text-center" >Seccion</th>
           </tr>
         </thead>';
            if (mysqli_num_rows($resultadoBeca) > 0) {
                echo '
                <tbody >';
                while ($final = mysqli_fetch_array($resultadoBeca)) {
                    echo '
                        <tr>
                            <td>' . $final['NU'] . '</td>
                            <td>' . $final['Titulo'] . '</td>
                            <td> https://www.youtube.com/watch?v='. $final['Recurso'] . '</td>
                            <td>' . $final['NS'] . '</td>
                        </tr>';
                }
                echo '
                </tbody>';
            }
        }
      
         function getBeca($id){
            $conexion = conexion10();

            $consultaBeca = "SELECT beca.Titulo AS Beca_Nombre, beca.Recurso AS Recurso_Beca FROM beca WHERE beca.Universidad_ID = $id";
          
            $resultadoBeca = mysqli_query($conexion, $consultaBeca);
          
            if (mysqli_num_rows($resultadoBeca) > 0) {
                while ($final = mysqli_fetch_array($resultadoBeca)) {
                    echo ' <tr>
                        <td>' . $final['Beca_Nombre'] . '</td>
                        <td>' . $final['Recurso_Beca'] . '</td>
                        </tr>';
                }
            }
         }

         function getFoto($id){
            $conexion = conexion10();

            $consultaFoto = "SELECT Titulo AS Nombre_Foto,Recurso AS Recurso_Foto FROM foto WHERE Universidad_ID = $id";

            $resultadoFoto = mysqli_query($conexion, $consultaFoto);

            if (mysqli_num_rows($resultadoFoto) > 0) {
                while ($final = mysqli_fetch_array($resultadoFoto)) {
                    echo '<tr>
                        <td>' . $final['Nombre_Foto'] . '</td>
                        <td>' . $final['Recurso_Foto'] . '</td>
                        </tr> ';
                }
            }
         }

         function getRedsocial($id){
            $conexion = conexion10();

            $consultaRed = "SELECT universidad_red_social.Recurso, red_social.Nombre FROM universidad_red_social LEFT JOIN red_social ON 
                            universidad_red_social.Red_Social_ID = red_social.ID WHERE universidad_red_social.Universidad_ID = $id";

            $resultadoRed = mysqli_query($conexion, $consultaRed);

            if (mysqli_num_rows($resultadoRed) > 0) {
                while ($final = mysqli_fetch_array($resultadoRed)) {
                    echo '<tr>
                        <td>' . $final['Nombre'] . '</td>
                        <td>' . $final['Recurso'] . '</td></tr>
                    ';
                }
            }
         }
         function getOfertas($id){
            $conexion = conexion10();

            $consultaBeca = "SELECT * FROM `carrera`
              where carrera.universidad_ID=$id";
          
            $resultadoBeca = mysqli_query($conexion, $consultaBeca);
           echo  '
           <thead>
           <tr>
               <th  class="text-center" >Nombre</th>
               <th  class="text-center" >RVOE</th>
               <th  class="text-center" >Link a recurso</th>
               <th  class="text-center">Periodo de vigencia</th>
               <th  class="text-center">Estatus</th>
           </tr>
         </thead>';
            if (mysqli_num_rows($resultadoBeca) > 0) {
                echo '
                <tr><h2 class="text-center">Información</h2></tr>
                <tbody>';
                while ($final = mysqli_fetch_array($resultadoBeca)) {
                    echo '<tr>
                    <td>' . $final['Nombre'] . '</td>
                    <td>' . $final['RVOE'] . '</td>
                        <td>' . $final['Recurso'] . '</td>
                        <td>' . $final['Periodo_Vigencia'] . '</td>
                        <td>'; 
                            switch($final['Estatus_ID']){
                                    case 1:
                                        echo 'Solicitado';
                                        break; 
                                         case 2:
                                            echo 'Pendiente';
                                            break; 
                                             case 3:
                                                echo 'Aprobado';
                                                break; 
                                                 case 4:
                                                    echo 'Negado';
                                                    break;
                            }
                         echo '</td>
                    </tr>';
                }
                echo '
                </tbody>';
            }
         }

    ?>
  


   
 
        

</body>
</html>