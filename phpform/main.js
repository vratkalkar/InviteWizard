(function(){

var content = $('#content'),
    cache_width = content.width(),
    a4  =[ 595.28,  841.89];  // for a4 size paper width and height

$('#click_download').on('click',function(){
	console.log('hello');
    $('body').scrollTop(0);
    createPDF();
});
//create pdf
function createPDF(){
    getCanvas().then(function(canvas){
        var 
        img = canvas.toDataURL("image/png"),
        doc = new jsPDF({
          unit:'px', 
          format:'a4'
        });     
        doc.addImage(img, 'JPEG', 20, 20);
        doc.save("appy-invite.pdf");
        content.width(cache_width);
    });
}

// create canvas object
function getCanvas(){
    content.width((a4[0]*1.33333) -80);
    return html2canvas(content,{
        imageTimeout:2000,
        removeContainer:true
    }); 
}

}());