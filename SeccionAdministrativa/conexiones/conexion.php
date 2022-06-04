<?php

// Creacion de conexion
echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
function  conexion10()

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

function alert($data)
{
     echo '<script>swal("", "'. $data .'","");</script>';
}



?>
<?php



function nombreRandom($nombre, $carpeta)
{

  $temp = explode(".", $nombre);

  $newfile = round(microtime(true)) . '.' . end($temp);

  $newdir = $carpeta . $newfile;

  return $newdir;
}


// No se usa
function getUbicacion()
{

  $conexion = conexion10();

  $consulta = "SELECT ubicacion FROM contacto WHERE universidad_id={$_SESSION['Universidad_ID']}";

  $res = mysqli_fetch_array(mysqli_query($conexion, $consulta));

  return $res['Ubicacion'];
}


// No se usa
function updateDir($dir)
{

  $conexion = conexion10();

  if ($dir == "") {

    console_log("nel, ta vacio");

    return;
  }

  $consulta = "UPDATE contacto SET Ubicacion='{$dir}' WHERE Universidad_ID={$_SESSION['Universidad_ID']}";

  console_log($consulta);

  console_log(mysqli_query($conexion, $consulta));

  mysqli_close($conexion);
}



function updateRecurso($idRedSocial, $recurso)
{

  $conexion = conexion10();

  console_log(getRecurso($idRedSocial) != "Vacio");

  if ($recurso == "") {

   

    swal("", "Introduzca el nuevo recurso");

    return;
  }

  if (getRecurso($idRedSocial) != "Vacio") {

    $consulta = "UPDATE universidad_red_social SET Recurso='{$recurso}' WHERE Red_Social_ID={$idRedSocial} AND Universidad_ID=" . $_SESSION['Universidad_ID'];
  } else {

    $consulta = "INSERT INTO universidad_red_social(Red_social_ID, Universidad_ID, Recurso) VALUES ({$idRedSocial}, " . $_SESSION['Universidad_ID'] . ", '{$recurso}')";
  }

  console_log($consulta);

  console_log(mysqli_query($conexion, $consulta));

  mysqli_close($conexion);
}



function updateCE($ce)
{

  $conexion = conexion10();

  if ($ce == "") {


    swal("", "Introduzca el nuevo Correo Electronico");

    return;
  }

  $consulta = "UPDATE contacto_universidad SET Correo_Electronico='{$ce}' WHERE Universidad_ID={$_SESSION['Universidad_ID']}";

  console_log($consulta);

  console_log(mysqli_query($conexion, $consulta));

  mysqli_close($conexion);
}


function updateTel($telefono)
{

  $conexion = conexion10();

  if ($telefono == "") {

    swal("", "Introduzca el numero de telefono.");


    return;
  }

  $consulta = "UPDATE contacto_universidad SET Telefono='{$telefono}' WHERE Universidad_ID={$_SESSION['Universidad_ID']}";

  console_log($consulta);

  console_log(mysqli_query($conexion, $consulta));

  mysqli_close($conexion);
}


// No se usa
function getContactoID()
{

  $conexion = conexion10();

  $consulta = "SELECT ID FROM contacto_universidad WHERE Universidad_ID={$_SESSION['Universidad_ID']}";

  //console_log($consulta);

  $res = mysqli_fetch_array(mysqli_query($conexion, $consulta));

  //console_log($res);

  return $res['ID'];
}



function getRecurso($idRedSocial)
{

  $conexion = conexion10();

  $consulta = "SELECT Recurso FROM universidad_red_social WHERE Red_Social_ID={$idRedSocial} AND Universidad_ID=" . $_SESSION['Universidad_ID'];

  //console_log($consulta);
  if (mysqli_num_rows(mysqli_query($conexion, $consulta)) > 0) {
    $res = mysqli_fetch_array(mysqli_query($conexion, $consulta));

    //console_log($res);

    if ($res['Recurso'] != "") {
      return $res['Recurso'];
    } else {
      return "Vacio";
    }
  } else {
    return "Vacio";
  }
}

function getCE()
{

  $conexion = conexion10();

  $consulta = "SELECT Correo_Electronico FROM contacto_universidad WHERE Universidad_ID={$_SESSION['Universidad_ID']}";
  if (mysqli_num_rows(mysqli_query($conexion, $consulta)) > 0) {
    $res = mysqli_fetch_array(mysqli_query($conexion, $consulta));

    if ($res['Correo_Electronico'] != "") {
      return $res['Correo_Electronico'];
    } else {
      return "Vacio";
    }
  } else {
    return "Vacio";
  }
}

function getTelefono()
{

  $conexion = conexion10();

  $consulta = "SELECT Telefono FROM contacto_universidad WHERE Universidad_ID={$_SESSION['Universidad_ID']}";
  if (mysqli_num_rows(mysqli_query($conexion, $consulta)) > 0) {
    $res = mysqli_fetch_array(mysqli_query($conexion, $consulta));

    if ($res['Telefono'] != "") {
      return $res['Telefono'];
    } else {
      return "Vacio";
    }
  } else {
    return "Vacio";
  }
}



function buscarPass()

{

  $conexion = conexion10();

  $consulta = "SELECT Contrasena FROM usuario WHERE ID={$_SESSION['ID']}";

  $pass = mysqli_fetch_array(mysqli_query($conexion, $consulta));

  echo $pass['Contrasena'];

  mysqli_close($conexion);
}



//Configurar cuenta de usuario

function confCuenta($tel, $pass, $nomb, $ap, $am, $cel, $cpe)

{

  $conexion = conexion10();

  $consulta = "UPDATE usuario 
  SET 
    Nombre='{$nomb}', 
    Apellido_P='{$ap}', 
    Apellido_M='{$am}', 
    Telefono='{$tel}', 
    Celular='{$cel}', 
    Correo_Electronico='{$cpe}',  
    Contrasena='{$pass}'
  WHERE ID={$_SESSION['ID']}";


  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}



//Funcion para obtener convocatoria

function getConvocatoria($i)

{

  $conexion = conexion10();

  $consulta = "SELECT Proceso_Admision FROM universidad WHERE ID={$_SESSION['Universidad_ID']}";

  $resultado = mysqli_query($conexion, $consulta);

  $dir = mysqli_fetch_array($resultado);
  if ($dir['Proceso_Admision'] != "NA" && $i == 1) {
    echo '<input class="custom-control-label form-control-plaintext" type="text" placeholder="' . $dir['Proceso_Admision'] . '" id="texto2" readonly />';
  } else  if ($dir['Proceso_Admision'] == "NA" && $i == 1) {
    echo '<input class="custom-control-label form-control-plaintext" type="text" placeholder="' . $dir['Proceso_Admision'] . '" id="texto2" readonly  />';
  }
  if ($dir['Proceso_Admision'] != "NA" && $i == 2) {
    echo ' <a href="' . $dir['Proceso_Admision'] . '" target="_blank"> Ver convocatoria</a>';
  } else if ($dir['Proceso_Admision'] == "NA" && $i == 2) {
    echo '<a> No asignado</a>';
  }


  mysqli_close($conexion);
}



function getIdMuni()

{

  $conexion = conexion10();

  $consulta = "SELECT  municipio.* FROM municipio JOIN ubicacion ON ubicacion.Municipio_ID=municipio.ID
  WHERE ubicacion.Universidad_ID={$_SESSION['Universidad_ID']};";



  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");

  $MunID = mysqli_fetch_array($resultado);



  mysqli_close($conexion);

  return $MunID['ID'];
}

//Funcion para obtener el sector de la universidad del administrador logeado

function getTipoUni()
{
  $conexion = conexion10();
  $consulta = "SELECT * FROM universidad WHERE ID = {$_SESSION['Universidad_ID']};";
  $resDb = mysqli_query($conexion, $consulta);
  $res = mysqli_fetch_array($resDb);
  return $res['Tipo'];
}

function prtSelectSectorOptions()
{
  for ($i = 0; $i < 2; $i++) {
    $aux = "";
    switch ($i) {
      case 0:
        $aux = "Publica";
        break;
      case 1:
        $aux = "Privada";
        break;
    }
    if ($i == getTipoUni()) {
      echo '<option selected="selected" value="' . $i . '">' . $aux . '</option>';
    } else {
      echo '<option value="' . $i . '">' . $aux . '</option>';
    }
  }
}

//funcion para imprimir los municipios como opciones en en select

function getMunicipios()

{

  $conexion = conexion10();

  $consulta = "SELECT * FROM municipio WHERE Estado_ID=" . getIdEstado() . ";";

  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");



  if (mysqli_num_rows($resultado) > 0) {

    echo '<select class="form-control" id="slctBox' . getIdEstado() . '" name="municipio">';

    while ($columna = mysqli_fetch_array($resultado)) {

      if ($columna['ID'] == getIdMuni()) {

        echo '<option selected="selected" value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
      } else {

        echo '<option  value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
      }
    }
  }
  echo "</select>";

  mysqli_close($conexion);
}

function prntSlctMunExtras()
{
  $conexion1 = conexion10();
  $consulta1 = "SELECT * FROM estado;";
  $res1 = mysqli_query($conexion1, $consulta1);

  while ($fila1 = mysqli_fetch_array($res1)) {
    if (!($fila1['ID'] == getIdEstado())) {
      echo '<select class="form-control" id="slctBox' . $fila1['ID'] . '" name="municipio" disabled style="display: none;">';

      $conexion2 = conexion10();

      $consulta2 = "SELECT * FROM municipio WHERE Estado_ID=" . $fila1['ID'] . ";";

      $res2 = mysqli_query($conexion2, $consulta2) or die("Error de llenado de tabla");

      if (mysqli_num_rows($res2) > 0) {

        while ($fila2 = mysqli_fetch_array($res2)) {

          if ($fila2['ID'] == getIdMuni()) {

            echo '<option selected="selected" value="' . $fila2['ID'] . '">' . $fila2['Nombre'] . '</option>';
          } else {

            echo '<option  value="' . $fila2['ID'] . '">' . $fila2['Nombre'] . '</option>';
          }
        }
      }

      mysqli_close($conexion2);

      echo "</select>";
    } else {
      getMunicipios();
    }
  }
  mysqli_close($conexion1);
}

