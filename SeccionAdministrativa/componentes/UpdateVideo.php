<?php

function UpdateModalVideo(){

    echo '

    <!-- Modal -->

    <div class="modal fade bd-example-modal-xl" id="ModalUpdateVideo" tabindex="-1"

      role="dialog" aria-labelledby="myExtraLargeModalLabel"

      aria-hidden="true">

      <div class="modal-dialog modal-xl" role="document">

        <div class="modal-content container">

          <div class="modal-header ">

            <h5 class="modal-title text-center" id="EditarArchivoLabel">Editar Videos</h5>

            <button type="button" class="close" data-dismiss="modal"

              aria-label="Close">

              <span aria-hidden="true">&times;</span>

            </button>

          </div>

          <form action="';

      echo htmlspecialchars($_SERVER["PHP_SELF"]);

      echo '"    method="POST" onsubmit="return validaU(this)">
<br>
                <input type="hidden" class="form-control" id="IDVID" name="IDVID" placeholder="ID"/>

            <div class="form-group row">

              <label for="updatename" class="col-sm-2 col-form-label">T&iacute;tulo</label>

              <div class="col-sm-10">

                <input type="text" class="form-control" id="updatename" name="updatename" placeholder="T&iacute;tulo"/>

              </div>

            </div>

            <div class="form-group row">

              <label class="col-sm-2 col-form-label">Link del Video</label>

              <div class="col-sm-10">

            

                    <input type="text" class="form-control" name="updateurl" id="updateurl" placeholder="Es requerido un link a un video de YouTube" />

              </div>

            </div>

            <div class="form-group row">

              <label for="SelectboxU" class="col-sm-2 col-form-label">Secci&oacute;n</label>

              <div class="col-sm-10">

              ';

      ObtenerSeccionesVideos("SelectboxU");


      //el input de links tenia el nombre de archivos, cambiar de ser necesario

      echo '   

              </div>

            </div>

            <div class="form-group row">

              <div class="col-sm-12 d-flex justify-content-end">

                <button type="submit"  class="btn btn-success">Aceptar</button>

                <input type="hidden" name="CONFIG" value="Videos" />

                <input type="hidden" name="CONFIG_IMG" value="' . $_POST["CONFIG_IMG"] . '"/>

              </div>

            </div>

          </form>

        </div>

      </div>

    </div>';

}

?>