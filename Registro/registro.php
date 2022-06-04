<form form="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
  <h1 class="text-center my-4">Formulario de Registro</h1>
  <h4 class="text-center my-4">Datos del Coordinador Institucional de la Feria</h4>
  <hr>
  <div class="form-row">
    <div class="col-12 mb-3">
      <div class="row">
        <label for="responsablename" class="col-12 col-md-3">Nombre(s)</label>
        <input type="text" class="form-control col-12 col-md-9" id="responsablename" name="responsablename" placeholder="Nombre del responsable" required>
      </div>
    </div>
    <div class="col-12 mb-3">
      <div class="row">
        <label for="APResponsable" class="col-12 col-md-3">Apellido P.</label>
        <input type="text" class="form-control col-12 col-md-9" id="APResponsable" name="APResponsable" placeholder="Apellido Paterno" required>
      </div>
    </div>
    <div class="col-12 mb-3">
      <div class="row">
        <label for="AMResponsable" class="col-12 col-md-3">Apellido M.</label>
        <input type="text" class="form-control col-12 col-md-9" id="AMResponsable" name="AMResponsable" placeholder="Apellido Materno" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="telfijo" class="col-12 col-md-3">Tel&eacute;fono fijo</label>
        <input type="text" class="form-control col-12 col-md-9" id="telfijo" name="telfijo" placeholder="N&uacute;mero del responsable" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="numeromovil" class="col-12 col-md-3">N&uacute;mero Móvil</label>
        <input type="text" class="form-control col-12 col-md-9" id="numeromovil" name="numeromovil" placeholder="N&uacute;mero del responsable" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="correoR" class="col-12 col-md-3">Correo Electr&oacute;nico</label>
        <input type="text" class="form-control col-12 col-md-9" id="correoR" name="correoR" placeholder="Correo Electr&oacute;nico completo" aria-describedby="inputGroupPrepend21" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="usuarionam" class="col-12 col-md-3">Usuario</label>
        <input type="text" class="form-control col-12 col-md-9" id="usuarionam" name="usuarionam" placeholder="Escriba el nombre de su usuario que usará para la feria" aria-describedby="inputGroupPrepend21" required>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="contra" class="col-12 col-md-3">Contraseña</label>
        <input type="password" class="form-control col-12 col-md-8" id="contra" name="contra" placeholder="Escriba la contraseña para su usuario" aria-describedby="inputGroupPrepend21" required>
        <input id="myChbx" type='checkbox' onclick="setVisible('contra')" class="btn btn-primary"><i class="fas fa-low-vision"></i>
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <div class="row">
        <label for="correoCon" class="col-12 col-md-3">Confirmar Correo</label>
        <input type="text" class="form-control col-12 col-md-9" id="correoCon" name="correoCon" placeholder="Confirme su Correo Electr&oacute;nico completo" aria-describedby="inputGroupPrepend21" required>
      </div>
    </div>

    <!------------------------------------------------------ Datos de la universidad ----------------------------------------------------------->

    <h4 class="text-center my-4">Datos de la universidad</h4>
    <hr>
    <div class="form-row">
      <div class="col-12 mb-3">
        <div class="row">
          <label for="uniname" class="col-12 col-md-3">Instituci&oacute;n</label>
          <input type="text" class="form-control col-12 col-md-9" id="uniname" name="uniname" placeholder="Nombre de la Instituci&oacute;n" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="Tinstituto" class="col-12 col-md-3">Tipo de Instituci&oacute;n</label>
          <select class="browser-default custom-select form-control col-12 col-md-9" id="Tinstituto" name="Tinstituto" required>
            <option selected>Elija su tipo de universidad</option>
            <option value="0">P&uacute;blica</option>
            <option value="1">Privada</option>
          </select>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="uniname" class="col-12 col-md-3">Clave Centro de Trabajo</label>
          <input type="text" class="form-control col-12 col-md-9" id="ctraba" name="ctraba" placeholder="Clave del centro de trabajo" required>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div class="row">
          <label for="correoUni" class="col-12 col-md-3">Correo Electr&oacute;nico</label>
          <input type="text" class="form-control col-12 col-md-9" id="correoUni" name="correoUni" placeholder="Correo Electr&oacute;nico de la universidad" required>
        </div>
      </div>

      <!---------------------------------------- Direccion ---------------------------------------------------------->

      <div class="col-12 mb-3">
        <div class="row">
          <label for="Selectbox" class="col-12 col-md-3">Estado</label>
          <select class="browser-default custom-select form-control col-12 col-md-9" id="SelectboxEs" name="estado" onchange="recargarlista(this.value);">
            <?php getEstadosBox(); ?>
          </select>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for='slctBox' class='col-12 col-md-3'>Municipio</label>
          <select class='browser-default custom-select form-control col-12 col-md-9' id='slctBox' name='municipio'>
          </select>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="calleD" class="col-12 col-md-3">Calle</label>
          <input type="text" class="form-control col-12 col-md-9" id="calleD" name="calleD" placeholder="Calle donde se encuentra" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="numeroE" class="col-12 col-md-3">N° Exterior</label>
          <input type="text" class="form-control col-12 col-md-9" id="numeroE" name="numeroE" placeholder="Numero de Exterior si tiene" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="numeroI" class="col-12 col-md-3">N° Interior</label>
          <input type="text" class="form-control col-12 col-md-9" id="numeroI" name="numeroI" placeholder="Numero de Interior si tiene" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="coloniavalue" class="col-12 col-md-3">Colonia</label>
          <input type="text" class="form-control col-12 col-md-9" id="coloniavalue" name="coloniavalue" placeholder="Colonia/Fraccionamiento donde se encuentra" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="ciudadvalue" class="col-12 col-md-3">Ciudad</label>
          <input type="text" class="form-control col-12 col-md-9" id="ciudadvalue" name="ciudadvalue" placeholder="Ciudad donde se encuentra" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="CPdato" class="col-12 col-md-3">C&oacute;digo Postal</label>
          <input type="text" class="form-control col-12 col-md-9" id="CPdato" name="CPdato" placeholder="C&oacute;digo Postal" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <div class="row">
          <label for="telefonovalue" class="col-12 col-md-3">Tel&eacute;fono</label>
          <input type="text" class="form-control col-12 col-md-9" id="telefonovalue" name="telefonovalue" placeholder="Tel&eacute;fono de la Instituci&oacute;n" required>
        </div>
      </div>


      <!---------------------- Carreras -------------------------->
      <div class="container text-center">
        <h5 class="text-center my-4">Oferta(s) Educativa(s)</h5>
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">Carrera</th>
              <th scope="col">Nivel Educativo</th>
              <th scope="col">//</th>
              <th scope="col" id="txtregistro">RVOE/DPG</th>
              <th scope="col" id="ped">Periodo</th>
            </tr>
          </thead>
          <tbody id="listado">
            <tr>
              <td><input class="form-control col-12 col-md-12" type="text" name="carrera[]" id="carrera" placeholder="Nombre de la carrera" required /></td>
              <td><select class="browser-default custom-select form-control col-12 col-md-9" id="lvlEdu[]" name="nvlEdu[]">
                  <?php getNivelEducativo(); ?></select></td>
              <td><input type="checkbox" class="col-12 col-md-4 institutocheck"  style="display:none"  checked onclick="return false;" id="prov[]" name="prov0" value=1 >
                <input type="hidden" id="rp[]" name="check[]" value=0>
              </td>
              <td><input class="form-control col-12 col-md-9 " type="text" name="rvoe[]" id="rvoe[]"  placeholder="Dato solicitado" /></td>
              <td><input class="form-control col-12 col-md-11 RVOETEXT" type="text" name="periodo[]" id="periodo[]"  placeholder="Periodo de tiempo" /></td>
            </tr>
          </tbody>
        </table>
        <input class="btn btn-primary btn-sm" type="button" id="add_field" value="+">
      </div>


    </div>
    <hr>
    <!--------------------------------------------------------- Datos de la universidad fin -------------------------------------------------->

    <!---------------------- No soy un robot -------------------------->
    <?php
    function codigo_captcha()
    {
      $k = "";
      $datos = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      $max = strlen($datos) - 1;
      for ($i = 0; $i < 5; $i++) {
        $s = rand(0, strlen($datos) - 1);
        $k .= $datos[$s];
      }

      return $k;
    }
    ?>
    <center class="col">
      <div class="container">
        <div class="form-group">
          <input type="text" class="form-control col-md-2" style="border-radius: 5px;font-size: 20px;text-align: center;" id="captcha" name="captcha" value=<?php echo codigo_captcha(); ?> readonly required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control col-md-4" id="copiatxt" name="copiatxt" placeholder="Escriba lo que marca arriba" required>
        </div>
      </div>



      <!---------------------- No soy un robot  fin -------------------------->

      <div class="form-group text-center">
        <div class="custom-control custom-checkbox row">
          <input type="checkbox" class="custom-control-input" id="invalidCheck12" required>
          <label class="custom-control-label col-12 col-md-4" for="invalidCheck12">De acuerdo con los t&eacute;rminos y condiciones.</label>
        </div>
      </div>
      <button id="botonazo" class="btn btn-primary btn-sm" type="submit" name="enviando">Enviar</button>
    </center>
  </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  function setVisible(objetivo) {

    var obj = document.getElementById(objetivo);

    var type = obj.getAttribute('type') === 'password' ? 'text' : 'password';

    obj.setAttribute('type', type);

  }
  ///2022///
 $(document).on('change', '#Tinstituto', function(event) {
     console.log($("#Tinstituto option:selected").text());
     var tipo = $("#Tinstituto option:selected").text();
if (tipo == 'Pública') {

 $(".RVOETEXT").each(function(index) {
  $(this).val('NA');
$(this).hide();
 

  });
document.getElementById("txtregistro").innerHTML = "Acuerdo de Incorporación";
document.getElementById("ped").innerHTML = "";
} else if (tipo == 'Privada') {

 $(".RVOETEXT").each(function(index) {
 $(this).show();
 $(this).val('');
  });
 document.getElementById("txtregistro").innerHTML = "RVOE";
 document.getElementById("ped").innerHTML = "Periodo";
}
});
//////

</script>