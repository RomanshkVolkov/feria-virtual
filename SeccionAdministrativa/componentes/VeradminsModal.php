<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Datos del usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     
      <div class="modal-body mx-3">
      <form action="Tareas/ConsultasSA.php" method="POST">
        <div class="form-row">
          <div class="col-12 mb-3">
            <div class="row">
              <label for="nombre" class="col-12 col-md-3">Nombre(s)</label>
              <input type="text" class="form-control col-12 col-md-9" id="nombre" placeholder="Nombre del responsable"
                name="nombre" require>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="row">
              <label for="apellidoP" class="col-12 col-md-3">Apellido paterno</label>
              <input type="text" name="ap" class="form-control col-12 col-md-9" id="apellidoP" placeholder="Apellido paterno"
              require>
            </div>
          </div>
          <div class="col-12 mb-3">
            <div class="row">
              <label for="apellidoME" class="col-12 col-md-3">Apellido materno</label>
              <input type="text"  name="am" class="form-control col-12 col-md-9" id="apellidoME" placeholder="Apellido materno"
              require>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <label for="telefono" class="col-12 col-md-3">T&eacute;lefono</label>
              <input type="text"  name="telefono" class="form-control col-12 col-md-9" id="telefono" placeholder="T&eacute;lefono del responsable"
              require>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <label for="celular" class="col-12 col-md-3">Celular</label>
              <input type="text"  name="celular" class="form-control col-12 col-md-9" id="celular" placeholder="Celular del responsable"
              require>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <label for="tipo" class="col-12 col-md-3">Tipo</label>
              <select  name="tipo"  class="form-control col-12 col-md-9" id="tipo">
                  <option value="1" selected>Supervisor</option>
                  <option value="0" >Super administrador</option>
              </select>
              
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="row">
              <label for="correo" class="col-12 col-md-3">Correo Electr&oacute;nico</label>
              <div class=" col-12 col-md-9">
                <div class="row">
                
          
                    <a class="input-group-text col-1 my-1 justify-content-center" id="correolabel"  target="_blank">  <span  id="inputGroupPrepend21">@</span></a>
                    <input  name="correo"  type="text" class="form-control col-11 my-1"  id="correo" placeholder="Correo Electr&oacute;nico"
                      aria-describedby="inputGroupPrepend21" required>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <input type="hidden" name="emsg" value="usuario editado">
            <input type="hidden" name="idm" id="idm" value="0">
            <input type="submit" class="btn btn-success btn-rounded  waves-effect" value="Aplicar cambios">
            <hr>
          </div>
      
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Datos del usuario a agregar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form action="Tareas/ConsultasSA.php" method="POST">
          <div class="form-row">
            <div class="col-12 mb-3">
              <div class="row">
                <label for="nombre1" class="col-12 col-md-3">Nombre(s)</label>
                <input  name="nombre" type="text" class="form-control col-12 col-md-9" id="nombre1"
                placeholder="Nombre del responsable">
              </div>
            </div>
            <div class="col-12 mb-3">
              <div class="row">
                <label for="apellidoP1" class="col-12 col-md-3">Apellido paterno.</label>
                <input  name="ap" type="text"  class="form-control col-12 col-md-9" id="apellidoP1" placeholder="Apellido Paterno">
              </div>
            </div>
            <div class="col-12 mb-3">
              <div class="row">
                <label for="apellidoM1" class="col-12 col-md-3">Apellido materno</label>
                <input  name="am" type="text" class="form-control col-12 col-md-9" id="apellidoM1" placeholder="Apellido Materno">
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="row">
                <label for="telefono1" class="col-12 col-md-3">T&eacute;lefono</label>
                <input type="text" class="form-control col-12 col-md-9" id="telefono1"
                name="telefono" placeholder="T&eacute;lefono del responsable">
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="row">
                <label for="celular1" class="col-12 col-md-3">Celular</label>
                <input type="text" class="form-control col-12 col-md-9" id="celular1"
                name="celular"  placeholder="Celular del responsable" required>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="row">
                <label for="tipo1" class="col-12 col-md-3">Tipo</label>
                <select  name="tipo"  class="form-control col-12 col-md-9" id="tipo1">
                  <option value="1" selected>Supervisor</option>
                  <option value="0" >Super administrador</option>
                </select>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="row">
                <label for="correo1" class="col-12 col-md-3">Correo Electr&oacute;nico</label>
                <div class=" col-11 col-md-9">
                  <div class="row">
                    <span class="input-group-text col-1 my-1 justify-content-center" >@</span>
                    <input  name="correo"  type="text" class="form-control col-11 my-1" id="correo1" placeholder="Correo Electr&oacute;nico"
                      aria-describedby="inputGroupPrepend21" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <input type="hidden" name="msg" value="usuario añadido">
            <input type="submit" class="btn btn-success btn-rounded  waves-effect" value="Agregar usuario">
            <hr>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>