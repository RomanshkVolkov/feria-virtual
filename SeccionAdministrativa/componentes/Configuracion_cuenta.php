<?php

if (isset($_POST['telefono']) && isset($_POST['pass'])&& isset($_POST['nombre'])&& isset($_POST['apellidoP'])&& isset($_POST['apellidoM'])&& isset($_POST['telefono'])&& isset($_POST['celular'])&& isset($_POST['cpe'])) {

  confCuenta($_POST['telefono'], $_POST['pass'],$_POST['nombre'], $_POST['apellidoP'], $_POST['apellidoM'], $_POST['celular'], $_POST['cpe']);
}

$infoCuent = getInfoCuenta();

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

  <div class="form-group row">

    <label for="inputname" class="col-sm-2 col-form-label">Nombre de Usuario</label>

    <div class="col-sm-10">

      <input type="text" class="form-control" id="inputname" name="inputname" placeholder="Nombre de usuario" value="<?php echo $_SESSION['Nombre']; ?>" disabled>

    </div>

  </div>



  <div class="form-group row">

    <label for="pass" class="col-sm-2 col-form-label">Contraseña</label>



    <div class="col-sm-10">

      <div class="custom-file">

        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" value="<?php buscarPass(); ?>">

        <input id="myChbx" type='checkbox' onclick="setVisible('pass')" class="btn btn-primary 8"> <label for="myChbx">Mostrar</label> 

      </div>

    </div>

  </div>

<div class="form-group row">

  <label for="Nombre" class="col-sm-2 col-form-label">Nombre/s</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Nombre/s" value="<?php echo $infoCuent['Nombre']; ?>">

  </div>

</div>

<div class="form-group row">

  <label for="apellidoP" class="col-sm-2 col-form-label">Apellido Paterno</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="Apellido Paterno" value="<?php echo $infoCuent['Apellido_P']; ?>">

  </div>

</div>

<div class="form-group row">

  <label for="apellidoM" class="col-sm-2 col-form-label">Apellido Materno</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="apellidoM" name="apellidoM" placeholder="Apellido Materno" value="<?php echo $infoCuent['Apellido_M']; ?>">

  </div>

</div>

<div class="form-group row">

  <label for="Telefono" class="col-sm-2 col-form-label">T&eacute;lefono de Contacto</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="Telefono" name="telefono" placeholder="T&eacute;lefono de Contacto" value="<?php echo $infoCuent['Telefono']; ?>">

  </div>

</div>

<div class="form-group row">

  <label for="Celular" class="col-sm-2 col-form-label">Celular de Contacto</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular de Contacto" value="<?php echo $infoCuent['Celular']; ?>">

  </div>

</div>

<div class="form-group row">

  <label for="cpe" class="col-sm-2 col-form-label">Correo Electr&oacute;nico</label>

  <div class="col-sm-10">

    <input type="text" class="form-control" id="cpe" name="cpe" placeholder="Correo Electr&oacute;nico" value="<?php echo $infoCuent['Correo_Electronico']; ?>">

  </div>

</div>





  <footer class="footer">

    <div class="form-group row  ">

      <div class="col-sm-12 d-flex justify-content-end ">

        <button type="submit" class="btn btn-primary 8">Actualizar</button>

        <input type="hidden" name="CONFIG" value="<?php echo $_POST['CONFIG']; ?>" />

        <input type="hidden" name="CONFIG_IMG" value="<?php echo $_POST['CONFIG_IMG']; ?>" />

      </div>

  </footer>



  </div>



</form>

<script type="text/javascript">
  function setVisible(objetivo) {

    var obj = document.getElementById(objetivo);

    var type = obj.getAttribute('type') === 'password' ? 'text' : 'password';

    obj.setAttribute('type', type);

  }

</script>