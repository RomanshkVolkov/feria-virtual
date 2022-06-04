<?php
    if(isset($_FILES['myfile']))
    {   
        /* 
        cramos un array con las extensiones permitidas, 
        guardamos el post que contiene la ruta de la imagen y con pathinfo separamos el valor para botener el basename
        validamos que se cumplan los criterios establecidos
        verificamos si no existe ningun error en el archivo subido
        y movemos el archivo a la carpeta en la que se alojan las imagenes y videos
        */
        $allowedExts = array("jpg", "jpeg", "gif", "png");
        $extension = pathinfo($_FILES['myfile']['name'], PATHINFO_EXTENSION);
        $rutaOld = $_POST['old'];
        $partes_ruta = pathinfo($rutaOld);
        $destino = $_SERVER['DOCUMENT_ROOT']."/img_defaults/".$partes_ruta['basename'] ;
        if ((($_FILES["myfile"]["type"] == "video/mp4")|| ($_FILES["myfile"]["type"] == "audio/mp3")
        || ($_FILES["myfile"]["type"] == "audio/wma")  || ($_FILES["myfile"]["type"] == "image/pjpeg")
        || ($_FILES["myfile"]["type"] == "image/gif")  || ($_FILES["myfile"]["type"] == "image/jpeg"))
        && ($_FILES["myfile"]["size"] < 10000000) 
        && in_array($extension, $allowedExts))
          {
            if ($_FILES["myfile"]["error"] > 0)
            {
            echo "Return Code: " . $_FILES["myfile"]["error"] . "<br />";
            }
          else
            {
       
            if (file_exists($destino))
              {
                console_log("Resultado de move_uploaded_file (Update) 1: " . move_uploaded_file($_FILES["myfile"]["tmp_name"],$destino));
                echo "archivo subido con exito";
              }
            else
              {
                echo   $destino;
                echo $_FILES["myfile"]["name"] . " not exists. ";
              }
            }
          }
        else
          {
          echo "Invalid file size: ".$_FILES["myfile"]["size"];
          }
    }
    else if(isset($_FILES['myvideo']))
    {   
        $allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
        $extension = pathinfo($_FILES['myvideo']['name'], PATHINFO_EXTENSION);
        $rutaOld = $_POST['old'];
        $partes_ruta = pathinfo($rutaOld);
        $destino = $_SERVER['DOCUMENT_ROOT']."/feriavirtual/VideoPresentacionFeria/Feria2020.mp4";
        if ((($_FILES["myvideo"]["type"] == "video/mp4")|| ($_FILES["myvideo"]["type"] == "audio/mp3")
        || ($_FILES["myvideo"]["type"] == "audio/wma")  || ($_FILES["myvideo"]["type"] == "image/pjpeg")
        || ($_FILES["myvideo"]["type"] == "image/gif")  || ($_FILES["myvideo"]["type"] == "image/jpeg"))
        && ($_FILES["myvideo"]["size"] < 524288000)
        && in_array($extension, $allowedExts))
          {
            if ($_FILES["myvideo"]["error"] > 0)
            {
            echo "Return Code: " . $_FILES["myvideo"]["error"] . "<br />";
            }
          else
            {
       
            if (file_exists($destino))
              {
             
                console_log("Resultado de move_uploaded_file (Update) 1: " . move_uploaded_file($_FILES["myvideo"]["tmp_name"],$destino));
                echo "archivo subido con exito";
               
              }
            else
              {
                echo $_FILES["myvideo"]["name"] . " not exists. ";
              }
            }
          }
        else
          {
          echo "Invalid file size: ".$_FILES["myvideo"]["size"];
          }
    }
?>
     