<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="container text-center">

  <!-- Button trigger modal -->

  <?php
  $con = conexion10();
  $cons = "SELECT COUNT(ID) AS n
  FROM foto 
  WHERE foto.Universidad_ID=" . $_SESSION['Universidad_ID'];
  $aux = mysqli_query($con, $cons);
  $res = mysqli_fetch_array($aux);

  if ($_POST['CONFIG'] == "Fotos" && $res['n'] < 8) {
    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarpdf">';
    echo '+ Agregar archivo';
    echo '</button>';
  } else if ($_POST['CONFIG'] != "Fotos") {
    echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAgregarpdf">';
    echo '+ Agregar archivo';
    echo '</button>';
  } else if ($_POST['CONFIG'] == "Fotos" && $res['n'] >= 8) {
    echo 'No Puede Subir mas de 8 Fotos';
  }

  ?>


</div>





<br>

<div class="container-fluid text-center">

  <?php
  //Esto era antes Oferta educativa
  if ($_POST['CONFIG'] == "Carreras") {

    include_once("componentes/AgregarModalOfertas.php");

    AgregarModal($_POST['CONFIG']);

    obtenerTablaOferta();

    include_once("componentes/UpdateOferta.php");

    UpdateModalOferta();

    echo "<script>";
    echo "var allowedExtensions = /.pdf$/i;";
    echo "</script>";

  }



  ?>

  <?php

  if ($_POST['CONFIG'] == "Videos") {

    include_once("componentes/AgregarModalVideos.php");

    AgregarModal($_POST['CONFIG']);

    obtenerTablaVideos();

    include_once("componentes/UpdateVideo.php");

    UpdateModalVideo();
  }



  ?>

  <?php

  if ($_POST['CONFIG'] == "Fotos") {

    include_once("componentes/AgregarModalFotos.php");

    AgregarModal($_POST['CONFIG']);

    obtenerTablaFotos();

    include_once("componentes/UpdateFoto.php");

    UpdateModalFoto();

    echo "<script>";
    echo "var allowedExtensions = /.jpg$/i;";
    echo "</script>";

  }



  ?>

  <?php

  if ($_POST['CONFIG'] == "Becas") {

    include_once("componentes/AgregarModalBecas.php");

    AgregarModal($_POST['CONFIG']);

    obtenerTablaBecas();

    include_once("componentes/UpdateBeca.php");

    UpdateModalBeca();

    echo "<script>";
    echo "var allowedExtensions = /.pdf$/i;";
    echo "</script>";

  }



  ?>





  <?php

  if ($_POST['CONFIG'] == "Conferencias") {

    include_once("componentes/AgregarModalConferencias.php");

    AgregarModal($_POST['CONFIG']);

    obtenerTablaConferencias();

    include_once("componentes/UpdateConferencia.php");

    UpdateModalConferencia($_POST['CONFIG']);
  }



  ?>

</div>











