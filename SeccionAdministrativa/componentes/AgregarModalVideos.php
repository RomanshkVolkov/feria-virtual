

<?php

function AgregarModal($config)

{

  echo '

<!-- Modal -->

<div class="modal fade bd-example-modal-xl" id="ModalAgregarpdf" tabindex="-1"

  role="dialog" aria-labelledby="myExtraLargeModalLabel"

  aria-hidden="true">

  <div class="modal-dialog modal-xl" role="document">

    <div class="modal-content container">

      <div class="modal-header ">

        <h5 class="modal-title text-center" id="EditarArchivoLabel">Agregar ' . $config . '</h5>

        <button type="button" class="close" data-dismiss="modal"

          aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <form action="';

  echo htmlspecialchars($_SERVER["PHP_SELF"]);

  echo '"    method="POST" onsubmit="return valida(this)">
<br>
        <div class="form-group row">

          <label for="inputname" class="col-sm-2 col-form-label">T&iacute;tulo</label>

          <div class="col-sm-10">

            <input type="text" class="form-control" id="inputname" name="inputname" placeholder="T&iacute;tulo"/>

          </div>

        </div>

        <div class="form-group row">

          <label class="col-sm-2 col-form-label">Link del Video</label>

          <div class="col-sm-10">

                <input type="text" class="form-control" name="urlvideo" id="urlvideo" placeholder="Es requerido un link a un video de YouTube" />

          </div>

        </div>

        <div class="form-group row">

          <label for="Selectbox" class="col-sm-2 col-form-label">Secci&oacute;n</label>

          <div class="col-sm-10">

          ';

  ObtenerSeccionesVideos("Selectbox");


  echo '     

          </div>

        </div>

        

        <div class="form-group row">

          <div class="col-sm-12 d-flex justify-content-end">

            <button type="submit" class="btn btn-success">Aceptar</button>

            <input type="hidden" name="CONFIG" value="' . $config . '" />

            <input type="hidden" name="CONFIG_IMG" value="' . $_POST["CONFIG_IMG"] . '"/>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>





';

}





?>