<?php
function UpdateModalFoto()
{
  echo '
<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="ModalUpdateFoto" tabindex="-1"
  role="dialog" aria-labelledby="myExtraLargeModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content container">
      <div class="modal-header ">
        <h5 class="modal-title text-center" id="EditarArchivoLabel">Agregar Foto</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="';
  echo htmlspecialchars($_SERVER["PHP_SELF"]);
  echo '"method="POST" enctype="multipart/form-data">
  <br>
            <input type="hidden" class="form-control" id="IDfoto" name="IDfoto" placeholder="ID"/>
        <div class="form-group row">
          <label for="updatename" class="col-sm-2 col-form-label">Pie_foto</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="updatename" name="updatename" placeholder="Pie foto"/>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Foto</label>
          <div class="col-sm-10">
            <div class="file-field row">
              <label class="col-2 col-form-label btn btn-primary btn-sm ml-3"
                for="archivoupdate">Elegir archivo (JPG)</label>
              <div class="col-9">
                <input type="file" onchange="processSelectedFilesU(this)"
                  id="archivoupdate" name="archivoupdate" style="display: none;" accept="image/jpg"/>
                <input class="custom-control-label form-control-plaintext"type="text"
                  placeholder="Nombre archivo" id="texto2" readonly/>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="Selectbox" class="col-sm-2 col-form-label">Seccion</label>
          <div class="col-sm-10">
              ';
  //AQUI SE LLAMA AL METODO PARA OBTENER SECCIONES
  ObtenerSeccionesFotos("SelectboxU");
  echo '</select>
              </div>
            </div>
        <div class="form-group row">
          <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Aceptar</button>
            <input type="hidden" name="CONFIG" value="Fotos" />
            <input type="hidden" name="CONFIG_IMG" value="' . $_POST["CONFIG_IMG"] . '"/>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


';
}
