

<?php

function AgregarModal($config)

{

  echo '

<!-- Modal -->



<div class="modal fade " id="ModalAgregarpdf" tabindex="-1"

  role="dialog" aria-labelledby="myExtraLargeModalLabel"

  aria-hidden="true">

  <div class="modal-dialog " role="document">

    <div class="modal-content container">

      <div class="modal-header ">

      <br>

        <h5 class="modal-title text-center" id="EditarArchivoLabel">Prueba</h5>

          <button type="button" class="close" data-dismiss="modal"

            aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class=" row">

           <label for="inputname" class="col-sm-2 col-form-label">Actual</label>

            <div class="col-sm-10">

              <a href="facebook.com" id="urlUpdate" class="form-control-plaintext" style="word-wrap: break-word;" target="_blank">www.facebook.com</a>

            </div>

        </div>

        <form action="';

  echo htmlspecialchars($_SERVER["PHP_SELF"]);

  echo '"    method="POST">

        <br>

          <div class="form-group row">

            <label for="inputname" class="col-sm-2 col-form-label">Nuevo </label>

            <div class="col-sm-10">

              <input type="text" class="form-control" id="inputname" name="inputname" value=""

                placeholder="Nuevo Link o N&uacute;mero de Contacto"/>

            </div>

          </div>
        

        <div class="form-group row">

          <div class="col-sm-12 d-flex justify-content-end">

            <input type="hidden" id="IdRedSocial" name="IdRedSocial" value=""/>

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