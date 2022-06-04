var pregunta=100;
var respuesta=pregunta+1;
var contarres=1;
var contarpre=1;
var A=1;
var id=100;
var con=0;
var contadores = [100, 200, 300, 400, 500, 600, 700,800,900,1000,1100,1200,1300,1400,1500,1600,1800,1900,2000];
for (i=100; i<=2000;i=i+100){
    contadores[i]=1;
}
function agregarpregunta(){
    var p1 = document.getElementById(pregunta);
    ++contarpre;
    pregunta=pregunta+100;
    respuesta=pregunta+1;
    id=id+100;
    p1.insertAdjacentHTML('afterend', '<br /><div class="card" id="'+pregunta+'" ><div class="card-body"><div class="row justify-content-between"><div class="col"><div class="d-flex justify-content-end"><a href="#!" class="btn btn-primary" onclick="eliminarpregunta('+pregunta+')">X </a></div><center><h5 class="card-title"><input type="text" name="'+pregunta+'" style="border: none; text-align:center;"  class="center col-sm-12" placeholder="Pregunta '+contarpre+'"/></h5></center><p class="card-text" id="'+respuesta+'" ><a class="btn btn-primary" onclick="eliminarpregunta('+respuesta+')">X </a><input type="hidden" name="'+respuesta+"a"+'" value="2"> <input class="check-input" type="checkbox" value="1" name="'+respuesta+"a"+'" id="'+respuesta+"a"+'"> <input type="text" name="'+respuesta+'" style="border: none;"  class="center col-sm-9" placeholder="Respuesta"/></p><div class="d-flex justify-content-end"><p>Agregar Respuesta <a class="btn btn-primary" onclick="agregarrespuesta('+id+','+1+')"> +</a></p></div></div></div></div></div>');
    // En este punto, la nueva estructura es:
    // <div id="one">one</div><div id="two">two</div>
}



function agregarrespuesta(pregunta,num) {

        respuesta=pregunta+contadores[pregunta];
        // <div id="one">one</div>
        var r1 = document.getElementById(respuesta);
        ++contadores[pregunta];
        respuesta=pregunta+contadores[pregunta];
        r1.insertAdjacentHTML('afterend', '<p class="card-text" id="'+respuesta+'" ><a href="#!" class="btn btn-primary" onclick="eliminarpregunta('+respuesta+')">X </a><input type="hidden" name="'+respuesta+"a"+'" value="2"> <input class="check-input" type="checkbox" value="1" name="'+respuesta+"a"+'" id="'+respuesta+"a"+'"> </a> <input type="text" name="'+respuesta+'" style="border: none;"  class="center col-sm-9" placeholder="Respuesta"/></p>');
    
    
    
    // En este punto, la nueva estructura es:
    // <div id="one">one</div><div id="two">two</div>
    
}

function eliminarpregunta(id){

        // Removes an element from the document
        var e1 = document.getElementById(id);
        e1.parentNode.removeChild(e1);

}

