<!doctype html>
<html lang="en">
<head>
  <title>Municipio</title>
  <!-- Required meta tags -->
  <link rel="shortcut icon" href="https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--  CSS -->
  <link rel="stylesheet" href="css/Listado.css">
   <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/prism.css">
  <link rel="stylesheet" href="SeccionAdministrativa/css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
    ::-webkit-scrollbar {
    display: none;
}
  </style>
</head>
<body>
  <?php
  if ($_GET['municipio']!=000) {
   include_once("Componentes/header.php");
  }
 
  ?>

  <div class="container-fluid">
  </div>
  <!--Titulo municipio-->

  <div class="container buscador">
    <div class="row justify-content-center">
      <input type="hidden" value="<?php echo $_GET['municipio'] ?>" id="municipio">
      <img  class="  float-left img-responsive">


    </div>

    

   <!--Barra de busqueda-->
   <div class="row  justify-content-center " >
      <div class="form-group col-12">
        <input type="text" class="form-control" name="" id="txt-busqueda" aria-describedby="helpId" placeholder="Nombre Universidad">
      </div>
    </div>
    <!--Filtros-->
<div class="row d-flex justify-content-around">
    <div class="btn-group h-25 mt-1">

      <button type="button" class="btn btn-info dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Filtrar por tipo de instituci&oacute;n
      </button>
      <div class="dropdown-menu categort_list">
        <a class="dropdown-item category_item" href="#" category="1">Privada</a>
        <a class="dropdown-item category_item" href="#" category="0">Pública</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item category_item " href="#" category="all">Todo</a>
      </div>
    </div>
    <div class="mt-1  ">
   <?php
   
         include_once("Tareas/ConsultarCategorias.php");
  loadselect2();
?>
</div>
<div class="my-auto w-50" id="carreras">
<?php
  include_once("Tareas/ConsultarCarreras.php");
  loadselect($_GET['municipio']);

  ?>
</div>
</div>

<span id="active-filter" class="mx-4"></span>

    <!-- Terminan filtros-->
  </div>
  <br>

  <!--Listado universidades-->

  <div class="container" id="Listado">

  </div>
  </br>
  </br>
  </br>
  <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
  <script>
    function logElementEvent(eventName, element) {
      console.log(Date.now(), eventName, element.getAttribute("data-src"));
    }
    var callback_enter = function(element) {
      logElementEvent("🔑 ENTERED", element);
    };
    var callback_exit = function(element) {
      logElementEvent("🚪 EXITED", element);
    };
    var callback_loading = function(element) {
      logElementEvent("⌚ LOADING", element);
    };
    var callback_loaded = function(element) {
      logElementEvent("👍 LOADED", element);
    };
    var callback_error = function(element) {
      logElementEvent("💀 ERROR", element);
      element.src =
        "https://feriavirtual-upqroo.ozelot.it/img_defaults/feria_app_icon.png";
    };
    var callback_finish = function() {
      logElementEvent("✔️ FINISHED", document.documentElement);
    };
    var callback_cancel = function(element) {
      logElementEvent("🔥 CANCEL", element);
    };
    var lazyLoadInstance = new LazyLoad({

      threshold: 0,
      // Assign the callbacks defined above
      callback_enter: callback_enter,
      callback_exit: callback_exit,
      callback_cancel: callback_cancel,
      callback_loading: callback_loading,
      callback_loaded: callback_loaded,
      callback_error: callback_error,
      callback_finish: callback_finish
    });
 
    $(document).ready(function() {
          if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            console.log("select ocultado - version movil");
  $("#elegircarrera").hide();


}


$('#elegircategoria').on('change', function() {
  if(this.value!="Categoria"){
   $("#carreras").hide();
   $(".search-choice-close").trigger("click");
    var cat= this.value;
   $(".Uni").hide();

if (statusfilter == "all"){

  $('.'+cat).css("transform", "scale(1)");
     $('.'+cat).show();
}
else{
$('.'+cat+'[category="' + statusfilter + '"]').css("transform", "scale(1)");
   $('.'+cat+'[category="' + statusfilter + '"]').show();
}

  }else{

     $(".Uni").hide();
       $(".Uni").css("transform", "scale(1)");
  $(".Uni").show();
  $("#carreras").show();
    $("#active-filter").text("");
    statusfilter = "all";
  }
 
});

$('.chosen-select').chosen().change(function(){
 $(".Uni").hide();
  var arreglo = $(this).val();
const arrayuni = arreglo.filter(function(ele , pos){
    return arreglo.indexOf(ele) == pos;
}) 

if (arrayuni.length==0) 
{
  $(".Uni").css("transform", "scale(1)");
  $(".Uni").show();
  $("#active-filter").text("");
  statusfilter = "all";
}

   if (statusfilter == "all" && arrayuni.length>0) {
   
      for (i = 0; i < arrayuni.length; i++) {
   $('.Uni[title="' + arrayuni[i] + '"]').css("transform", "scale(1)");
   $('.Uni[title="' + arrayuni[i] + '"]').show();
 }
   }else if(statusfilter != "all" && arrayuni.length>0 ){
 
   for (i = 0; i < arrayuni.length; i++) {
   $('.Uni[category="' + statusfilter + '"][title="' + arrayuni[i] + '"]').css("transform", "scale(1)");
   $('.Uni[category="' + statusfilter + '"][title="' + arrayuni[i] + '"]').show();
   } 
   }


  
});
        });
  </script>
  <script src="js/Listado.js"></script>
  <script src="js/prism.js"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="js/chosen.jquery.js" type="text/javascript">

  </script>
  <script src="js/init.js" type="text/javascript" charset="utf-8"></script>
</body>
<!-- Footer -->

<?php
 if ($_GET['municipio']!=000) {
  include_once("Componentes/footer.php");
  }

?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


</html>