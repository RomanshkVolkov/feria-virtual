$(document).ready(function () {
        $("#bEnviarL").click(function () {
            var Usuario = $("#UsuarioL").val();

            var contrasena = $("#contrasenaL").val();
            var tonto = true;
            var tonto2 = true;

            $("#form").addClass('was-validated');
            //validacion usuario
            if (Usuario == "" || Usuario.lenght < 1) {
                if ($('#UsuarioL').hasClass('is-valid'))
                    $("#UsuarioL").toggleClass("is-valid");

                if ($('#UsuarioL').hasClass('is-invalid') == false)
                    $("#UsuarioL").toggleClass("is-invalid");
                tonto = false;
            } else {

                if ($('#UsuarioL').hasClass('is-valid') == false)
                    $("#UsuarioL").toggleClass("is-valid");

                if ($('#UsuarioL').hasClass('is-invalid'))
                    $("#UsuarioL").toggleClass("is-invalid");
                tonto = true;
            }
            //validacion contraseñas
            if (contrasena == "" || contrasena.lenght < 1) {

                if ($('#contrasenaL').hasClass('is-valid'))
                    $("#contrasenaL").toggleClass("is-valid");
                if ($('#contrasenaL').hasClass('is-invalid') == false)
                    $("#contrasenaL").toggleClass("is-invalid");
                tonto2 = false;
            } else {
                if ($('#contrasenaL').hasClass('is-valid') == false)
                    $("#contrasenaL").toggleClass("is-valid");

                if ($('#contrasenaL').hasClass('is-invalid'))
                    $("#contrasenaL").toggleClass("is-invalid");
                tonto2 = true;
            }
            if (tonto && tonto2) {
                return true;

            } else {
                return false;
            }
        });


    }

);