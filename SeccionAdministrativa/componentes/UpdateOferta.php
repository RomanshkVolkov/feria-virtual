<?php

function UpdateModalOferta()

{

  echo '

<!-- Modal -->

<div class="modal fade bd-example-modal-xl" id="ModalUpdateOferta" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl" role="document">

    <div class="modal-content container">
      
      <div class="modal-header ">

        <h5 class="modal-title text-center" id="EditarArchivoLabel">Editar Carrera</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <form action="'; echo htmlspecialchars($_SERVER["PHP_SELF"]); echo '" method="POST" enctype="multipart/form-data">
        <br>
        <input type="hidden" id="IDoferta" name="IDoferta"/>
        <input type="hidden" id="idSeccion" name="idSeccion"/>
        <div class="form-group row">

          <label for="updatename" class="col-sm-2 col-form-label">T&iacute;tulo</label>

          <div class="col-sm-10">

            <input type="text" class="form-control" id="updatename" name="updatename" placeholder="T&iacute;tulo de la carrera"/>

          </div>

        </div>

        <div class="form-group row">

          <label class="col-sm-2 col-form-label">
            Oferta Educativa
          </label>

          <div class="col-sm-10">

            <div class="file-field row">

              <label class="col-2 col-form-label btn btn-primary btn-sm ml-3" for="archivoupdate">
              
                Elegir archivo
              
              </label>

              <div class="col-9">

                <input type="file" onchange="processSelectedFilesU(this)" id="archivoupdate" name="archivoupdate" style="display: none;" accept=".pdf"/>

                <input class="custom-control-label form-control-plaintext"type="text" placeholder="Subir archivo (PDF)" id="texto2" readonly/>

              </div>

            </div>

          </div>

        </div>

        <div class="form-group row">

          <label for="SelectboxU" class="col-sm-2 col-form-label">
            Nivel Educativo
          </label>


          <div class="col-sm-10"> 
            <select class="form-control" id="SelectboxU" name="newseccionoferta">';
            $con = conexion10();
            $cons = "SELECT * FROM nivel_educativo;";
            $aux = mysqli_query($con, $cons);
            while ($res = mysqli_fetch_array($aux)) {
              echo "<option value='".$res['ID']."'>".$res['Nombre']."</option>";
            }

            echo '
            </select>

          </div>

        </div>
        
      
        <div class="form-group row ">

          <div class="form-check col-sm-2 ">
            <input class="mr-1" type="checkbox" onclick="mostrarRVOEU();" value="" id="defaultCheck2">
            <label for="rvoeU" class="col-form-label">
              RVOE o DGP
            </label>
          </div>

          <div class="col-sm-10">

            <input required style="display: none;" value="NA" type="text" class="form-control" id="rvoeU" name="rvoeU" placeholder="Reconocimiento de Validez Oficial de Estudios / Clave DGP"/>

          </div>

        </div>
      
        <div class="form-group row">

          <label for="pVigenciaU" class="col-sm-2 col-form-label">
            Periodo de Vigencia
          </label>

          <div class="col-sm-10">

            <input type="text" class="form-control" id="pVigenciaU" name="pVigenciaU" placeholder="Periodo de Vigencia"/>

          </div>

        </div>
          
        <div class="form-group row">

          <div class="col-sm-12 d-flex justify-content-end">

            <button type="submit" class="btn btn-success">Aceptar</button>

            <input type="hidden" name="CONFIG" value="Carreras" />

            <input type="hidden" name="CONFIG_IMG" value="' . $_POST["CONFIG_IMG"] . '"/>

          </div>

        </div>

      </form>

    </div>

  </div>

</div>
'
;

}