//Funcion para imprimir los estados como opciones en en select
function getEstados()
{

  $conexion = conexion10();

  $consulta = "SELECT * FROM estado;";

  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");

  if (mysqli_num_rows($resultado) > 0) {
    echo '<select class="form-control" id="Selectbox" name="estado" onclick="setEstOriginal();" onchange="cmbrSlctMun();">';



    while ($columna = mysqli_fetch_array($resultado)) {

      if ($columna['ID'] == getIdEstado()) {

        echo '<option selected="selected" value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
      } else {

        echo '<option  value="' . $columna['ID'] . '">' . $columna['Nombre'] . '</option>';
      }
    }
    echo "</select>";
  }

  mysqli_close($conexion);
}

function getIdEstado()
{
  $conexion = conexion10();

  $consulta = "SELECT estado.* 
  FROM estado 
    JOIN municipio
      ON estado.ID = municipio.Estado_ID 
    JOIN ubicacion 
      ON municipio.ID = ubicacion.Municipio_ID 
  WHERE ubicacion.Universidad_ID={$_SESSION['Universidad_ID']};";



  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");

  $estID = mysqli_fetch_array($resultado);

  mysqli_close($conexion);

  return $estID['ID'];
}

function getInfoCuenta()
{
  $conexion = conexion10();
  $consulta = "SELECT * 
  FROM usuario 
  WHERE ID={$_SESSION['ID']};";
  console_log($consulta);

  $res = mysqli_query($conexion, $consulta);

  return mysqli_fetch_array($res);
}

//Funcion para obtener el numero de los usuarios
// No se usa
function getNum()

{

  $conexion = conexion10();

  $consulta = 'SELECT Telefono FROM `usuario` WHERE `ID`="' . $_SESSION["ID"] . '"';


  $results = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      if ($columna1['Telefono'] == null) {
      } else {

        echo  "value='" . $columna1['Telefono'] . "'";
      }
    }
  }
}

function getNomUni()

{

  $conexion = conexion10();

  $consulta = "SELECT Nombre FROM universidad
  WHERE ID={$_SESSION['Universidad_ID']}";

  $results = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      return $columna1['Nombre'];
    }
  }



  mysqli_close($conexion);
}

//Funcion para obener la informacion de ubicacion de un universidad
function getInfoUbi()
{
  $conexion = conexion10();
  $consulta = "SELECT 
    ubicacion.*, 
    universidad.Clave_Centro_Trabajo,
    estatus.Nombre AS estNom 
  FROM ubicacion 
    JOIN universidad 
      ON universidad.ID = ubicacion.Universidad_ID 
    JOIN estatus 
      ON universidad.Estatus_ID = estatus.ID 
  WHERE Universidad_ID = {$_SESSION['Universidad_ID']};";
  $aux = mysqli_query($conexion, $consulta);
  $res = mysqli_fetch_array($aux);
  return $res;
}

function getEscUni()

{

  $conexion = conexion10();

  $consulta = "SELECT Ruta_Escudo  FROM universidad
  WHERE ID = {$_SESSION['Universidad_ID']}";


  $results = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($results) > 0) {

    $columna1 = mysqli_fetch_array($results);

    if ($columna1['Ruta_Escudo'] == null) {

      echo "";
    } else if ($columna1['Ruta_Escudo'] == "NA") {

      echo "";
    } else
      echo $columna1['Ruta_Escudo'];
  } else {

    echo "";
  }

  mysqli_close($conexion);
}



//Insert Fotos

function insertOferta($pVigencia, $titulo, $direccion, $universidadID, $seccion, $rvoe)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO carrera(Periodo_Vigencia, Nombre, Recurso, Universidad_ID, Nivel_Educativo_ID, Estatus_ID, RVOE, Seccion_ID) 

  VALUES ('" . $pVigencia . "', '" . $titulo . "','" . $direccion . "','" . $universidadID . "','" . $seccion . "', '1', '" . $rvoe . "', " . nuevaSeccion($titulo) . ")";


  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}
//Insert registrado

function insertRegistrado($nombre, $apP, $apM, $correo, $tel, $escuela, $area, $motivo)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO `registrado` ( `Nombre`, `Apellido_P`, `Apellido_M`, `Correo_Electronico`, `Telefono`, `Motivo`, `Escuela`, `Area_ID`) 
  VALUES ('$nombre', '$apP', '$apM', '$correo', '$tel', '$motivo', '$escuela', '$area')";
  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
}
//Buscar registrado
function buscarRegistrado($correo)
{
  $conexion = conexion10();

  $consulta = "SELECT*FROM `registrado` WHERE `Correo_Electronico`='$correo'";

  if (mysqli_num_rows(mysqli_query($conexion, $consulta)) > 0) {
   /// CAMBIOS 2022 ///
   echo "<script> window.location='sesion.php'; </script>";
   ////
  } else {
    echo 'No se encontró su correo en el sistema por favor registrese para poder accesar a la feria';
  }
  mysqli_close($conexion);
}

//Actualiza Oferta

function updateOfertas($pVigencia, $Nombre, $direccion, $seccion, $IDoferta, $rvoe, $idSeccion)

{

  $conexion = conexion10();

  if ($direccion != "") {

    $consulta = 'UPDATE carrera 
      SET 
        Periodo_Vigencia="' . $pVigencia . '",
        Nombre="' . $Nombre . '",
        Recurso="' . $direccion . '",
        RVOE="' . $rvoe . '",
        Nivel_Educativo_ID="' . $seccion . '" 
      WHERE 
        ID="' . $IDoferta . '" 
        AND 
        Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  } else {

    $consulta = 'UPDATE carrera 
      SET 
        Periodo_Vigencia="' . $pVigencia . '",
        Nombre="' . $Nombre . '",
        RVOE="' . $rvoe . '", 
        Nivel_Educativo_ID="' . $seccion . '" 
      WHERE 
        ID="' . $IDoferta . '" 
        AND 
        Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  }

  mysqli_query($conexion, $consulta);

  console_log($consulta);

  mysqli_close($conexion);

  $conexion2 = conexion10();

  $consulta2 = "UPDATE seccion
  SET Nombre='" . $Nombre . "'
  WHERE ID=" . $idSeccion;

  console_log($consulta2);

  mysqli_query($conexion2, $consulta2);

  mysqli_close($conexion2);

  setPendiente("carrera", "ID=$IDoferta AND Universidad_ID");
}

//Obtener tabla Oferta

function obtenerTablaOferta()

{

  $conexion = conexion10();

  $consulta = "SELECT 
  carrera.*, 
  nivel_educativo.Nombre AS secNom, 
  estatus.Nombre AS estNom, 
  seccion.ID AS secID
FROM carrera 
  JOIN universidad ON carrera.Universidad_ID = universidad.ID 
  JOIN estatus ON estatus.ID = carrera.Estatus_ID 
  JOIN nivel_educativo ON nivel_educativo.ID = carrera.Nivel_Educativo_ID 
  JOIN seccion ON seccion.ID=carrera.Seccion_ID
WHERE universidad.ID =" . $_SESSION['Universidad_ID'];

  console_log($consulta);

  $results = mysqli_query($conexion, $consulta);

  echo ' 

  <table class="table table-responsive-sm table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

      <th scope="col">Titulo</th>

      <th scope="col">Oferta Educativa</th>

      <th scope="col">Nivel Educativo</th>

      <th scope="col">RVOE o Clave DGP</th>

      <th scope="col">Periodo de Vigencia</th>

      <th scope="col">Estatus</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';



  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      echo '

      <form method="POST">
    <tr>

      <input type="hidden" id="ruta" name="ruta" value="' . $columna1['Recurso'] . '"/>

      <input type="hidden" name="id_vid" value="' . $columna1['ID'] . '"></td>

      <td>' . $columna1['Nombre'] . '</td>';

      echo '<td>';
      if ($columna1['Recurso'] != "NA") {
        echo '<a target="_blank" href="' . $columna1['Recurso'] . '">Ver documento</a>';
      } else {
        echo $columna1['Recurso'];
      }
      echo '</td>';

      echo '
      <td>' . $columna1['secNom'] . '</td>

      <td>' . $columna1['RVOE'] . '</td>

      <td>' . $columna1['Periodo_Vigencia'] . '</td>

      <td>' . $columna1['estNom'] . '</td>

      <td>


        <button type="button" class="btn btn-primary btn-sm"

          data-toggle="modal" data-target="#ModalUpdateOferta"

           onclick="mostrareditofertas(`' . $columna1['Periodo_Vigencia'] . '`, `' . $columna1['ID'] . '`,`' . $columna1['Nombre'] . '`,`' . $columna1['Recurso'] . '`,`' . $columna1['secNom'] . '`, `' . $columna1['RVOE'] . '`, `' . $columna1['Seccion_ID'] . '`);">

          <img src="img/Inicio/editar.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

        </button>
        <input type="hidden" name="id_sec" value="' . $columna1['secID'] . '">


        <input type="hidden" name="origen" value="Carreras">

        <input type="hidden" name="img" value="img/Inicio/archivos.svg">


        <button type="submit" class="btn btn-primary btn-sm" id="ID" name="ID" alt="Submit"

          value="' . $columna1['ID'] . '" formaction="Delete.php?tabla=carrera">

          <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">

        </button>

        <button name="ID_Carrera" value="' . $columna1['ID'] . '" type="submit" class="btn btn-primary btn-sm" formaction="AreasCarrera.php">

          <img src="img/Inicio/mas.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">

        </button>


      </td>

    </tr>
    </form>';
    }
  }

  echo ' </tbody>

  </table>';
}

