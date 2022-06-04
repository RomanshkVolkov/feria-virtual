
var pdfs = document.getElementsByClassName("pdf-link");

for (var i = 0; i < pdfs.length; i++) {
const padre=pdfs[i];
const referencia = padre.getAttribute('href');
new pdfjsLib.getDocument(referencia).then(doc=>{
var newCanvas = padre.children[0];
var context= newCanvas.getContext("2d");
    console.log("la referencia es : "+referencia);
    console.log("numero de paginas es : "+doc._pdfInfo.numPages);
    doc.getPage(1).then(page=>{
        var viewport= page.getViewport(0.4);
        newCanvas.width=viewport.width;
        newCanvas.height=viewport.height;
        page.render({
            canvasContext:context,
            viewport:viewport
        });
    });
 
});


}
