<?php 
session_start();

   if(!isset($_COOKIE['Registrado'])){
        if(isset($Es404)){
        }else if(!isset($Esbienvenida)){
              header("Location: Bienvenida.php");
          }
           
    }

?>
<!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar
        bg-info ">
        <a class="navbar-brand align-items-start" href="<?php  
                            echo 'index.php';
                          ?>">
                   <strong>SECRETARÍA DE EDUCACIÓN</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center " id="navbarSupportedContent">
            <div class=" align-items-start" >
                <ul class="navbar-nav mr-auto d-flex">


                </ul>
            </div>
            <!-- <div class="align-items-end ">
            <ul class="navbar-nav mr-auto d-flex">
                <li class="nav-item align-items-end">
                    <form class="d-flex ">
                        <input class="form-control flex-grow-1" type="search"
                            placeholder="Search" aria-label="Search" id="search">
                        <button class="btn btn-success" type="submit">Buscar</button>
                    </form>
                </li>
            </ul>
           </div>-->
            <hr>
        
        
            <div style="align-items: flex-end;">
                <ul class="navbar-nav mr-auto d-flex justify-content-end">
                                        <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" style="display: flex;" id="inicio" href="<?php  if(!isset($_COOKIE['Registrado'])){
                            echo 'Bienvenida.php';
                          }else{
                            echo 'index.php';
                          } ?>" target="_self">Inicio </a>
                    </li>
                    <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" style="display: flex;" id="Mapa" href="index.php#Bienvenida" target="_self" onclick="marcarMapa();">Universidades</a>
                    </li>
                    <!--<li class="nav-item align-items-end">
                        <a class="nav-link" href="<?php  if(!isset($_COOKIE['Registrado'])){
                            echo 'Bienvenida.php';
                          }else{
                            echo 'Conferencias.php';
                          } ?>" target="_self" id="conferencias">Conferencias</a>
                    </li>-->
                    <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" style="display: flex;" href="<?php  if(!isset($_COOKIE['Registrado'])){
                            echo 'Bienvenida.php';
                          }else{
                            echo 'TestVocacional.php';
                          } ?>" target="_self" id="Test">Test Vocacional</a>
                    </li>
                    <li class="nav-item align-items-end">
                        <a class="nav-link text-uppercase" href="#menu" target="_self" id="Test" style="display: flex;">Acceso a la feria</a>
                    </li>
                </ul>
            </div>

        </div>
         

    </nav>
    <br>
    <br>      
     <?php  
     

     if (isset($inicio)) {
        echo'
        <div class="Bienvenida text-center container-fluid">
            <div>
            <br>
                        <img src="./img_defaults/BANNER1.jpg" class="img-fluid" alt="Responsive image" style="width: 100% \9; height:auto; "><br><br>


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img_defaults/HORIZONTAL1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img_defaults/IMG1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img_defaults/IMG2.jpg" alt="Third slide">
    </div>
        <div class="carousel-item">
      <img class="d-block w-100" src="./img_defaults/IMG3.jpg" alt="Four slide">
    </div>
        <div class="carousel-item">
      <img class="d-block w-100" src="./img_defaults/IMG4.jpg" alt="Five slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

            </div>
        </div>';
   }


?>

</header>

<!--Main Navigation-->
<script>
    function marcarMapa() {
        var element = document.getElementById('Mapa');
        var element2 = document.getElementById("inicio");
        resetnav();
        element.classList.add("active");
        element2.classList.remove('active');

    }

    function resetnav() {
     //   var element1 = document.getElementById("conferencias");
        var element2 = document.getElementById("inicio");
        var element3 = document.getElementById("Test");
        var element4 = document.getElementById("Mapa");

            if (element2.classList.contains('active')) {
                // Has active in it
                element2.classList.remove('active');
            } else {
                if (element3.classList.contains('active')) {
                    // Has active in it
                    element3.classList.remove('active');
                } else {
                    if (element4.classList.contains('active')) {
                        // Has active in it
                        element4.classList.remove('active');
                    } else {
                        // No active :(
                    }
                }
            }
        
    }
  
</script>