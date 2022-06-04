$(document).ready(function () {
  $("#bEnviar").click(function () {
    var Usuario = $("#Usuario").val();

    var Correo = $("#Correo").val();

    var Nombre = $("#Nombre").val();

    var contrasena = $("#contrasena").val();

    var CContrasena = $("#CContrasena").val();

    var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    var tonto = true;
    var tonto2 = true;
    var tonto3 = true;
    var tonto4 = true;
    var tonto5 = true;

    $("#form").addClass("was-validated");
    //validacion usuario
    if (Usuario == "" || Usuario.length > 50) {
      if ($("#Usuario").hasClass("is-valid"))
        $("#Usuario").toggleClass("is-valid");

      if ($("#Usuario").hasClass("is-invalid") == false)
        $("#Usuario").toggleClass("is-invalid");
      tonto = false;
    } else {
      if ($("#Usuario").hasClass("is-valid") == false)
        $("#Usuario").toggleClass("is-valid");

      if ($("#Usuario").hasClass("is-invalid"))
        $("#Usuario").toggleClass("is-invalid");
      tonto = true;
    }

    //validacion correo
    if (Correo == "" || Correo.length > 60 || !expr.test(Correo)) {
      if ($("#Correo").hasClass("is-valid"))
        $("#Correo").toggleClass("is-valid");

      if ($("#Correo").hasClass("is-invalid") == false)
        $("#Correo").toggleClass("is-invalid");
      tonto2 = false;
    } else {
      if ($("#Correo").hasClass("is-valid") == false)
        $("#Correo").toggleClass("is-valid");

      if ($("#Correo").hasClass("is-invalid"))
        $("#Correo").toggleClass("is-invalid");
      tonto2 = true;
    }
    //validacion nombre
    if (Nombre == "" || Nombre.length > 60) {
      if ($("#Nombre").hasClass("is-valid"))
        $("#Nombre").toggleClass("is-valid");

      if ($("#Nombre").hasClass("is-invalid") == false)
        $("#Nombre").toggleClass("is-invalid");
      tonto3 = false;
    } else {
      if ($("#Nombre").hasClass("is-valid") == false)
        $("#Nombre").toggleClass("is-valid");

      if ($("#Nombre").hasClass("is-invalid"))
        $("#Nombre").toggleClass("is-invalid");
      tonto3 = true;
    }
    //validacion contraseñas
    if (contrasena == "" || contrasena.length > 60) {
      if ($("#contrasena").hasClass("is-valid"))
        $("#contrasena").toggleClass("is-valid");

      if ($("#contrasena").hasClass("is-invalid") == false)
        $("#contrasena").toggleClass("is-invalid");
      tonto4 = false;
    } else {
      if ($("#contrasena").hasClass("is-valid") == false)
        $("#contrasena").toggleClass("is-valid");

      if ($("#contrasena").hasClass("is-invalid"))
        $("#contrasena").toggleClass("is-invalid");
      tonto4 = true;
    }
    if (
      CContrasena == "" ||
      CContrasena.length > 60 ||
      contrasena != CContrasena
    ) {
      if ($("#CContrasena").hasClass("is-valid"))
        $("#CContrasena").toggleClass("is-valid");

      if ($("#CContrasena").hasClass("is-invalid") == false)
        $("#CContrasena").toggleClass("is-invalid");
      tonto5 = false;
    } else {
      if ($("#CContrasena").hasClass("is-valid") == false)
        $("#CContrasena").toggleClass("is-valid");

      if ($("#CContrasena").hasClass("is-invalid"))
        $("#CContrasena").toggleClass("is-invalid");

      tonto5 = true;
    }
    if (
      tonto == true &&
      tonto2 == true &&
      (tonto3 == true) & (tonto4 == true) & (tonto5 == true)
    ) {

      const postData = {
        Usuario: $("#Usuario").val(),
        Correo: $("#Correo").val(),
        Nombre: $("#Nombre").val(),
        contrasena: $("#contrasena").val(),
        imagen: $('input[name="imagen"]:checked').val()
      };
      $.post("GestionCuenta/crearcuenta.php", postData, function (response) {
        a = response;
        console.log(a);
        $("#contrasena").val("");
        $("#CContrasena").val("");
        b = "correo existente";
        c = "Usuario existente";

        console.log(response);
        $("#respuesta").html(a);
        if (a == b) {
          if ($("#Correo").hasClass("is-valid"))
            $("#Correo").toggleClass("is-valid");
          if ($("#Correo").hasClass("is-invalid") == false)
            $("#Correo").toggleClass("is-invalid");
          tonto2 = false;
          return true;
        }
        if (c == a) {
          if ($("#Usuario").hasClass("is-valid"))
            $("#Usuario").toggleClass("is-valid");
          if ($("#Usuario").hasClass("is-invalid") == false)
            $("#Usuario").toggleClass("is-invalid");
          tonto = false;

          return true;
        }
      });

      return true;
    } else if (
      tonto == false ||
      tonto2 == false ||
      tonto3 == false ||
      tonto4 == false ||
      tonto5 == false
    ) {
      return false;
    }
  });
});
$("#task-form").submit(function (e) {

  e.preventDefault();
});