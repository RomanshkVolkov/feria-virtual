<?php
echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
if (isset($_POST['claveCT'], $_POST['NomUni']) && isset($_FILES['archivo']) && isset($_FILES['archivo2']) && isset($_POST['NomUni']) && isset($_POST['sector'])) {
  console_log("Archivo 1 Pesa: " . $_FILES['archivo']['size']);
  console_log("Archivo 2 Pesa: " . $_FILES['archivo2']['size']);
  if ($_FILES['archivo']['size'] <= 8388608 && $_FILES['archivo2']['size'] <= 8388608) {
    updateCuentaEscolar($_POST['claveCT'], $_FILES['archivo']['name'], $_FILES['archivo']['tmp_name'], $_FILES['archivo2']['name'], $_FILES['archivo2']['tmp_name'], $_POST['NomUni'], $_POST['sector']);
  } else {
    
    echo '<script>swal("Error", "El archivo que intenta subir es demasiado pesado, debe pesar menos de 8MB.","warning");</script>';

  }
}
if (isset($_POST['calle']) && isset($_POST['numEx']) && isset($_POST['numIn']) && isset($_POST['colo']) && isset($_POST['ciudad']) && isset($_POST['municipio']) && isset($_POST['estado']) && isset($_POST['ciudad']) && isset($_POST['urlMaps'])) {
  updateUbicacion($_POST['calle'], $_POST['numEx'], $_POST['numIn'], $_POST['colo'], $_POST['ciudad'], $_POST['codPost'], $_POST['municipio'], $_POST['estado'], $_POST['urlMaps']);
}
console_log(getcwd());
console_log("NomUni: " . isset($_POST['NomUni']));

console_log("archivo: " . isset($_FILES['archivo']));

console_log("archivo2: " . isset($_FILES['archivo2']));

console_log("sector: " . isset($_POST['sector']));


console_log("ID en Session " . $_SESSION['Universidad_ID']);