<script type="text/javascript">
  rvoeAux = "";

  function mostrarRVOE() {
    var checkBox = document.getElementById("defaultCheck1");
    var text = document.getElementById("rvoe");

    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = rvoeAux;
    } else {
      rvoeAux = text.value;
      text.style.display = "none";
      text.value = "NA";
    }
  }

  rvoeAuxU = "";

  function mostrarRVOEU() {
    var checkBox = document.getElementById("defaultCheck2");
    var text = document.getElementById("rvoeU");
    if (checkBox.checked == true) {
      text.style.display = "block";
      text.value = rvoeAuxU;
    } else {
      rvoeAuxU = text.value;
      text.style.display = "none";
      text.value = "NA";
    }
  }

  function mostrareditofertas(pVigencia, id, carrera, archivo, seccion, rvoe, idSeccion)

  {

    document.getElementById('IDoferta').value = id;

    document.getElementById('idSeccion').value = idSeccion;

    document.getElementById('updatename').value = carrera;

    document.getElementById('texto2').value = archivo;

    document.getElementById('pVigenciaU').value = pVigencia;

    setSelectedValue(document.getElementById('SelectboxU'), seccion);

    if (document.getElementById("SelectboxU").length > 0) {

      document.getElementById("SelectboxU").style.display = 'block';

    }

    if (rvoe != "NA") {
      document.getElementById('rvoeU').value = rvoe;
      document.getElementById('rvoeU').style.display = "block";
      document.getElementById('defaultCheck2').checked = true;
    }
  }

  function mostrareditVideo(id, titulo, link, seccion)

  {

    document.getElementById('IDVID').value = id;

    document.getElementById('updatename').value = titulo;

    document.getElementById('updateurl').value = link;

    setSelectedValue(document.getElementById('SelectboxU'), seccion);

    if (document.getElementById("SelectboxU").length > 0) {

      document.getElementById("SelectboxU").style.display = 'block';

    }

  }



  function mostrareditFoto(id, pie, link, seccion)

  {

    document.getElementById('IDfoto').value = id;

    document.getElementById('updatename').value = pie;

    document.getElementById('texto2').value = link;

    setSelectedValue(document.getElementById('SelectboxU'), seccion);

    if (document.getElementById("SelectboxU").length > 0) {

      document.getElementById("SelectboxU").style.display = 'block';

    }



  }

  function mostrareditBecas(id, nombre, link)

  {

    document.getElementById('IDbeca').value = id;

    document.getElementById('updatename').value = nombre;

    document.getElementById('texto2').value = link;

  }



  function mostrareditConf(id, nombre, link) {

    document.getElementById('IDconfe').value = id;

    document.getElementById('updatename').value = nombre;

    document.getElementById('updateurl').value = link;

  }



  function showContent() {

    element = document.getElementById("content");

    check = document.getElementById("check");

    Selectbox = document.getElementById("Selectbox");

    if (check.checked) {

      element.style.display = 'block';

      document.getElementById('CrearSeleccion').value = 1;

      Selectbox.style.display = 'none';

    } else {

      element.style.display = 'none';



      document.getElementById('CrearSeleccion').value = 0;

      if (Selectbox.length > 0)

        Selectbox.style.display = 'block';

    }



  }



  function showContentU() {

    element = document.getElementById("contentU");

    check = document.getElementById("checkU");

    Selectbox = document.getElementById("SelectboxU");

    if (check.checked) {

      element.style.display = 'block';

      document.getElementById('CrearSeleccionU').value = 1;

      Selectbox.style.display = 'none';

    } else {

      element.style.display = 'none';



      document.getElementById('CrearSeleccionU').value = 0;

      if (Selectbox.length > 0)

        Selectbox.style.display = 'block';

    }



  }



  function processSelectedFiles(fileInput) {

    var fileInput = document.getElementById('archivo');

    var filename = fileInput.files[0].name;

    var filePath = fileInput.value;

    if (!allowedExtensions.exec(filePath)) {
     swal("Error", "Seleccione un documento valido","warning");
      fileInput.value = '';
      document.getElementById('texto1').value = '';
    } else {
      document.getElementById('texto1').value = filename;
    }

  }



  function processSelectedFilesU(fileInput) {

    var fileInput = document.getElementById('archivoupdate');

    var filename = fileInput.files[0].name;

    var filePath = fileInput.value;

    if (!allowedExtensions.exec(filePath)) {
      
       swal("Error", "Seleccione un documento valido","warning");
      fileInput.value = '';
      document.getElementById('texto2').value = '';
    } else {
      document.getElementById('texto2').value = filename;
    }


  }

  function setSelectedValue(selectObj, valueToSet) {

    for (var i = 0; i < selectObj.options.length; i++) {

      if (selectObj.options[i].text == valueToSet) {

        selectObj.options[i].selected = true;

        return;

      }

    }

  }


  var uploadField = document.getElementById("archivo");

  uploadField.onchange = function() {
    if (this.files[0].size > 8388608) {
      
      swal("Error", "El archivo seleccionado es demasiado grande.","warning");
      this.value = "";
    } else {
      processSelectedFiles("alo");
    };
  };

  var uploadField2 = document.getElementById("archivoupdate");

  uploadField2.onchange = function() {
    if (this.files[0].size > 8388608) {
swal("Error", "El archivo seleccionado es demasiado grande.","warning");
      this.value = "";
    } else {
      processSelectedFilesU("alo");
    };
  };

  function valida(form) {
    aux = form.elements["urlvideo"].value;
    var valido = true;
    console.log(aux);
    console.log(aux.trim());
    if (aux.trim() == "") {
      swal("Error", "Ingrese URL valida.","warning");
      valido = false;
    }
    return valido;
  }

  function validaU(form) {
    aux = form.elements["updateurl"].value;
    var valido = true;
    console.log(aux);
    console.log(aux.trim());
    if (aux.trim() == "") {
   swal("Error", "Ingrese URL valida.","warning");
      valido = false;
    }
    return valido;
  }

</script>