<style>
  footer {
    background-color: black;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 40px;
    color: white;
  }

  body {
    margin: 0;
    margin-bottom: 40px;
  }

  html {
    min-height: 100%;
    position: relative;
  }

  /*Cookie Consent Begin*/
  #cookieConsent {
    background-color: rgba(20, 20, 20, 0.8);
    min-height: 26px;
    font-size: 14px;
    color: #ccc;
    line-height: 26px;
    padding: 8px 0 8px 30px;
    font-family: "Trebuchet MS", Helvetica, sans-serif;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    z-index: 9999;
  }

  #cookieConsent a {
    color: #4B8EE7;
    text-decoration: none;
  }

  #closeCookieConsent {
    float: right;
    display: inline-block;
    cursor: pointer;
    height: 20px;
    width: 20px;
    margin: -15px 0 0 0;
    font-weight: bold;
  }

  #closeCookieConsent:hover {
    color: #FFF;
  }

  #cookieConsent a.cookieConsentOK {
    background-color: #F1D600;
    color: #000;
    display: inline-block;
    border-radius: 5px;
    padding: 0 20px;
    cursor: pointer;
    float: right;
    margin: 0 60px 0 10px;
  }

  #cookieConsent a.cookieConsentOK:hover {
    background-color: #E0C91F;
  }

  /*Cookie Consent End*/
</style>
<footer class="bg-info">

  <!-- Grid container -->
  <div class="container-fluid p-4 bg-info">

    <!--Grid row-->
    <div class="row">
      <!--Grid column-->

      <div class="col-lg-3 col-md-6  mb-4 mb-md-0 ">
        <a class="navbar-brand align-items-start">
 <strong class="fs-3">SECRETARÍA DE EDUCACIÓN</strong> </a>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
 <h6 class="text-uppercase">   ¿Qu&eacute; es la feria Virtual?</h6>
      <h6 class=" mb-0 mr-4" align="justify">
El gobierno del Estado de
Quintana Roo, a través de la
Secretaría de Educación y la
Comisión Estatal para la
Planeación de la Educación
Superior (COEPES), realizan
un evento virtual en el que se
promociona la oferta
educativa de más de 60
instituciones para
estudiantes de educación
media superior e interesados
en cursar estudios de Nivel
Técnico Superior, Licenciatura
o Posgrado.</h6>
  <!--
        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-light">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-light">Link 4</a>
          </li>
        </ul>-->
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
       

        <ul class="list-unstyled mb-0" >
          <li>
            <a href="#!" class="text-light">Aviso de Privacidad</a>
          </li>
          <li>
            <a href="#!" class="text-light">T&eacute;rminos y Condiciones</a>
          </li>
          <li>
            <a href="#!" class="text-light">Mapa de Sitio</a>
          </li>
          <li>
            <a href="https://qroo.gob.mx/seq" class="text-light">Ir a la SEQ</a>
          </li>
          <li>
            <a href="https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa" class="text-light">Acceso administracion</a>
          </li>
                    <li>
            <a href="https://feriavirtual-upqroo.ozelot.it/SeccionAdministrativa" class="text-light">Acceso Universidades</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <?php
      if (isset($_COOKIE['Registrado'])) {

        if (isset($_SESSION['conVisitas'])) {
          echo '<div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
          <h6 class="text-uppercase">Visitas al sitio</h6>
  
          <ul class="list-unstyled mb-0 align-self-center">
            <li>
            <a title="contador de visitas ">
            <h3 id="count">0</h3>
            </a>
             </li>
            
          </ul>
        </div>
        <script>
        const contador=document.getElementById("count");
        contadorvisitas();
        
        function contadorvisitas()
        {
          fetch("https://api.countapi.xyz/get/quantumuniversidades/5cb1a953-57ef-425d-960b-0e691d8dc5f8/")
          .then(res=>res.json())
          .then(res=>{
          contador.innerHTML = res.value;
          })
        }
        </script>';
        } else {
          echo '<div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
          <h6 class="text-uppercase">Visitas al sitio</h6>
  
          <ul class="list-unstyled mb-0 align-self-center">
            <li>
            <a title="contador de visitas ">
               <h3 id="count">0</h3>
            </a>
             </li>
            
          </ul>
        </div>
        <script>
        const contador=document.getElementById("count");
        contadorvisitas();
        
        function contadorvisitas()
        {
          fetch("https://api.countapi.xyz/update/quantumuniversidades/5cb1a953-57ef-425d-960b-0e691d8dc5f8/?amount=1")
          .then(res=>res.json())
          .then(res=>{
          contador.innerHTML = res.value;
          })
        }
        </script>';
          $_SESSION['conVisitas'] = true;
        }
      } else {
        echo '<div class="col-lg-3 col-md-6 mb-4 mb-md-0 ">
        <h6 class="text-uppercase">Visitas al sitio</h6>

        <ul class="list-unstyled mb-0 align-self-center">
          <li>
          <a title="contador de visitas ">
             <h3 id="count">0</h3>
          </a>
           </li>
          
        </ul>
      </div>
      <script>
      const contador=document.getElementById("count");
      contadorvisitas();
      
      function contadorvisitas()
      {
        fetch("https://api.countapi.xyz/get/quantumuniversidades/5cb1a953-57ef-425d-960b-0e691d8dc5f8/")
        .then(res=>res.json())
        .then(res=>{
        contador.innerHTML = res.value;
        })
      }
      
      </script>';
      }

      ?>

      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

</footer>