// Get ID Universidad

function getUniID()

{

  $conexion = conexion10();

  $consulta = "SELECT ID from universidad where Usuario_ID=" . $_SESSION['ID'];

  $results = mysqli_query($conexion, $consulta) or die("Error en obtener id usuario");

  while ($columna1 = mysqli_fetch_array($results)) {

    return $columna1['ID'];
  }
}





//Insert Beca

function insertBeca($titulo, $direccion, $universidadID)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO `beca`(`Titulo`, `Recurso`, `Universidad_ID`, Estatus_ID) 

  VALUES ('" . $titulo . "','" . $direccion . "','" . $universidadID . "', 1)";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}

//Actualiza becas

function updateBecas($Nombre, $direccion, $IDbeca)

{

  $conexion = conexion10();

  if ($direccion != "") {

    $consulta = 'UPDATE beca SET Titulo="' . $Nombre . '", Recurso="' . $direccion . '" WHERE ID="' . $IDbeca . '" AND Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  } else {

    $consulta = 'UPDATE beca SET Titulo="' . $Nombre . '" WHERE ID="' . $IDbeca . '" AND Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  }

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);

  setPendiente("beca", "beca.ID = $IDbeca AND Universidad_ID");
}

//Obtener tabla becas

function obtenerTablaBecas()

{

  $conexion = conexion10();

  $consulta =
    "SELECT
      beca.*,
      estatus.Nombre
    FROM
      beca
      INNER JOIN estatus ON beca.Estatus_ID = estatus.ID
    WHERE
      beca.Universidad_ID = " . $_SESSION['Universidad_ID'];

  console_log($consulta);

  $results = mysqli_query($conexion, $consulta);

  echo '<table class="table table-responsive-sm table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

      <th scope="col">Titulo</th>

      <th scope="col">Documento PDF</th>
      
      <th scope="col">Estatus</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';



  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      echo '
      <form method="POST"> 
        <tr>

        <input type="hidden" id="ruta" name="ruta" value="' . $columna1['Recurso'] . '"/>

        <input type="hidden" name="id_vid" value="' . $columna1['ID'] . '"/>
        
        <td>' . $columna1['Titulo'] . '</td>
        
        <td><a target="_blank" href="' . $columna1['Recurso'] . '">Ver documento</a></th>
        
        <td>' . $columna1['Nombre'] . '</td>

        <td>

          <button type="button" class="btn btn-primary btn-sm"

            data-toggle="modal" data-target="#ModalUpdateBeca" onclick="mostrareditBecas(`' . $columna1['ID'] . '`,`' . $columna1['Titulo'] . '`,`' . $columna1['Recurso'] . '`)">

            <img src="img/Inicio/editar.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

          </button>
          
          <input type="hidden" name="origen" value="Becas">

          <input type="hidden" name="img" value="img/Inicio/educacion.svg">


          <button type="submit" class="btn btn-primary btn-sm" id="ID" name="ID" alt="Submit"

            value="' . $columna1['ID'] . '" formaction="Delete.php?tabla=beca">

            <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">

          </button>

        </td>

        </tr>
      </form>';
    }
  }

  echo ' </tbody></table>';
}



function obtenerIdVideo($url)
{
  $url = trim($url, " ");
  if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
    console_log($id);
  } else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  }

  console_log("la otra opcion: " . $values);

  return $values;
}



//Insert Conferencia

function insertConferencia($titulo, $direccion, $universidadID)

{

  $conexion = conexion10();

  $direccion = obtenerIdVideo($direccion);

  $consulta = "INSERT INTO `video`(`Recurso`, `Titulo`, `Universidad_ID`, Seccion_ID, Estatus_ID) 

  VALUES ('" . $direccion . "','" . $titulo . "','" . $universidadID . "', 2, 1)";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}

//Actualiza conferencia

function updateConferencias($titulo, $direccion, $IDvideo)

{

  $conexion = conexion10();

  $direccion = obtenerIdVideo($direccion);

  $consulta = "UPDATE video 

  SET `Recurso`='" . $direccion . "', `Titulo`='" . $titulo . "' WHERE `ID`='" . $IDvideo . "' AND Universidad_ID='" . $_SESSION['Universidad_ID'] . "';";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);

  setPendiente("video", "video.ID = $IDvideo AND Universidad_ID");
}

//Obtener tabla Conferencias

function obtenerTablaConferencias()

{

  $conexion = conexion10();

  $consulta =
    "SELECT
      video.*,
      estatus.Nombre
    FROM
      video
      INNER JOIN estatus ON video.Estatus_ID = estatus.ID
    WHERE
      Seccion_ID = 2
      AND Universidad_ID =" . $_SESSION['Universidad_ID'];



  $results = mysqli_query($conexion, $consulta);

  echo '<table class="table table-responsive-sm table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

      <th scope="col">Titulo</th>

      <th scope="col">Link</th>
      
      <th scope="col">Estatus</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';



  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      echo '
      <form method="POST"> 
    <tr>

      <input type="hidden" id="ruta" name="ruta" value="' . $columna1['Recurso'] . '"/>

      <input type="hidden" name="id_vid" value="' . $columna1['ID'] . '"/>

      <td>' . $columna1['Titulo'] . '</td>
      
      <td><a target="_blank" href="https://www.youtube.com/watch?v=' . $columna1['Recurso'] . '">Ver Video</a></th>
      
      <td>' . $columna1['Nombre'] . '</td>
      
      <td><button type="button" class="btn btn-primary btn-sm"

          data-toggle="modal" data-target="#ModalUpdateConferencia" onclick="mostrareditConf(`' . $columna1['ID'] . '`,`' . $columna1['Titulo'] . '`,`https://www.youtube.com/watch?v=' . $columna1['Recurso'] . '`)">

          <img src="img/Inicio/editar.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

        </button>
          
        <input type="hidden" name="origen" value="Conferencias">

        <input type="hidden" name="img" value="img/Inicio/conferencia.svg">

        <button type="submit" class="btn btn-primary btn-sm" id="ID" name="ID"  alt="Submit"

          value="' . $columna1['ID'] . '" formaction="Delete.php?tabla=video"> 

        <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

        </button>

      </td>

    </tr>
    </form>';
    }
  }

  echo ' </tbody></table>';
}





//Insert Fotos

function insertFoto($titulo, $direccion, $seccionID, $universidadID)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO `foto`(`Titulo`, `Recurso`, `Seccion_ID`, `Universidad_ID`, Estatus_ID) 

  VALUES ('" . $titulo . "','" . $direccion . "','" . $seccionID . "','" . $universidadID . "', 1)";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}



//Obtener Fotos

function obtenerTablaFotos()

{

  $conexion = conexion10();

  //Gracias a $_SESSION['Universidad_ID'] se podria hacer mas sencilla esta consulta

  $consulta =
    "SELECT
      foto.*,
      seccion.Nombre,
      estatus.Nombre AS estNom
    FROM
      foto
      INNER JOIN seccion ON foto.Seccion_ID = seccion.ID
      INNER JOIN estatus ON foto.Estatus_ID = estatus.ID
    WHERE
      foto.Universidad_ID = " . $_SESSION['Universidad_ID'];

  console_log($consulta);


  $results = mysqli_query($conexion, $consulta);

  echo '

  <table class="table table-responsive-sm table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

      <th scope="col">Titulo</th>

      <th scope="col">Foto</th>

      <th scope="col">Seccion</th>
      
      <th scope="col">Estatus</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';



  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      echo '
      <form method="POST">

  <tr>

      <input type="hidden" id="ruta" name="ruta" value="' . $columna1['Recurso'] . '"/>

      <input type="hidden" name="id_vid" value="' . $columna1['ID'] . '" />
      
      <td>' . $columna1['Titulo'] . '</td>

      <td><a target="_blank" href="' . $columna1['Recurso'] . '">Ver Foto</a></th>

      <td>' . $columna1['Nombre'] . '</td>

      <td>' . $columna1['estNom'] . '</td>

      <td>

        <button type="button" class="btn btn-primary btn-sm"

          data-toggle="modal" data-target="#ModalUpdateFoto" onclick="mostrareditFoto(`' . $columna1['ID'] . '`,`' . $columna1['Titulo'] . '`,`' . $columna1['Recurso'] . '`,`' . $columna1['Nombre'] . '`)">

          <img src="img/Inicio/editar.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

        </button>
          
        <input type="hidden" name="origen" value="Fotos">

        <input type="hidden" name="img" value="img/Inicio/img.svg">


        <button type="submit" class="btn btn-primary btn-sm" id="ID" name="ID" alt="Submit"

          value="' . $columna1['ID'] . '" formaction="Delete.php?tabla=foto">

          <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">

        </button>

      </td>

    </tr>

</form>





 ';
    }
  }

  echo ' </tbody>

</table>
';
}

//Actualiza informacion de Ubicacion 
function updateUbicacion($calle, $numEx, $numIn, $colo, $ciudad, $cp, $municipio, $estado, $urlMaps)
{
  $conexion = conexion10();
  $consulta = "UPDATE ubicacion 
  SET 
    Num_Interior='$numIn', 
    Num_Exterior='$numEx', 
    Calle='$calle', 
    Colonia='$colo', 
    Ciudad='$ciudad', 
    Codigo_Postal='$cp', 
    url_Maps='$urlMaps', 
    Municipio_ID='$municipio'
  WHERE Universidad_ID={$_SESSION['Universidad_ID']};";

  mysqli_query($conexion, $consulta);

  console_log($consulta);

  mysqli_close($conexion);

  setSolicitado("universidad", "ID");
}

