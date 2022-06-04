$(document).ready(function() {
    //Detectamos si el btn de Aceptar universidad es usado
    $("#btnAceptarUniversidad" ).click(function() {
        //Este es el codigo que se ejecuta al usarce el boton de aceptar universidad
        //Guardamos el Id la de universidad en una variable, el input hidden esta el conexion.php NombreUni();
        const Id_Uni = $('#Id_Uni').val();
        const Mensaje = $('#txtareaaceptacion').val();
        const Email = $('#correoR').val();

        //Revisamos que checkbox no estan seleccionados y cambiamos el valor de su estatus a pendiente
        $("input:checkbox:not(checked)").each(function() {
            //Este codigo se ejecuta si un checkbox no ha sido seleccionado
            const idCarrera = $(this).val();
            //Obtenemos el valor del id del checkbox y lo guardamos para despues compararlo 
            const nombreElemento = this.id;   
            //console.log("El elemento es",nombreElemento," y su id es: ",idCarrera)    

            if(nombreElemento == "checkboxCarrera"){
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 1,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxFoto"){
                //Mandamos un action hacia la consulta update fotos
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 3,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxVideo"){
                //Mandamos el action hacia una consulta update videos
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 5,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxBeca"){
                //Mandamos el action hacia una consulta update videos
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 7,
                        IdElemento: idCarrera
                    }
                });
            }

       });

        //Detectamos si algun checkbox ha sido seleccionado y cambiamos su valor a aceptado
        $("input:checkbox:checked").each(function() {
            //Este codigo se ejecuta si un checkbox ha sido seleccionado
            const idCarrera = $(this).val();  
            const nombreElemento = this.id; 
            //console.log(nombreElemento," y su id es: ",idCarrera)    
            if(nombreElemento == "checkboxCarrera"){
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 2,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxFoto"){
                //Mandamos un action hacia la consulta update fotos a aceptado
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 4,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxVideo"){
                //Mandamos un action hacia la consulta update Video a aceptado
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 6,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxBeca"){
                //Mandamos un action hacia la consulta update Video a aceptado
                $.ajax({
                    url: '../Tareas/ajaxAgregarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 8,
                        IdElemento: idCarrera
                    }
                });
            }

       });
       //Mandamos los datos para la consulta de agregar universidad junto a la información necesaria para mandar el correo
       $.ajax({
                url: '../Tareas/ajaxAgregarUni.php',
                type: 'POST',
                async: true,
                data: {
                    action: 9,
                    IdUni: Id_Uni,
                    Mensaje: Mensaje,
                    Email: Email
            }
        });
        alert("Operación exitosa");  
        $('#modalaceptacion').modal('hide');
        $('#modalrechazo').modal('hide');
        location.reload();
    });

   //Detectamos si el boton de rechazar la universidad 
   $("#btnRechazarUniversidad" ).click(function()  {
        //Este es el codigo que se ejecuta al usarce el boton de rechazar universidad
        //Guardamos el Id la de universidad en una variable, el input hidden esta el conexion.php NombreUni();
        const Id_Uni = $('#Id_Uni').val();
        const Mensaje = $('#txtarearechazo').val();
        const Email = $('#correoR').val();
        
        $("input:checkbox:checked").each(function() {
            //Este codigo se ejecuta si un checkbox ha sido seleccionado
            const idCarrera = $(this).val();    
            const nombreElemento = this.id;
            //console.log("El elemento es",nombreElemento," y su id es: ",idCarrera) 
            if(nombreElemento == "checkboxCarrera"){
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 1,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxFoto"){
                //Mandamos un action hacia la consulta update fotos
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 2,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxVideo"){
                //Mandamos un action hacia la consulta update video
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 3,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxBeca"){
                //Mandamos un action hacia la consulta update en becas
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 4,
                        IdElemento: idCarrera
                    }
                });
            }

       });
        //Detectamos si algun checkbox ha sido seleccionado
        $("input:checkbox:not(:checked)").each(function() {
            //Este codigo se ejecuta si un checkbox no ha sido seleccionado
            const idCarrera = $(this).val();
            const nombreElemento = $(this).id;
            //console.log("El elemento es",nombreElemento," y su id es: ",idCarrera)        
            if(nombreElemento == "checkboxCarrera"){
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 1,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxFoto"){
                //Mandamos un action hacia la consulta update fotos
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 2,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxVideo"){
                //Mandamos un action hacia la consulta update video
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 3,
                        IdElemento: idCarrera
                    }
                });
            }else if(nombreElemento == "checkboxBeca"){
                //Mandamos un action hacia la consulta update en becas
                $.ajax({
                    url: '../Tareas/ajaxRechazarUni.php',
                    type: 'POST',
                    async: true,
                    data: {
                        action: 4,
                        IdElemento: idCarrera
                    }
                });
            }
       });
       //Mandamos los datos para la consulta de agregar universidad
       $.ajax({
        url: '../Tareas/ajaxRechazarUni.php',
        type: 'POST',
        async: true,
        data: {
            action: 10,
            IdUni: Id_Uni,
            Mensaje: Mensaje,
            Email: Email
        }
    });
        alert("Operación exitosa");

        $('#modalaceptacion').modal('hide');
        $('#modalrechazo').modal('hide');
        location.reload();

      });
      //Codigo para cerrar un modal usando un boton
      $("#btnCancelar" ).click(function() {
        $("#modalaceptacion").modal('hide');//ocultamos el modal, colocamos el id del modal que queremos ocultar
        //Las siguientes instrucciones no cambian
        $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
        $('.modal-backdrop').remove();//eliminamos el backdrop del modal
      });  

      $("#btnCancelarRechazar" ).click(function() {
        $("#modalrechazo").modal('hide');//ocultamos el modal
        $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
        $('.modal-backdrop').remove();//eliminamos el backdrop del modal
      });  
});
