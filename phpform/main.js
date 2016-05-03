$(document).ready(function(){

function isRetina() {
    var query = '(-webkit-min-device-pixel-ratio: 1.5),\
        (min--moz-device-pixel-ratio: 1.5),\
        (-o-min-device-pixel-ratio: 3/2),\
        (min-device-pixel-ratio: 1.5),\
        (min-resolution: 144dpi),\
        (min-resolution: 1.5dppx)';

        if (window.devicePixelRatio > 1 || (window.matchMedia && window.matchMedia(query).matches)) {
          return true;
        }
        return false;
}


 $("#click_download").on('click', function(){
    console.log(isRetina());
  //   html2canvas(document.body, {
  //     onrendered: function(canvas) {
  //       return Canvas2Image.saveAsPNG(canvas);
  //            }
  //  
  //      });
 });

})



    