function getEstatus($Tabla, $CampoUniID)
{
  $con = conexion10();
  $cons = "SELECT Estatus_ID FROM $Tabla WHERE $CampoUniID=" . $_SESSION['Universidad_ID'];
  $aux = mysqli_query($con, $cons);
  $res = mysqli_fetch_array($aux);
  mysqli_close($con);
  console_log($cons);
  console_log($res['Estatus_ID']);
  return $res['Estatus_ID'];
}

function setPendiente($Tabla, $CampoUniID)
{
  if (getEstatus($Tabla, $CampoUniID) != 1) {
    $con = conexion10();
    $cons = "UPDATE $Tabla SET Estatus_ID=2 WHERE $CampoUniID=" . $_SESSION['Universidad_ID'];
    mysqli_query($con, $cons);
    mysqli_close($con);
    console_log("setPendiente: " . $cons);
  }
}

function setSolicitado($Tabla, $CampoUniID)
{
  if (getEstatus($Tabla, $CampoUniID) != 1) {
    $con = conexion10();
    $cons = "UPDATE $Tabla SET Estatus_ID=1 WHERE $CampoUniID=" . $_SESSION['Universidad_ID'];
    mysqli_query($con, $cons);
    mysqli_close($con);
    console_log("setSolicitado: " . $cons);
  }
}

//Actualiza informacion de Cuenta escolar

function updateCuentaEscolar($claveCT, $nombreArchivo1, $ruta1, $nombreArchivo2, $ruta2, $nombre, $sector)
{

  if ($nombreArchivo1 != "NA" && $nombreArchivo1 != "" && $ruta1 != "") {

    console_log("primer unlink");

    $rutaOld = getRuta("Ruta_Escudo", $_SESSION['Universidad_ID'], "universidad");

    console_log("RutaOld 1: " . $rutaOld);

    $rutalOldAux = pathinfo($rutaOld);

    if ($rutalOldAux['basename'] != "NA" && $rutalOldAux['basename'] != "") {

      console_log("rutalOldAux 1: " . getcwd() . "/docs_Unis/logos/" . $rutalOldAux['basename']);

      console_log("Unlink 1: " . unlink(getcwd() . "/docs_Unis/logos/" .  $rutalOldAux['basename']));
    }


    console_log("Primer Move");

    $destino = nombreRandom($nombreArchivo1, "docs_Unis/logos/");

    console_log("Destino 1: " . $destino);

    console_log("Ruta tmp 1: " . $ruta1);

    console_log("Resultado de move_uploaded_file (Update) 1: " . move_uploaded_file($ruta1, $destino));

    $destino = "https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa/" . $destino;


    $consulta = "UPDATE universidad SET Clave_Centro_Trabajo='$claveCT', Nombre='{$nombre}', Tipo='$sector', Ruta_Escudo='{$destino}'

    WHERE ID={$_SESSION['Universidad_ID']}";
  }

  if ($nombreArchivo2 != "NA" && $nombreArchivo2 != "" && $ruta2 != "") {

    console_log("segundo unlink");

    $rutaOld = getRuta("Proceso_Admision", $_SESSION['Universidad_ID'], "universidad");

    console_log("RutaOld 2: " . $rutaOld);


    $rutalOldAux = pathinfo($rutaOld);

    if ($rutalOldAux['basename'] != "NA" && $rutalOldAux['basename'] != "") {

      console_log("rutalOldAux 2: " . getcwd() . "/docs_Unis/admision/" . $rutalOldAux['basename']);

      console_log("Unlink 2: " . unlink(getcwd() . "/docs_Unis/admision/" . $rutalOldAux['basename']));
    }


    console_log("Segundo Move");

    $destino2 = nombreRandom($nombreArchivo2, "docs_Unis/admision/");

    console_log("Destino 2: " . $destino2);

    console_log("Ruta tmp 2: " . $ruta2);

    console_log("Resultado de move_uploaded_file (Update) 2: " . move_uploaded_file($ruta2, $destino2));

    $destino2 = "https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa/" . $destino2;



    $consulta = "UPDATE universidad SET Clave_Centro_Trabajo='$claveCT', Nombre='{$nombre}', Tipo='$sector', Proceso_Admision='{$destino2}'

    WHERE ID={$_SESSION['Universidad_ID']}";
  }

  if ($nombreArchivo1 != "" && $ruta1 != "" && $nombreArchivo2 != "" && $ruta2 != "") {

    $consulta = "UPDATE universidad SET Clave_Centro_Trabajo='$claveCT', Nombre='{$nombre}', Tipo='$sector', Ruta_Escudo='{$destino}',  Proceso_Admision='{$destino2}'

    WHERE ID={$_SESSION['Universidad_ID']}";
  }



  if ($nombreArchivo1 == "" && $ruta1 == "" && $nombreArchivo2 == "" && $ruta2 == "") {

    $consulta = "UPDATE universidad SET Clave_Centro_Trabajo='$claveCT', Nombre='{$nombre}', Tipo='$sector' WHERE ID={$_SESSION['Universidad_ID']}";
  }



  $conexion = conexion10();



  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);

  setSolicitado("universidad", "ID");
}



//Actualiza fotos

function updateFotos($pie, $direccion, $seccion, $IDfoto)

{

  $conexion = conexion10();

  if ($direccion != "") {

    $consulta = 'UPDATE foto SET Titulo="' . $pie . '", Recurso="' . $direccion . '", Seccion_ID="' . $seccion . '" WHERE ID="' . $IDfoto . '" AND Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  } else {

    $consulta = 'UPDATE foto SET Titulo="' . $pie . '", Seccion_ID="' . $seccion . '" WHERE ID="' . $IDfoto . '" AND Universidad_ID="' . $_SESSION['Universidad_ID'] . '";';
  }

  mysqli_query($conexion, $consulta);

  console_log($consulta);

  mysqli_close($conexion);

  setPendiente("foto", "foto.ID = $IDfoto AND Universidad_ID");
}



function getRuta($campo, $Idfoto, $tabla)
{

  $conexion = conexion10();

  $consulta = "SELECT {$campo} FROM {$tabla} WHERE ID={$Idfoto};";

  console_log($consulta);

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {

    $ruta = mysqli_fetch_array($resultado);

    console_log($ruta[$campo]);

    return $ruta[$campo];
  }

  mysqli_close($conexion);
}



//Insert Videos

function inserVideo($titulo, $direccion, $seccionID, $universidadID)

{

  $conexion = conexion10();

  $direccion = obtenerIdVideo($direccion);

  $consulta = "INSERT INTO `video`(`Titulo`, `Recurso`, `Seccion_ID`, `Universidad_ID`, Estatus_ID) 

  VALUES ('" . $titulo . "','" . $direccion . "','" . $seccionID . "','" . $universidadID . "', 1)";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  mysqli_close($conexion);
}



function nuevaSeccion($titulo)

{

  $conexion = conexion10();

  $consulta = "INSERT INTO seccion (Nombre)

  VALUES ('" . $titulo . "');";

  console_log($consulta);

  mysqli_query($conexion, $consulta);

  $IDSeccion = mysqli_insert_id($conexion);

  console_log($IDSeccion);

  return $IDSeccion;

  mysqli_close($conexion);
}


// No se usa
function getIdSeccion($titulo, $tabla)

{

  $conexion = conexion10();

  $consulta = "SELECT DISTINCT seccion.ID FROM seccion 

  LEFT JOIN {$tabla} ON seccion.ID={$tabla}.Seccion_ID WHERE seccion.Titulo='{$titulo}' AND {$tabla}.Universidad_ID={$_SESSION['Universidad_ID']};";

  $resultado = mysqli_query($conexion, $consulta) or die("Error en obtener id usuario");

  console_log($consulta);

  console_log($resultado);

  $columna = mysqli_fetch_array($resultado);

  return $columna['ID'];

  mysqli_close($conexion);
}





//Obtener tabla videos

function obtenerTablavideos()

{

  $conexion = conexion10();

  //Gracias a $_SESSION['Universidad_ID'] se podria hacer mas sencilla esta consulta

  $consulta =
    "SELECT
      video.*,
      seccion.Nombre AS tit,
      estatus.Nombre AS estNom
    FROM
      video
      INNER JOIN seccion ON video.Seccion_ID = seccion.ID
      INNER JOIN estatus ON video.Estatus_ID = estatus.ID
    WHERE
      seccion.ID != 2
      AND video.Universidad_ID = {$_SESSION['Universidad_ID']};";

  console_log($consulta);

  $results = mysqli_query($conexion, $consulta);

  echo ' <table class="table table-responsive-sm table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

    
      <th scope="col">Titulo</th>
      
      <th scope="col">Link</th>
    
      <th scope="col">Seccion</th>

      <th scope="col">Estatus</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';



  if (mysqli_num_rows($results) > 0) {

    while ($columna1 = mysqli_fetch_array($results)) {

      echo '

    <form action="" method="POST">
      <tr>

        <input type="hidden" name="id_vid" value="' . $columna1['ID'] . '">
        
        <td>' . $columna1['Titulo'] . '</td>

        <td><a target="_blank" href="https://www.youtube.com/watch?v=' . $columna1['Recurso'] . '">Ver video</a></td>

        <td>' . $columna1['tit'] . '</td>
        
        <td>' . $columna1['estNom'] . '</td>

        <td>

          <button type="button" class="btn btn-primary btn-sm" 

          data-toggle="modal" data-target="#ModalUpdateVideo"

          onclick=" mostrareditVideo(`' . $columna1['ID'] . '`,`' . $columna1['Titulo'] . '`,`https://www.youtube.com/watch?v=' . $columna1['Recurso'] . '`,`' . $columna1['tit'] . '`);">

            <img src="img/Inicio/editar.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

          </button>

          <input type="hidden" name="origen" value="Videos">

          <input type="hidden" name="img" value="img/Inicio/camara-de-video.svg">

          <button type="submit" class="btn btn-primary btn-sm" id="ID" name="ID"  alt="Submit"

            value="' . $columna1['ID'] . '" formaction="Delete.php?tabla=video"> 

          <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="edit" style="width: 2rem;">

          </button>

        </td>
      </tr>
    </form>';
    }
  }

  echo ' </tbody>

</table>';
}

