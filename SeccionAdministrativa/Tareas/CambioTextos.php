<?php



if(isset($_GET["action"]) && isset($_GET["message"])){
    $tmp = array();
    $tmp["Respuesta"] ="exito";
    $message= $_GET["message"];
    if($_GET["action"] == '1'){       
      
            $fh = fopen("../textos/Titulo.txt", "w") or die($tmp["Respuesta"] ="error al abrir");
            $texto=$message;
            fwrite($fh, $texto) or die($tmp["Respuesta"] ="no se pudo escribir");
            fclose($fh);
            echo json_encode( $tmp);
        
    }
    if($_GET["action"] == '2'){
       
            $fh = fopen("../textos/TextoBienvenida.txt", "w") or die($tmp["Respuesta"] ="error al abrir");
            $texto =$message." ";
            fwrite($fh, $texto) or die($tmp["Respuesta"] ="no se pudo escribir");
            fclose($fh);
            echo json_encode( $tmp);
       

    }
}
      


?>