$infoUbi = getInfoUbi();

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">

  <div class="form-group row">

    <label for="inputname" class="col-sm-2 col-form-label">Nombre de la universidad</label>

    <div class="col-sm-10">

      <input type="text" name="NomUni" class="form-control" id="inputname" placeholder="Nombre de la universidad" value="<?php echo getNomUni(); ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="inputGroupFile01" class="col-sm-2 col-form-label">Logo (JPG)</label>

    <div class="col-2 col-form-label text-center">

      <img src="<?php getEscUni(); ?>" class="card-img-top " alt="Error de archivo">

    </div>

    <div class="col-sm-8">

      <div class="file-field row">

        <label class="col-2 col-form-label btn btn-primary btn-sm ml-3" for="archivo">Elegir archivo</label>

        <div class="col-6">

          <input type="file" onchange="processSelectedFiles('archivo', 'texto1')" id="archivo" name="archivo" style="display: none;" accept="image/jpg" />

          <input class="custom-control-label form-control-plaintext" type="text" placeholder="<?php getEscUni(); ?>" id="texto1" readonly />

        </div>

      </div>

    </div>

  </div>

  <div class="form-group row">

    <label for="inputGroupFile01" class="col-sm-2 col-form-label">Convocatoria (PDF) </label>

    <div class="col-2 col-form-label text-center">

      <?php getConvocatoria(2); ?>

    </div>

    <div class="col-sm-8">

      <div class="file-field row">

        <label class="col-2 col-form-label btn btn-primary btn-sm ml-3" for="archivo2">Elegir archivo</label>

        <div class="col-6">

          <input type="file" onchange="processSelectedFiles('archivo2', 'texto2')" id="archivo2" name="archivo2" style="display: none;" accept=".pdf" />

          <?php getConvocatoria(1); ?>

        </div>

      </div>

    </div>

  </div>

  <div class="form-group row">



    <label for="selectSector" class="col-sm-2 col-form-label">Sector</label>

    <div class="col-sm-10">

      <select class="form-control" id="selectSector" name="sector">
        <?php prtSelectSectorOptions(); ?>
      </select>

    </div>

  </div>

  <div class="form-group row">

    <label for="claveCT" class="col-sm-2 col-form-label">Clave del Centro de Trabajo</label>

    <div class="col-sm-10">

      <input type="text" name="claveCT" class="form-control" id="claveCT" placeholder="Clave del Centro de Trabajo" value="<?php echo $infoUbi['Clave_Centro_Trabajo']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="Estatus" class="col-sm-2 col-form-label">Estatus</label>

    <div class="col-sm-10">

      <input type="text" name="Estatus" class="form-control" id="Estatus" placeholder="Estatus" value="<?php echo $infoUbi['estNom']; ?>" disabled>

    </div>

  </div>



  <br>


  <div class="form-group row">

    <label for="Selectbox" class="col-sm-2 col-form-label">Estado</label>

    <div class="col-sm-10">

      <?php getEstados(); ?>

    </div>

  </div>

  <script>
    estAux = 0;

    function setEstOriginal() {
      estAux = document.getElementById('Selectbox').value;
      console.log(estAux);
    }

    function cmbrSlctMun() {
      estado = document.getElementById('Selectbox').value;
      console.log(estado);
      console.log(estAux);
      document.getElementById('lblMun').setAttribute("for", "slctBox" + estado);
      document.getElementById("slctBox" + estAux).style.display = "none";
      document.getElementById("slctBox" + estAux).disabled = true;
      document.getElementById("slctBox" + estado).style.display = "block";
      document.getElementById("slctBox" + estado).disabled = false;

    }
  </script>

  <div class="form-group row">

    <label id="lblMun" for="slctBox1" class="col-sm-2 col-form-label">Municipio</label>

    <div class="col-sm-10">

      <?php prntSlctMunExtras(); ?>

    </div>

  </div>

  <div class="form-group row">

    <label for="ciudad" class="col-sm-2 col-form-label">Ciudad</label>

    <div class="col-sm-10">

      <input type="text" name="ciudad" class="form-control" id="ciudad" placeholder="Ciudad" value="<?php echo $infoUbi['Ciudad']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="colo" class="col-sm-2 col-form-label">Colonia</label>

    <div class="col-sm-10">

      <input type="text" name="colo" class="form-control" id="colo" placeholder="Colonia" value="<?php echo $infoUbi['Colonia']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="calle" class="col-sm-2 col-form-label">Calle</label>

    <div class="col-sm-10">

      <input type="text" name="calle" class="form-control" id="calle" placeholder="Calle" value="<?php echo $infoUbi['Calle']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="numEx" class="col-sm-2 col-form-label">N&uacute;mero Exterior</label>

    <div class="col-sm-10">

      <input type="text" name="numEx" class="form-control" id="numEx" placeholder="N&uacute;mero Exterior" value="<?php echo $infoUbi['Num_Exterior']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="numIn" class="col-sm-2 col-form-label">N&uacute;mero Interior</label>

    <div class="col-sm-10">

      <input type="text" name="numIn" class="form-control" id="numIn" placeholder="N&uacute;mero Interior" value="<?php echo $infoUbi['Num_Interior']; ?>">

    </div>

  </div>

  <div class="form-group row">

    <label for="codPost" class="col-sm-2 col-form-label">C&oacute;digo Postal</label>

    <div class="col-sm-10">

      <input type="text" name="codPost" class="form-control" id="codPost" placeholder="C&oacute;digo Postal" value="<?php echo $infoUbi['Codigo_Postal']; ?>">

    </div>

  </div>


  <div class="form-group row">

    <label for="url_Maps" class="col-sm-2 col-form-label">URL de Google Maps</label>

    <div class="col-sm-10">

      <?php
      if ($infoUbi['url_Maps'] != "NA") {
        echo   "<input type='text' name='urlMaps' class='form-control' id='url_Maps' placeholder='URL de Google Maps' value='" . $infoUbi['url_Maps'] . "' pattern='(<iframe\s*src=\"https:\/\/www\.google\.com\/maps\/embed\?[^\"]+\"*\s*[^>]+>*<\/iframe>)|(NA)' >";
      } else {
        echo "<input type='text' name='urlMaps' class='form-control' id='url_Maps' placeholder='URL de Google Maps' value='NA' pattern='(<iframe\s*src=\"https:\/\/www\.google\.com\/maps\/embed\?[^\"]+\"*\s*[^>]+>*<\/iframe>)|(NA)'>";
      }
      ?>

    </div>
    <div class="col-12 m-2">
      Para agregar su mapa:<br>
      1.- Ubique su institución en Google Maps<br>
      2.- Elija la Opción compartir<br>
      3.- En la ventana seleccionar la pestaña "Insertar un mapa"<br>
      4.- Dar click en la opción "Copiar HTML"<br>
      5.- Finalmente en el espacio designado pegar la dirección copiada<br>
      Si lo ha hecho correctamente deberá ver el mapa abajo.<br>
    </div>

  </div>

  <h4 id="tmapa">Mapa</h4>

  <div id='output' class='embebed'>
  </div>

  <div class="form-group row">

    <div class="col-sm-12 d-flex justify-content-end">

      <button id="boton" type="submit" class="btn btn-primary 8">Actualizar</button>

      <input type="hidden" name="CONFIG" value="<?php echo $_POST['CONFIG']; ?>" />

      <input type="hidden" name="CONFIG_IMG" value="<?php echo $_POST['CONFIG_IMG']; ?>" />

    </div>

  </div>