//Actualiza videos

function updateVideos($titulo, $direccion, $seccion, $IDvideo)

{

  $conexion = conexion10();

  $direccion = obtenerIdVideo($direccion);

  $consulta = "UPDATE `video` 

  SET `Titulo`='" . $titulo . "',`Recurso`='" . $direccion . "',`Seccion_ID`='" . $seccion . "' WHERE `ID`='" . $IDvideo . "' AND Universidad_ID='" . $_SESSION['Universidad_ID'] . "';";

  mysqli_query($conexion, $consulta);

  console_log($consulta);

  mysqli_close($conexion);

  setPendiente("video", "video.ID = $IDvideo AND Universidad_ID");
}

function checkVideoBienvenida($idUni)
{
  $con = conexion10();
  $cos = 
    "SELECT
      video.ID
    FROM
      video
    WHERE
      video.Seccion_ID = 1
      AND video.Universidad_ID = $idUni;";

  // console_log("consulta: $cos");

  $res = mysqli_query($con, $cos);

  $aux = mysqli_num_rows($res);
  // console_log("auxiliar: $aux");

  $return = ($aux > 0);

  // console_log("returns: $return");

  return $aux;
}

//Obtenemos las secciones de Videos

function ObtenerSeccionesVideos($Idselect)

{


  $conexion = conexion10();

  $consulta = "SELECT seccion.* 
  FROM seccion 
  JOIN carrera ON seccion.ID=carrera.Seccion_ID 
  WHERE carrera.Universidad_ID=" . $_SESSION['Universidad_ID'] . "
  ORDER BY seccion.Nombre ASC";

  $results = mysqli_query($conexion, $consulta);

  echo '<select class="form-control" id="' . $Idselect . '" name="idseccionvideo">';

  console_log(checkVideoBienvenida($_SESSION['Universidad_ID']) > 0);
  if (checkVideoBienvenida($_SESSION['Universidad_ID']) == 0) {
    echo '<option value="1">Video de Bienvenida</option>';
  }

  echo '<option value="3">Instalaciones</option>';

  if (mysqli_num_rows($results) > 0) {



    while ($columna = mysqli_fetch_array($results)) {

      echo '<option value=' . $columna['ID'] . '> ' . $columna['Nombre'] . '</option>';
    }
  }

  echo "</select>";
}



//Obtenemos las secciones de fotos

function ObtenerSeccionesFotos($Idselect)

{


  $conexion = conexion10();

  $consulta = "SELECT seccion.* 
  FROM seccion 
  JOIN carrera ON seccion.ID=carrera.Seccion_ID 
  WHERE carrera.Universidad_ID=" . $_SESSION['Universidad_ID'] . "
  ORDER BY seccion.Nombre ASC";

  $results = mysqli_query($conexion, $consulta);

  echo '<select class="form-control" id="' . $Idselect . '" name="idseccionfoto">';
  echo '<option value="3">Instalaciones</option>';

  if (mysqli_num_rows($results) > 0) {

    while ($columna = mysqli_fetch_array($results)) {

      echo '<option value=' . $columna['ID'] . '> ' . $columna['Nombre'] . '</option>';
    }
  }
  echo "</select>";
}



//Obtenemos las secciones de Ofertas
// No se usa
function ObtenerSeccionesOfertas($Idselect)

{

  //Gracias a $_SESSION['Universidad_ID'] se podria hacer mas sencilla esta consulta

  $conexion = conexion10();

  $consulta = "SELECT DISTINCT seccion.* 

  FROM seccion 

  LEFT JOIN carrera ON carrera.Seccion_ID=seccion.ID 

  WHERE carrera.Universidad_ID=" . $_SESSION['Universidad_ID'];

  $results = mysqli_query($conexion, $consulta);

  echo '<select class="form-control" id="' . $Idselect . '" name="idseccionoferta"';

  if (mysqli_num_rows($results) > 0) {

    echo '>';

    while ($columna = mysqli_fetch_array($results)) {

      echo '<option value=' . $columna['ID'] . '> ' . $columna['Nombre'] . '</option>';
    }
  } else {

    echo 'style="display: none;">';
  }
}



//validar login 

//username es el usuario y password la contraseña del mismo

function  validarlogin($username, $password)

{

  $conexion = conexion10();

  $sql = "SELECT * FROM usuario WHERE Nombre_Usuario ='$username' AND Contrasena='$password'";

  $results = mysqli_query($conexion, $sql);

  if (!$results || mysqli_num_rows($results) > 0) {
    $row = mysqli_fetch_array($results);
    switch ($row['Tipo']) {
      case 3:
         swal("Cuenta bloqueada.", "","warning");
        unset($_SESSION['Nombre']);
        unset($_SESSION['ID']);
        header("Location: SeccionAdministrativa/index.php");
        break;
      case 2:
        $_SESSION['tipo'] = "Inicio.php";
        $_SESSION['Nombre'] = $username;
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['Universidad_ID'] = getUniID();

        break;
      case 1:
        $_SESSION['tipo'] = "Supervisor.php";
        $_SESSION['Nombre'] = $username;
        $_SESSION['ID'] = $row['ID'];
        break;
      case 0:
        $_SESSION['tipo'] = "Superadmin.php";
        $_SESSION['Nombre'] = $username;
        $_SESSION['ID'] = $row['ID'];
        break;
    }

    header("Location:" . $_SESSION['tipo']);
    $usuario  = $_SESSION['Nombre'];
    $Id_usuario =  $_SESSION['ID'];
  } else {

    console_log("se fue por el else");

    echo "Usuario inexistente revise las credenciales";
  }

  mysqli_close($conexion);
}





?>

<?php

//validar login 

//username es el usuario y password la contraseña del mismo
// No se usa
function   validarcredenciales($username, $password)

{

  $conexion = conexion10();

  $sql = "SELECT * FROM usuario WHERE nick_name ='$username' AND password='$password'";

  $results = mysqli_query($conexion, $sql);

  if (mysqli_num_rows($results) > 0) {

    while ($row = mysqli_fetch_array($results)) {

      mysqli_close($conexion);

      return true;
    }
  } else {

    mysqli_close($conexion);

    return false;
  }
}

//No se usa
function updateusuario($Usuario, $Correo, $Nombre, $imagen)

{

  $conexion = conexion10();

  $sql = "UPDATE usuarios SET nick_name='$Usuario',nom_completo='$Nombre',correo='$Correo',icono='$imagen'

  WHERE nick_name='" . $_SESSION["usuario"] . "'";

  $results = mysqli_query($conexion, $sql) or die("Error al actualizar todo");

  $_SESSION['usuario'] = $Usuario;

  mysqli_close($conexion);
}


//Preguntar si el usuario esta disponible

function usuario_disponible($Usuario)

{

  $conexion = conexion10();

  $consulta = "SELECT * FROM usuarios where nick_name='$Usuario'";

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {

    mysqli_close($conexion);

    return false;
  } else {

    mysqli_close($conexion);

    return true;
  }
}

//datos del usuario

//Valida si el usuario existe sino lo agrega

function validaragregarusuario($Usuario, $Correo, $Nombre, $contrasena, $imagen)

{

  $conexion = conexion10();

  $consulta = "SELECT * FROM usuarios where nick_name='$Usuario'";

  $consulta20 = "SELECT * FROM usuarios where correo='$Correo'";

  $resultado = mysqli_query($conexion, $consulta);

  $resultado20 = mysqli_query($conexion, $consulta20);

  if (mysqli_num_rows($resultado) > 0) {

    echo "Usuario existente";
  } else {

    if (mysqli_num_rows($resultado20) > 0) {

      echo "correo existente";
    } else {

      // agregarusuario($Usuario, $Correo, $Nombre, $contrasena, $imagen);

      echo "Usuario Agregado";
    }
  }

  mysqli_close($conexion);
}

//Regresa los datos de la cuenta actual con formato
// No se usa
function obtenerusuarioexistente($Usuario)
{

  $conexion = conexion10();

  $consulta = "SELECT * FROM usuarios where nick_name='$Usuario'";

  $resultado = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");

  $consulta2 = "SELECT icono FROM usuarios where nick_name='$Usuario'";

  $resultado2 = mysqli_query($conexion, $consulta) or die("Error de llenado de tabla");

  while ($columna = mysqli_fetch_array($resultado2)) {
    // muestra error
    // tablausuarios($resultado, $columna['icono']); 

  }

  mysqli_close($conexion);
}





?>

<?php


function ObtenerIdUsuario($nick)

{

  $conexion = conexion10();

  $consulta1 = "SELECT id FROM usuario WHERE nombre_usuario='$nick'";

  $resultado1 = mysqli_query($conexion, $consulta1) or die("Error en obtener id usuario");

  while ($columna1 = mysqli_fetch_array($resultado1)) {

    return $columna1['id'];
  }
}

