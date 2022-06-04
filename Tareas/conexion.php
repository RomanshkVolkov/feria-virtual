<?php
 function conexion10()
  {
    //Datos de la base de datos
 
/*
  $usuario = "root";

  $password = "";

  $servidor = "localhost";

  $database = "feria";
*/
   
  $usuario = "feriavirtual";

  $password = "fvirtual21";

  $servidor = "localhost";

  $database = "feria"; 

    //creacion de la conexion a la base de datos con mysql_conect()
    $conexion = mysqli_connect($servidor, $usuario, $password, $database) or die("No se ha podido conectar a la base de datos");
    //Seleccion de la base de datos a utilizar
    $db = mysqli_select_db($conexion, $database) or die("No se ha podido x2");
    //Establecer y realizar consulta. Guardamos en variable
    return $conexion;
    //cerrar conexion de la base de datos
  } 
  function console_log($data)

  {
  
    echo '<script>';
  
    echo 'console.log(' . json_encode($data) . ')';
  
    echo '</script>';
  }
  ?>