</form>

<style>
  #output {
    width: 100%;
    height: 550px;
  }

  #output iframe {
    width: 100%;
    height: 550px;
  }
</style>

<script type="text/javascript">
  function processSelectedFiles(inicio, objetivo, opcion) {
    switch (opcion) {
      case 1:
        var allowedExtensions = /.jpg$/i;
        break;
      case 2:
        var allowedExtensions = /.pdf$/i;
        break;

    }

    var fileInput = document.getElementById(inicio);

    var filename = fileInput.files[0].name;

    document.getElementById(objetivo).value = filename;


    var filePath = fileInput.value;

    if (!allowedExtensions.exec(filePath)) {
      
      swal("Selecione un documento valido", "","warning");
      fileInput.value = '';
      document.getElementById(objetivo).value = '';
    } else {
      document.getElementById(objetivo).value = filename;
    }



  }

  $(function() {
    try {
      var str = $("#url_Maps").val();
      const regex = /@(-?\d+\.\d+),(-?\d+\.\d+)/g;
      const regex2 = /<iframe\s*src="https:\/\/www\.google\.com\/maps\/embed\?[^"]+"*\s*[^>]+>*<\/iframe>/g;


      let match = regex.exec(str);
      let match2 = regex2.exec(str);
      if (match) {
        var i = 0


        const lat = match[1];
        console.log(lat + "lat");
        const long = match[2];
        console.log(long + "long");
        var url = 'http://maps.google.com/maps?q=' + lat + ',' + long + '&z=' + 15 + '&maptype=satellite&output=embed';
        console.log(url);

        $('#output').removeAttr('style');

        $('#output').html(`<a href='` + str + `' target='_blank'><span>` + str + `</span></a><hr>`);

      } else if (match2) {

        $('#output').html(str);

      } else {
        $('#output').removeAttr('style');

        $('#output').html(`<a href='` + str + `' target='_blank'><span>` + str + `</span></a><hr>`);
      }
    } catch (error) {
      console.log(error);
    }
  });

  var uploadField = document.getElementById("archivo");

  uploadField.onchange = function() {
    if (this.files[0].size > 8388608) {
      
       swal("Error", "El archivo seleccionado es demasiado grande.","warning");
      this.value = "";
    } else {
      processSelectedFiles('archivo', 'texto1', 1);
    };
  };

  var uploadField2 = document.getElementById("archivo2");

  uploadField2.onchange = function() {
    if (this.files[0].size > 8388608) {
  swal("Error", "El archivo seleccionado es demasiado grande.","warning");
      this.value = "";
    } else {
      processSelectedFiles('archivo2', 'texto2', 2);
    };
  };
</script>