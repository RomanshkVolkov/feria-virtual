function enCambio(elem){
    console.log(elem.value);
    var parentDiv = elem.parentNode; 
    var  a= parentDiv.className.replace(new RegExp('bg-\w*'), 'not');
    console.log(a);
    parentDiv.style.backgroundColor = elem.value
    parentDiv.className =a;
   
 }  
$(document).ready(function(){

 function outputData(){

 }

 $('#formC').on('submit', function(event){
         event.preventDefault();
             var formData = $(this).serialize();
             $.ajax({
                 url: "./Tareas/CambioColores.php",
                 method: "GET",
                 data: formData,
                 success:function(data){
     var info = JSON.parse(data);
                     outputData();
                     $('#formC')[0].reset();
                     console.log(info);
                     location.reload();
                     return false;
                 }
             });
         
     });
     $('#formTitle').on('submit', function(event){
        event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: "./Tareas/CambioTextos.php",
                method: "GET",
                data: formData,
                success:function(data){
                    var info = JSON.parse(data);
                    outputData();
                    $('#formTitle')[0].reset();
                    console.log(info);
                    location.reload();
                    return false;
                }
            });
        
    });
    $('#formWelcomeText').on('submit', function(event){
        event.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                url: "./Tareas/CambioTextos.php",
                method: "GET",
                data: formData,
                success:function(data){
    var info = JSON.parse(data);
                    outputData();
                    $('#formWelcomeText')[0].reset();
                    console.log(info);
                    location.reload();
                    return false;
                }
            });
        
    });
  
  
    
 });
 