?>

<!-- Codigo php para las consultas de Supervisor.php -->
<?php

//Metodo para obtener el total de universidades
function TotalUniversidades()
{
  $conexion = conexion10();

  $consultaTotalUni = "SELECT COUNT(id) AS res FROM universidad";

  $resultado = mysqli_query($conexion, $consultaTotalUni);

  if (mysqli_num_rows($resultado) > 0) {
    $final = mysqli_fetch_array($resultado);
    echo '<h2>' . $final['res'] . '</h2>';
  } else {
    echo '<h2>0</h2>';
  }
}

//Metodo para consultar la cantidad y estatus de las universidades, recibe el numero de la fase del cual queremos saber la cantidad de universidades
function UniversidadesFases($fase)
{

  $conexion = conexion10();

  //Consultas para conocer la cantidad de total de universidades y la cantidad de universidades en cada status
  $consultaFase = "SELECT COUNT(ID) AS res FROM universidad where Estatus_ID = $fase";


  //Realizamos la consulta a la base de datos
  $resultado1 = mysqli_query($conexion, $consultaFase);


  if (mysqli_num_rows($resultado1) > 0) {
    //Guardamos el resultado de la consulta en un array
    $fase = mysqli_fetch_array($resultado1);
    echo '<h2>' . $fase['res'] . '</h2>';
  } else {
    echo "<h2>0</h2>";
  }
}


//Metodo para obtener la cantidad de universidades de un municipio especifico
function GetUniMunicipio($ID_Municipio)
{
  $conexion = conexion10();

  $consultaUniMunicipioTotal = "SELECT COUNT(ubicacion.Municipio_ID) AS totalUniMuni FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID
   WHERE ubicacion.Municipio_ID = $ID_Municipio GROUP BY ubicacion.Municipio_ID";

  $resultado = mysqli_query($conexion, $consultaUniMunicipioTotal);

  if (mysqli_num_rows($resultado) > 0) {
    $final = mysqli_fetch_array($resultado);
    echo '<h2>' . $final['totalUniMuni'] . '</h2>';
  } else {
    echo '<h2>0</h2>';
  }
}

//Muestra la cantidad de universidades dependiendo de su status, recibe por parametro el ID del municipio y el status de la uni que se quiere conocer
function GetUniMuniStatus($ID_Municipio, $Status_UNI)
{
  $conexion = conexion10();

  $consulta = " SELECT COUNT(ubicacion.Municipio_ID) AS CantidadStatus FROM universidad LEFT JOIN ubicacion ON ubicacion.Universidad_ID = universidad.ID WHERE ubicacion.Municipio_ID=$ID_Municipio AND universidad.Estatus_ID = $Status_UNI GROUP BY ubicacion.Municipio_ID";

  $resultado = mysqli_query($conexion, $consulta);
  if (mysqli_num_rows($resultado) > 0) {
    $final = mysqli_fetch_array($resultado);

    echo '<h2>' . $final['CantidadStatus'] . '</h2>';
  } else {
    echo "<h2>0</h2>";
  }
}

//Funcion para mostrar la lista de universidades de un municipio y su estatus
function MostrarListaUni($ID_Municipio)
{
  $conexion = conexion10();

  $consulta = "SELECT `universidad`.`Nombre` AS NombreUni, `estatus`.`Nombre` AS Estatus,`universidad`.`ID` FROM `universidad` LEFT JOIN `ubicacion` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` LEFT JOIN `estatus` ON `universidad`.`Estatus_ID` = `estatus`.`ID` WHERE ubicacion.Municipio_ID = $ID_Municipio";

  $resultado = mysqli_query($conexion, $consulta);

  $contador = 1;

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {

      echo '
    <tr class="dr">
        <th scope="row" class="text-left" >' . $contador . '</th>
        <td class="text-center" >' . $final['NombreUni'] . '</td>
        <td class="text-center">' . $final['Estatus'] . '</td>
        <td class="text-right">
            <form action="DetalleUni.php" method="POST">
              <input type="hidden" value="' . $final['ID'] . '" name ="ID_UNI">
              <input type="hidden" value="' . $final['Estatus'] . '" name ="Estatus_UNI">
              <input type="hidden" value="' . $ID_Municipio . '" name ="ID_MUN">
              <input type="hidden" value="' . $_POST['MUN_IMG'] . '" name ="MUN_IMG">
              <input type="hidden" value="' . $_POST['NOM_MUN'] . '" name ="NOM_MUN">
                <button class="btn btn-info">
                    Ir
                </button>
            </form>
        </td>
    </tr>';
      $contador++;
    }
  } else {
    echo '
    <tr class="dr">
        <th scope="row" class="text-left" >0</th>
        <td class="text-center" >No hay universidades</td>
        <td class="text-center">No hay universidades</td>

    </tr>';
  }
}

function tablaExcel($ID_Municipio)
{
  $conexion = conexion10();

  $consulta = "SELECT universidad.Nombre AS NombreUniversidad,universidad.Clave_Centro_Trabajo, `ubicacion`.*, `usuario`.*, `estatus`.`Nombre` AS NombreEstatus, `contacto_universidad`.`Telefono` AS TelefonoUni, contacto_universidad.Correo_Electronico AS UniCorreo FROM `universidad` LEFT JOIN `ubicacion` ON `ubicacion`.`Universidad_ID` = `universidad`.`ID` LEFT JOIN `usuario` ON `universidad`.`Usuario_ID` = `usuario`.`ID` LEFT JOIN `estatus` ON `universidad`.`Estatus_ID` = `estatus`.`ID` LEFT JOIN `contacto_universidad` ON `contacto_universidad`.`Universidad_ID` = `universidad`.`ID` WHERE ubicacion.Municipio_ID = $ID_Municipio";

  $resultado = mysqli_query($conexion, $consulta);

  $contador = 1;
  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      echo '
          <tr>
          <td>' . $contador . '</td>
          <td>' . $final['NombreUniversidad'] . '</td>
          <td>' . $final['Clave_Centro_Trabajo'] . '</td>
          <td>' . $final['NombreEstatus'] . '</td>
          <td>' . $final['Ciudad'] . '</td>
          <td>' . $final['Colonia'] . '</td>
          <td>' . $final['Calle'] . '</td>
          <td>' . $final['Num_Interior'] . '</td>
          <td>' . $final['Num_Exterior'] . '</td>
          <td>' . $final['UniCorreo'] . '</td>
          <td>' . $final['TelefonoUni'] . '</td>
          <td>' . $final['Nombre_Usuario'] . '</td>
          <td>' . $final['Telefono'] . '</td>
          <td>' . $final['Celular'] . '</td>
          <td>' . $final['Correo_Electronico'] . '</td>
          </tr>
          ';
      $contador++;
    }
  }
}
function alumnosExcel()
{
  $conexion = conexion10();

  $consulta = "SELECT `registrado`.*,area.Nombre AS areaInteres FROM `registrado` LEFT JOIN `area` ON `registrado`.`Area_ID` = `area`.`ID`";

  $resultado = mysqli_query($conexion, $consulta);
  $contador = 1;

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      echo '
            <tr>
              <td>' . $contador . '</td>
              <td>' . $final['Nombre'] . '</td>
              <td>' . $final['Apellido_P'] . '</td>
              <td>' . $final['Apellido_M'] . '</td>
              <td>' . $final['Telefono'] . '</td>
              <td>' . $final['Correo_Electronico'] . '</td>
              <td>' . $final['Escuela'] . '</td>
              <td>';
      switch ($final['Motivo']) {
        case 0:
          echo 'Estudiando bachillerato o egresado';
          break;
        case 1:
          echo 'Padre o tutor';
          break;
        case 2:
          echo 'Trabajando y quiere estudiar';
      }
      echo '</td>
              <td>' . $final['areaInteres'] . '</td>
            </tr>
      ';
      $contador++;
    }
  }
}

function MostraResponsableUni($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT `usuario`.`Nombre`, usuario.Apellido_P,usuario.Apellido_M,usuario.Telefono,usuario.Celular,usuario.Correo_Electronico FROM `universidad` LEFT JOIN `usuario` ON `universidad`.`Usuario_ID` = `usuario`.`ID` WHERE universidad.ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  $final = mysqli_fetch_array($resultado);
  echo '
    <section class="container my-5">
    <h4 class="text-center my-4">Coordinador Institucional de la Feria</h4>
<hr>
  <div class="form-row">
    <div class="col-12 mb-3">
        <div class="row">
        <label for="responsablename" class="col-12 col-md-3">Nombre(s)</label>
        <input type="text" class="form-control col-12 col-md-9" id="responsablename" name="responsablename" placeholder="Nombre del responsable"
          value = "' . $final['Nombre'] . '"
           disabled>
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="row">
        <label for="APResponsable" class="col-12 col-md-3">Apellido P.</label>
        <input type="text" class="form-control col-12 col-md-9" id="APResponsable" name="APResponsable" placeholder="Apellido Paterno"
          value = "' . $final['Apellido_P'] . '"
           disabled>
        </div>
    </div>
    <div class="col-12 mb-3">
        <div class="row">
        <label for="AMResponsable" class="col-12 col-md-3">Apellido M.</label>
        <input type="text" class="form-control col-12 col-md-9" id="AMResponsable" name="AMResponsable" placeholder="Apellido Materno"
          value = "' . $final['Apellido_M'] . '"
           disabled>
        </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="telfijo" class="col-12 col-md-3">Tel&eacute;fono fijo</label>
        <input type="text" class="form-control col-12 col-md-9" id="telfijo" name="telfijo" placeholder="Tel&eacute;fono del responsable"
          value = "' . $final['Telefono'] . '"
           disabled>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="numeromovil" class="col-12 col-md-3">N&uacute;mero M&oacute;vil</label>
        <input type="text" class="form-control col-12 col-md-9" id="numeromovil" name="numeromovil" placeholder="N&uacute;mero M&oacute;vil del coordinador"
          value = "' . $final['Celular'] . '"
           disabled>
      </div>
    </div>
  <div class="col-md-12 mb-3">
            <div class="row">
              <label for="correo" class="col-12 col-md-3">Correo Electr&oacute;nico</label>
              <div class=" col-12 col-md-9">
                <div class="row">
                    <a class="input-group-text col-1 my-1 justify-content-center" id="correolabel" target="_blank" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=' . $final['Correo_Electronico'] . '"  <span id="inputGroupPrepend21">@</span></a>
                    <input name="correo" type="text" class="form-control col-11 my-1" id="correoR" name="correoR" placeholder="Correo Electr&oacute;nico del coordinador" aria-describedby="inputGroupPrepend21" disabled value = "' . $final['Correo_Electronico'] . '">
                </div>
              </div>
            </div>
          </div>
          </div>';
}

