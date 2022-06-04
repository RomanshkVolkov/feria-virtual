  // Tooltips Initialization
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
$(document).ready(() => {
    var iframeHead = $('.pdf').contents().find('head')
    iframeHead.append('<style>.loader,.loader:after{border-radius:50%;width:50px;height:50px}.loader{font-size:10px;position:relative;border-top:1.1em solid rgba(0,0,0,.2);border-right:1.1em solid rgba(0,0,0,.2);border-bottom:1.1em solid rgba(0,0,0,.2);border-left:1.1em solid #000;-webkit-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0);-webkit-animation:spin 1.1s infinite linear;animation:spin 1.1s infinite linear}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>')

    var iframeBody = $('.pdf').contents().find('body')

    // inject loading spinner
    iframeBody.append('<div class="loader"></div>')

    //center loading spinner
    iframeBody.css('display', 'flex')
    iframeBody.css('align-items', 'center')
    iframeBody.css('justify-content', 'center')
})

$(document).ready(() => {
    $('.pdf').attr('src', $('.pdf').attr('data-src'))
    $('.pdf').attr('data-loaded', 'true')
})


resetnav();

$(document).ready(function() {
    $(".lightgallery").lightGallery();
});

$(document).ready(function() {
    $(".videoGallery").lightGallery();
});

//ocultartodo();
//mostrar('Bienvenida');

function mostrar(actual) {
  //  ocultartodo();
    document.getElementById(actual).style.display = "initial";
    location.href = "#"+actual;
}

function ocultartodo() {
    var x = document.getElementsByClassName("contenido-item");

    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

}
$(function() {
    try {  
    var str =  $("#srcmapa").val();
    const regex = /@(-?\d+\.\d+),(-?\d+\.\d+)/g;
    const regex2 = /<iframe\s*src="https:\/\/www\.google\.com\/maps\/embed\?[^"]+"*\s*[^>]+>*<\/iframe>/g;
    let match =regex.exec(str);
    let match2 =regex2.exec(str);
    if(match){
        var i=0
       const lat =match[1];
       console.log(lat+"lat");
        const long =match[2];
        console.log(long+"long");
      var url = 'http://maps.google.com/maps?q=' + lat + ',' + long + '&z=' + 15 + '&maptype=satellite&output=embed';
        console.log(url);
     
     $('#output').removeAttr('style');

   $('#output').html(`<a href='`+str+`' target='_blank'><span>`+str+`</span></a><hr>`);
      
    }else if (match2){
       
        
            $('#output').html(str);
   
      

    }else{
           $('#output').removeAttr('style');

            $('#output').html(`<a href='`+str+`' target='_blank'><span>`+str+`</span></a><hr>`);
        }
} catch (error) {
        console.log(error);
    }
});