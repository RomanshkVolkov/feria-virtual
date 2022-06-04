$(document).ready(function () {
    if ($('#txt-busqueda').length) {
        $('#txt-busqueda').keyup(function () {
            const nombreMun = $('#txt-busqueda').val();
            if (nombreMun.length > 0) {
                var dataContact = '';
                $.ajax({
                    url: '../Tareas/ajaxMunicipio.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action:1,
                        NombreMun: nombreMun
                    },
                    success: function (resultado) {
                        if (resultado == 'noData') {
                            dataContact = 'no se encontraron resultados';
                        } else {
                            var info = JSON.parse(resultado);
                            
                            dataContact = info;
                        }
                        $('#municipio').html(dataContact);

                    }, error: function (error) {
                        console.log(error);
                    }


                });
            } else {
                mostrarTabla();
            }

        });
    }
    if ($('#municipio').length) {
        mostrarTabla();
    }
});

function mostrarTabla() {
    var dataContact = '';
    $.ajax({
        url: '../Tareas/ajaxMunicipio.php',
        type: 'POST',
        async: true,
        data: {
            action: 2
        },
        success: function (resultado) {
            if (resultado == 'noData') {
                dataContact = 'no se encontraron resultados';
            } else {
                var info = JSON.parse(resultado);
                dataContact = info;
            }

            $('#municipio').html(dataContact);
            
        }, error: function (error) {
            console.log(error);
        }

    });

}
