var statusfilter = "all";
document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>');
//funciones de filtrado por boton
$(document).ready(function () {
    // filtrar unis
    $(".category_item").click(function () {
        var catProduct = $(this).attr("category");
        var miselect= $('.chosen-select').chosen().val();
        var categoria= $('#elegircategoria').val();

        const arrayuni = miselect.filter(function(ele , pos){
    return miselect.indexOf(ele) == pos;
}) 
        statusfilter = catProduct;
        cantidad = $('.Uni[category="' + catProduct + '"]').length;
        console.log(cantidad);
        $(".Uni").css("transform", "scale(0)");
        function hideUnis() {
            $(".Uni").hide();
        }
        setTimeout(hideUnis, 300);
        function showUnis() {
            if (categoria!="Categoria") {
                $('.'+categoria+'[category="' + statusfilter + '"]').css("transform", "scale(1)");
   $('.'+categoria+'[category="' + statusfilter + '"]').show();
            }
            else if (arrayuni.length>0) {
                  for (i = 0; i < arrayuni.length; i++) {
            $('.Uni[category="' + catProduct + '"][title="' + arrayuni[i] + '"]').css("transform", "scale(1)");
            $('.Uni[category="' + catProduct + '"][title="' + arrayuni[i] + '"]').show();
            } 
            }else{
            $('.Uni[category="' + catProduct + '"]').css("transform", "scale(1)");
            $('.Uni[category="' + catProduct + '"]').show();
            }

        }
        setTimeout(showUnis, 400);

        if (catProduct == 0) {
            if (cantidad > 0) {
                $("#active-filter").text("Filtrando por escuelas publicas");
            } else {
                $("#active-filter").text("Filtrando por escuelas publicas 0 resultados");
            }
        } else if (catProduct == 1) {
            if (cantidad > 0) {
                $("#active-filter").text("Filtrando por escuelas privadas");
            } else {
                $("#active-filter").text("Filtrando por escuelas privadas 0 resultados");
            }
        }
    });
    // mostrar todas las unis
    $('.category_item[category="all"]').click(function () {
        function showAll() {
             var categoria= $('#elegircategoria').val();
                    var miselect= $('.chosen-select').chosen().val();
        const arrayuni = miselect.filter(function(ele , pos){
    return miselect.indexOf(ele) == pos;
}) 
            statusfilter = "all";
            $("#active-filter").text("");
            if (categoria!="Categoria") {
        $('.'+categoria).css("transform", "scale(1)");           
     $('.'+categoria).show();
            }
                       else if (arrayuni.length>0) {
                  for (i = 0; i < arrayuni.length; i++) {
            $('.Uni[title="' + arrayuni[i] + '"]').css("transform", "scale(1)");
            $('.Uni[title="' + arrayuni[i] + '"]').show();
} 
            }else{
            $(".Uni").css("transform", "scale(1)");
            $(".Uni").show();
            }

        }
        setTimeout(showAll, 400);
    });


});
$(document).ready(function () {

  
    if ($("#txt-busqueda").length) {
        $("#txt-busqueda").keyup(function () {
            const nombre = $("#txt-busqueda").val();
            const idmunicipio = $("#municipio").val();


            if (nombre.length > 0) {
       $(".search-choice-close").trigger("click");
$("#elegircategoria").prop('selectedIndex',0);
  document.getElementById("carreras").style.display = "block";
                var dataContact = "";
                $.ajax({
                    url: "Tareas/ajaxListado.php",
                    type: "GET",
                    async: true,
                    data: {
                        actionid: 2,
                        NombreUni: nombre,
                        MunicipioId: idmunicipio,
                    },
                    success: function (resultado) {
                        var info = JSON.parse(resultado);
                        if (info == "noData") {
                            dataContact =
                                '<div><hr class="container bg-warning">' +
                                '<span  class=" text-center text-info col-12 align-items-center align-self-center text-decoration-none text-uppercase">No se encontraron resultados<span>' +
                                '<hr class="container bg-warning">' +
                                "</div>";
                            lazyLoadInstance.update();
                        } else {
                            dataContact = info;
                        }

                        $("#Listado").html(dataContact);
                        $("#nom_mun").html($("#mun").val());
                        lazyLoadInstance.update();
                        if (statusfilter != "all") {
                            $(".Uni").css("transform", "scale(0)");
                            function hideUnis() {
                                $(".Uni").hide();
                            }
                            setTimeout(hideUnis, 300);
                            function showUnis() {
                                $('.Uni[category="' + statusfilter + '"]').css(
                                    "transform",
                                    "scale(1)"
                                );
                                $('.Uni[category="' + statusfilter + '"]').show();
                            }
                            setTimeout(showUnis, 400);

                            cantidad = $('.Uni[category="' + catProduct + '"]').length;
                            if (statusfilter == 0) {
                                if (cantidad > 0) {
                                    $("#active-filter").text("Filtrando por escuelas publicas");
                                } else {
                                    $("#active-filter").text("Filtrando por escuelas publicas 0 resultados");
                                }
                              } else if (statusfilter == 1) {
                                if (cantidad > 0) {
                                    $("#active-filter").text("Filtrando por escuelas privadas");
                                } else {
                                    $("#active-filter").text("Filtrando por escuelas privadas 0 resultados");
                                }
                             }
                        }
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });
            } else {
                mostrarTabla();
            }
        });
    }
    if ($("#Listado").length) {
        mostrarTabla();
    }
});

function mostrarTabla() {
    const idmunicipio = $("#municipio").val();
    var dataContact = "";
    $.ajax({
        url: "Tareas/ajaxListado.php",
        type: "GET",
        async: true,
        
        data: {
            actionid: 1,
            MunicipioId: idmunicipio,
        },
        success: function (resultado) {
            var info = JSON.parse(resultado);
            if (info == "noData") {
                dataContact =
                    '<div><hr class="container bg-warning">' +
                    '<span  class=" text-center text-info col-12 align-items-center align-self-center text-decoration-none text-uppercase">No se encontraron resultados<span>' +
                    '<hr class="container bg-warning">' +
                    "</div>";
            } else {
                var info = JSON.parse(resultado);
                dataContact = info;
                console.log(statusfilter);
            }
            console.log(statusfilter);
            if (statusfilter != "all") {
                $(".Uni").css("transform", "scale(0)");
                function hideUnis() {
                    $(".Uni").hide();
                }
                setTimeout(hideUnis, 300);
                function showUnis() {
                    $('.Uni[category="' + statusfilter + '"]').css(
                        "transform",
                        "scale(1)"
                    );
                    $('.Uni[category="' + statusfilter + '"]').show();
                }
                setTimeout(showUnis, 400);

                cantidad = $('.Uni[category="' + catProduct + '"]').length;
                            if (statusfilter == 0) {
                                if (cantidad > 0) {
                                    $("#active-filter").text("Filtrando por escuelas publicas");
                                } else {
                                    $("#active-filter").text("Filtrando por escuelas publicas 0 resultados");
                                }
                              } else if (statusfilter == 1) {
                                if (cantidad > 0) {
                                    $("#active-filter").text("Filtrando por escuelas privadas");
                                } else {
                                    $("#active-filter").text("Filtrando por escuelas privadas 0 resultados");
                                }
                             }
            }
            $("#Listado").html(dataContact);
            $("#nom_mun").html($("#mun").val());

            $(document).attr("title", $("#mun").val());
            $("#ruta_img_mun").attr("src", $("#log_mun").val());
            lazyLoadInstance.update();
        },
        error: function (error) {
            console.log(error);
        },
    });
}