if(window.history.replaceState){
    console.log("Ya no debería aparecer nada despues de mi");
    window.history.replaceState(null, null, window.location.href);
}