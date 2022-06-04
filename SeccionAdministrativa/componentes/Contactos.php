<?php

$opciones = array(

    "Facebook", 
    "Whatsapp", 
    "Instagram", 
    "Twitter", 
    "P&aacute;gina Web"

);



$opcionesID = array(

    1, 
    2, 
    3, 
    4, 
    5

);



$imgOpciones = array(

    "img/contactos/facebook.svg", 
    "img/contactos/whatsapp.svg", 
    "img/contactos/instagram.svg", 
    "img/contactos/twitter.svg", 
    "img/contactos/web.svg"

);

$i = 0;

while ($i < count($opciones)) {



    if ($i == 0) {

        echo '

   <!-- inicio row-->

<div class="row">';

    }

    echo '

    <!-- inicio col' . $opciones[$i] . '-->

    <div class="col-sm">

          <!--inicio Card -->

          <div class="card text-white bg-info text-center">

                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalAgregarpdf" 
                onclick=\'mostrarRed('.$opcionesID[$i].', "' . $opciones[$i] . '", "' . getRecurso($opcionesID[$i]) . '")\'
                VALUE="' . $opciones[$i] . '">

                    <!-- Card content -->

                    <div class="card-body">

                   

                        <input type="hidden" name="CONFIG" value="' . $opciones[$i] . '" />

                        <input type="hidden" name="CONFIG_IMG" value="' . $imgOpciones[$i] . '"/>

                         <img src="' . $imgOpciones[$i] . '" class="card-img-top" alt="...">

                        <hr class="mb-4">

                        <p class="card-text center">' . $opciones[$i] . '</p>



                    </div>

                </button>

            </div>

              <!-- Card -->

    </div>

      <!-- fin col -->

 

 ';



    $i++;

    if ($i == 5 ) {

        echo '</div>

    <hr class="mb-4">

    <hr class="mb-4">

    <!-- fin row -->  

    ';

    }

}



echo '

<!-- inicio row-->

<div class="row">

 <!-- inicio col Telefono-->

     <div class="col-sm">

       <!--inicio Card -->

        <div class="card text-white bg-info text-center">

             <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalAgregarpdf" onclick=
             \'mostrarRed("tel" , "T&eacute;lefono", "' . getTelefono() . '")\'
             VALUE="Telefono">

                 <!-- Card content -->

                 <div class="card-body">


                     <input type="hidden" name="CONFIG" value="Telefono" />

                     <input type="hidden" name="CONFIG_IMG" value="img/contactos/telefono.svg"/>

                    <img src="img/contactos/telefono.svg" class="card-img-top" alt="...">

                     <hr class="mb-4">

                     <p class="card-text center">T&eacute;lefono</p>


                 </div>

             </button>

         </div>

           <!-- Card -->
    </div>

 <!-- inicio col Correo Electronico-->

     <div class="col-sm">

       <!--inicio Card -->

        <div class="card text-white bg-info text-center">

             <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalAgregarpdf" onclick=
             \'mostrarRed("ce" , "Correo Electr&oacute;nico", "' . getCE() . '")\'
             VALUE="Correo Electrónico">

                 <!-- Card content -->

                 <div class="card-body">


                     <input type="hidden" name="CONFIG" value="Correo_Electrónico" />

                     <input type="hidden" name="CONFIG_IMG" value="img/contactos/email.svg"/>

                    <img src="img/contactos/email.svg" class="card-img-top" alt="...">

                     <hr class="mb-4">

                     <p class="card-text center">Correo Electrónico</p>


                 </div>

             </button>

         </div>

           <!-- Card -->
    </div>

</div>

   <!-- fin col -->



';

