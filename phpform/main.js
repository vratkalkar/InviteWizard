$(document).ready(function(){

 $("#click_download").on('click', function(){
    html2canvas(document.body, {
      onrendered: function(canvas) {
        return Canvas2Image.saveAsPNG(canvas);
      }

    });
    
  });

})



    