function DatosUniversidad($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT `universidad`.`Nombre`,universidad.Estatus_ID,universidad.Ruta_Escudo,universidad.Clave_Centro_Trabajo,universidad.Tipo, `contacto_universidad`.`Telefono`,contacto_universidad.Correo_Electronico FROM `universidad` LEFT JOIN `contacto_universidad` ON `contacto_universidad`.`Universidad_ID` = `universidad`.`ID` WHERE universidad.ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  $final = mysqli_fetch_array($resultado);

  echo '  <h4 class="text-center my-4">Datos de la universidad</h4>
    <hr>
    <div class="col-12 mb-3">
    <div class="row">
      <label  class="col-12 col-md-3">Logo</label>
      ';
      if ($final['Ruta_Escudo'] == "NA") {
       echo'<p class="fw-normal" >' . $final['Ruta_Escudo'] . '</p>';
      }else if($final['Ruta_Escudo'] != "NA"){
        echo'<img src="'.$final['Ruta_Escudo'].'" class="rounded float-right w-25 p-3" >';
      }

echo'
    </div>
  </div>
    <div class="form-row">
      <div class="col-12 mb-3">
        <div class="row">
          <label for="uniname" class="col-12 col-md-3">Instituci&oacuten</label>
          <input type="text" class="form-control col-12 col-md-9" id="uniname" name="uniname" placeholder="Nombre de la instituci&oacute"  disabled
          value = "' . $final['Nombre'] . '">
        </div>
      </div>
      <div class="col-12 mb-3">
      <div class="row">
        <label for="Tinstituto" class="col-12 col-md-3">Estatus de la institución</label>
        <input type="text" class="form-control col-12 col-md-9" id="uniStatus" name="uniStatus" placeholder="Estatus de la universidad"  disabled
        value = "';
  switch ($final['Estatus_ID']) {
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
      echo 'Rechazado';
      break;
  }
  echo '">
      </div>
    </div>
      <div class="col-12 mb-3">
      <div class="row">
        <label for="uniname" class="col-12 col-md-3">Clave del centro de trabajo</label>
        <input type="text" class="form-control col-12 col-md-9" id="uniname" name="uniname" placeholder="Clave del Centro de Trabajo"  disabled
        value = "' . $final['Clave_Centro_Trabajo'] . '">
      </div>
    </div>
      <div class="col-12 mb-3">
      <div class="row">
        <label for="Tinstituto" class="col-12 col-md-3">Tipo de institución</label>
        <input type="text" class="form-control col-12 col-md-9" id="uniname" name="uniname" placeholder="Tipo de institución"  disabled
        value = "';
  switch ($final['Tipo']) {
    case 0:
      echo 'Publica';
      break;
    case 1:
      echo 'Privada';
      break;
  }
  echo '">
      </div>
    </div>
    <div class="col-12 mb-3">
        <div class="row">
          <label for="telefonovalue" class="col-12 col-md-3">Tel&eacute;fono</label>
          <input type="text" class="form-control col-12 col-md-9" id="telefonovalue" placeholder="Tel&eacute;fono de la institución"  disabled
          value = "' . $final['Telefono'] . '">
        </div>
      </div>
      <div class="col-md-12 mb-3">
            <div class="row">
              <label for="correo" class="col-12 col-md-3">Correo electr&oacute;nico</label>
              <div class=" col-12 col-md-9">
                <div class="row">
                    <a class="input-group-text col-1 my-1 justify-content-center" id="correolabel" target="_blank" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=' . $final['Correo_Electronico'] . '"  <span id="inputGroupPrepend21">@</span></a>
                    <input name="correo" type="text" class="form-control col-11 my-1" id="correoUni" placeholder="Correo Electr&oacute;nico de la instituci&oacute;n" aria-describedby="inputGroupPrepend21" disabled value = "' . $final['Correo_Electronico'] . '">
                </div>
              </div>
            </div>
          </div>';
}


//Metodo para obtener la dirección de una universidad
function DireccionUni($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT Calle,Num_Exterior,Num_Interior,Colonia,Ciudad,Codigo_Postal FROM `ubicacion` WHERE Universidad_ID = $ID_UNI";

  $consulta2 = "SELECT `municipio`.`Nombre` AS NombreMun, `estado`.`Nombre`AS NombreEstado FROM `ubicacion` LEFT JOIN `municipio` ON `ubicacion`.`Municipio_ID` = `municipio`.`ID` LEFT JOIN `estado` ON `municipio`.`Estado_ID` = `estado`.`ID` WHERE ubicacion.Universidad_ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);
  $resultado2 = mysqli_query($conexion, $consulta2);

  $direccionUni = mysqli_fetch_array($resultado);
  $EstadoyMunicipioUni = mysqli_fetch_array($resultado2);


  echo '
    <div class="col-12 mb-3">
      <div class="row">
      <label for="Selectbox" class="col-12 col-md-3">Estado</label>
      <input type="text" class="form-control col-12 col-md-9" id="Selectbox" name="Estado" placeholder="Ciudad donde se encuentra"  disabled
      value = "' . $EstadoyMunicipioUni['NombreEstado'] . '">
      </div>
    </div>
    <div class="col-12 mb-3">
      <div class="row">
        <label for="Selectcaja" class="col-12 col-md-3">Municipio</label>
        <input type="text" class="form-control col-12 col-md-9" id="Selectcaja" name="Selectcaja" placeholder="Municipio donde se encuentra"  disabled 
        value = "' . $EstadoyMunicipioUni['NombreMun'] . '">
      </div>
    </div>
    <div class="col-12 mb-3">
    <div class="row">
      <label for="ciudadvalue" class="col-12 col-md-3">Ciudad</label>
      <input type="text" class="form-control col-12 col-md-9" id="ciudadvalue" name="ciudadvalue" placeholder="Ciudad donde se encuentra"  disabled value = "' . $direccionUni['Ciudad'] . '">
    </div>
  </div>
  <div class="col-12 mb-3">
  <div class="row">
    <label for="coloniavalue" class="col-12 col-md-3">Colonia</label>
    <input type="text" class="form-control col-12 col-md-9" id="coloniavalue" name="coloniavalue" placeholder="Ciudad donde se encuentra"  disabled value = "' . $direccionUni['Colonia'] . '">
  </div>
</div>    
    <div class="col-12 mb-3">
    <div class="row">
      <label for="calleD" class="col-12 col-md-3">Calle</label>
      <input type="text" class="form-control col-12 col-md-9" id="calleD" name="calleD" placeholder="Calle donde se encuentra"  disabled value = "' . $direccionUni['Calle'] . '">
    </div>
  </div>
  <div class="col-12 mb-3">
    <div class="row">
      <label for="numeroE" class="col-12 col-md-3">N° exterior</label>
      <input type="text" class="form-control col-12 col-md-9" id="numeroE" name="numeroE" placeholder="Numero de Exterior si tiene"  disabled value = "' . $direccionUni['Num_Exterior'] . '">
    </div>
  </div>
  <div class="col-12 mb-3">
    <div class="row">
      <label for="numeroI" class="col-12 col-md-3">N° interior</label>
      <input type="text" class="form-control col-12 col-md-9" id="numeroI" name="numeroI" placeholder="Numero de Interior si tiene"  disabled value = "' . $direccionUni['Num_Interior'] . '">
    </div>
  </div>
  <div class="col-12 mb-3">
    <div class="row">
      <label for="CPdato" class="col-12 col-md-3">C&oacute;digo postal</label>
      <input type="text" class="form-control col-12 col-md-9" id="CPdato" name="CPdato" placeholder="C&oacute;digo postal"  disabled value = "' . $direccionUni['Codigo_Postal'] . '">
    </div>
  </div>
  </div>';
}

function NombreUni($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT Nombre,ID FROM `universidad` WHERE ID = $ID_UNI";
  $resultado = mysqli_query($conexion, $consulta);

  $NombreUni = mysqli_fetch_array($resultado);

  echo '<h4 class=" text-center text-wrap justify-content-center m-2">' . $NombreUni['Nombre'] . '</h4>
        <input type="hidden" value="' . $NombreUni['ID'] . '" name ="ID_UNI" id = "Id_Uni">';
}

