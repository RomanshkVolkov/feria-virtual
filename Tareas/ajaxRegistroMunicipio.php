<?php 
if($_POST){
    require_once("conexion.php");
    if(isset($_POST['action'])){

        $estadoID = $_POST['action'];
                
        $conexion = conexion10();

        $consulta = "SELECT ID,Nombre FROM municipio WHERE Estado_ID ='$estadoID'";

        $final = mysqli_query($conexion, $consulta);

        $formato ='';

        if (mysqli_num_rows($final) > 0){
            while ($fila1 = mysqli_fetch_array($final)){
                $formato.= '<option value=' . $fila1['ID'] . '>' . utf8_encode($fila1['Nombre']) . '</option>';
            }
   
        }else{
            $formato.= '<option>No hay datos</option>';
        }
        echo json_encode($formato, JSON_UNESCAPED_UNICODE);
        exit;
}
}
?>