<?php

use PhpParser\Node\Stmt\TryCatch;

if(isset($_GET["action"])){
    if($_GET["action"] == '1'){
       
        $dataM = [
            "status" => "200",
            "message" => "Cambios aplicados",
        ];
       
        try{
            $fh = fopen("../css/prueba.css", 'w') or die("Se produjo un error al crear el archivo");

            $texto = <<<_END
            :root{
                --primary: $primary;
                --secondary: $secondary;
                --white: $white ;
                --success: $success;
                --info:$info ;
                --warning:$warning ;  
                --danger:$danger;
                --light: $light ;
                --dark:$dark   ;
            }
            _END;
            
            fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
            
            fclose($fh);
            echo json_encode($dataM);
        }catch(Exception $e){
            $dataM = [
                "status" => "202",
                "message" => " ERROR",
            ];
           
            echo json_encode($dataM);
        }
      
        
    }
}else{
    $data = [
        "status" => "204",
        "message" => " No Content",
    ];
   
    echo json_encode($data);
}
      


?>