function MostrarCarreras($ID_UNI)
{

  $conexion = conexion10();

  $consulta = "SELECT ID,Nombre,Recurso,RVOE,Periodo_Vigencia,Estatus_ID  FROM `carrera` WHERE Universidad_ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      //Si el status de la carrera es Aprobado entonces su checkbox estara activado
      if ($final['Estatus_ID'] == 3) {
        echo '
        <tbody id="listado">
        <tr>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Nombre de la carrera" disabled value ="' . $final['Nombre'] . '"></td>
          <td><a href = "' . $final['Recurso'] . '" target=”_blank” title = "' . $final['Recurso'] . '"><input class="form-control col-12 col-md-12" type="text" style = "cursor: pointer"  placeholder="PDF pendiente" disabled value = "Vista previa"></a></td>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="REVOE de la carrera" disabled value ="' . $final['RVOE'] . '"></td>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Periodo de vigencia" disabled value ="' . $final['Periodo_Vigencia'] . '"></td>
          <td><input type="checkbox" class="col-12 col-md-4" id="checkboxCarrera" value ="' . $final['ID'] . '" checked ></td>
        </tr>
      </tbody>
    ';
      } else {
        echo '
        <tbody id="listado">
        <tr>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Nombre de la carrera" disabled value ="' . $final['Nombre'] . '" ></td>
          <td><a href = "' . $final['Recurso'] . '" target=”_blank” title = "' . $final['Recurso'] . '"><input class="form-control col-12 col-md-12" type="text"  placeholder="PDF pendiente" disabled value = "Vista previa"></a></td>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="REVOE de la carrera" disabled value ="' . $final['RVOE'] . '"></td>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Periodo de vigencia" disabled value ="' . $final['Periodo_Vigencia'] . '"></td>
          <td><input type="checkbox" class="col-12 col-md-4" id="checkboxCarrera" value ="' . $final['ID'] . '"></td>
        </tr>
      </tbody>
    ';
      }
    }
  }
}

function MostrarFotos($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT ID,Recurso,Titulo,Estatus_ID  FROM `foto` WHERE Universidad_ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      //Si el status de la carrera es Aprobado entonces su checkbox estara activado
      if ($final['Estatus_ID'] == 3) {
        echo '
  <tbody id="listadoFotos">
    <tr>
      <td><img src="' . $final['Recurso'] . '" height="250px" width = "300px" alt="Card image cap"></td>
      <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo de la foto" disabled value ="' . $final['Titulo'] . '"></td>
      <td><input type="checkbox" class="col-12 col-md-4" id="checkboxFoto" value ="' . $final['ID'] . '" checked ></td>
    </tr>
  </tbody>
  ';
      } else {
        echo '
    <tbody id="listadoFotos">
      <tr>
        <td><img src="' . $final['Recurso'] . '" height="250px" width = "300px" alt="Card image cap"></td>
        <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo de la foto" disabled value ="' . $final['Titulo'] . '"></td>
        <td><input type="checkbox" class="col-12 col-md-4" id="checkboxFoto" value ="' . $final['ID'] . '"></td>
      </tr>
    </tbody>
';
      }
    }
  }
}
function MostrarVideos($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT ID,Recurso,Titulo,Estatus_ID  FROM `video` WHERE Universidad_ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      //Si el status de la carrera es Aprobado entonces su checkbox estara activado
      if ($final['Estatus_ID'] == 3) {
        echo '
        <tbody id="listadoFotos">
        <tr>
          <td><div class="videoGallery wrapper">
          <a href="https://youtu.be/' . $final["Recurso"] . '" class="img-fluid text-center position-relative" style="width: 100% ">
              <img src="../Imagenes/repro.png" alt="Video de bienvenida" class=" text-center img-fluid  position-absolute rounded" style=" top: 45%;left: 45%;max-width:50px;max-height:50px" width="10%">
              <img src="https://img.youtube.com/vi/' . $final["Recurso"] . '/0.jpg" class="rounded img-thumbnail bg-dark img-fluid" alt="Video de bienvenida" style="width="100%">
              <br>
          </a>
      </div></td>
          <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo del video" disabled value ="' . $final['Titulo'] . '"></td>
          <td><input type="checkbox" class="col-12 col-md-4" id="checkboxVideo" value ="' . $final['ID'] . '" checked></td>
        </tr>
      </tbody>
  ';
      } else {
        echo '
    <tbody id="listadoFotos">
      <tr>
        <td><div class="videoGallery wrapper">
        <a href="https://youtu.be/' . $final["Recurso"] . '" class="img-fluid text-center position-relative" style="width: 100% ">
            <img src="../Imagenes/repro.png" alt="Video de bienvenida" class=" text-center img-fluid  position-absolute rounded" style=" top: 45%;left: 45%;max-width:50px;max-height:50px" width="10%">
            <img src="https://img.youtube.com/vi/' . $final["Recurso"] . '/0.jpg" class="rounded img-thumbnail bg-dark img-fluid" alt="Video de bienvenida" style="width="100%">
            <br>
        </a>
    </div></td>
        <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo del video" disabled value ="' . $final['Titulo'] . '"></td>
        <td><input type="checkbox" class="col-12 col-md-4" id="checkboxVideo" value ="' . $final['ID'] . '"></td>
      </tr>
    </tbody>
';
      }
    }
  }
}

function MostrarBecas($ID_UNI)
{
  $conexion = conexion10();

  $consulta = "SELECT *  FROM `beca` WHERE Universidad_ID = $ID_UNI";

  $resultado = mysqli_query($conexion, $consulta);

  if (mysqli_num_rows($resultado) > 0) {
    while ($final = mysqli_fetch_array($resultado)) {
      //Si el status de la carrera es Aprobado entonces su checkbox estara activado
      if ($final['Estatus_ID'] == 3) {
        echo '
  <tbody id="listadoBecas">
    <tr>
      <td><a class="btn btn-link pdf-link" href="'. $final['Recurso'] .'" target= "_blank"> <canvas>Loading</canvas></a></td>
      <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo de la foto" disabled value ="' . $final['Titulo'] . '"></td>
      <td><input type="checkbox" class="col-12 col-md-4" id="checkboxBeca" value ="' . $final['ID'] . '" checked ></td>
    </tr>
  </tbody>
  ';
      } else {
        echo '
    <tbody id="listadoBecas">
      <tr>
      <td><a class="btn btn-link pdf-link" href="'. $final['Recurso'] .'" target= "_blank"> <canvas>Loading</canvas></a></td>
        <td><input class="form-control col-12 col-md-12" type="text"  placeholder="Titulo de la foto" disabled value ="' . $final['Titulo'] . '"></td>
        <td><input type="checkbox" class="col-12 col-md-4" id="checkboxBeca" value ="' . $final['ID'] . '"></td>
      </tr>
    </tbody>
';
      }
    }
  }
}

function getNombreCarrera($id)
{
  $conexion = conexion10();
  $consulta = "SELECT Nombre FROM carrera WHERE ID=$id;";
  $res = mysqli_query($conexion, $consulta);
  $aux = mysqli_fetch_array($res);
  mysqli_close($conexion);
  return $aux['Nombre'];
}

function printTablaAreas($idCarrera)
{
  $conexion = conexion10();
  $consulta = "SELECT 
    area.Nombre AS aNom,
    area.ID,
    carrera.ID AS idCar
  FROM carrera
    JOIN carrera_area 
      ON carrera.ID=carrera_area.Carrera_ID
    JOIN area 
      ON carrera_area.Area_ID=area.ID
  WHERE carrera.ID=$idCarrera";
  $aux = mysqli_query($conexion, $consulta);

  echo ' 

  <table class="col table table-striped table-bordered">

  <thead class="thead-dark">

    <tr>

      <th scope="col">Area</th>

      <th scope="col">Acci&oacute;n</th>

    </tr>

  </thead>

  <tbody>';


  while ($res = mysqli_fetch_array($aux)) {
    echo '

  <form method="POST" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" id="form_' . $res['ID'] . '">
    <tr>

      <input type="hidden" name="ID_Carrera" value="' . $res['idCar'] . '"/>
      <input type="hidden" name="ID_Area" value="' . $res['ID'] . '"/>

      <td>' . $res['aNom'] . '</td>

      <td>

        <button type="submit" class="btn btn-primary btn-sm" form="form_' . $res['ID'] . '">

          <img src="img/Inicio/basura.svg" class="rounded btn-sm" alt="eliminar" style="width: 2rem;">

        </button>


      </td>

    </tr>
  </form>';
  }
  echo "</table>";
}

function printSelectAreas($idCarrera)
{
  $conAux = conexion10();
  $consAux = "SELECT 
    area.ID
  FROM carrera
    JOIN carrera_area 
      ON carrera.ID=carrera_area.Carrera_ID
    JOIN area 
      ON carrera_area.Area_ID=area.ID
  WHERE carrera.ID=$idCarrera";
  $aux1 = mysqli_query($conAux, $consAux);
  $resAux = mysqli_fetch_array($aux1);

  $con = conexion10();
  $cons = "SELECT * FROM area";
  $aux2 = mysqli_query($con, $cons);
  echo '<select class="form-control" name="area">';
  while ($res = mysqli_fetch_array($aux2)) {
    if (!in_array($res['ID'], $resAux)) {
      echo '<option  value="' . $res['ID'] . '">' . $res['Nombre'] . '</option>';
    } else {
      $resAux = mysqli_fetch_array($aux1);
    }
  }
  echo "</select>";
}

function insertCarreraArea($idArea, $idCarrera)
{
  $con = conexion10();
  $cons = "INSERT INTO carrera_area (Area_ID, Carrera_ID) VALUES('$idArea', '$idCarrera')";
  console_log($cons);
  mysqli_query($con, $cons);
  mysqli_close($con);
}

function deleteCarreraArea($idArea, $idCarrera)
{
  $con = conexion10();
  $cons = "DELETE FROM carrera_area WHERE Area_ID='$idArea' AND Carrera_ID='$idCarrera'";
  console_log($cons);
  mysqli_query($con, $cons);
  mysqli_close($con);
}

?>