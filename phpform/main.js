$(document).ready(function(){

 $("#click_download").on('click', function(){
      html2canvas(document.body, {
       onrendered: function(canvas) {
        if (window.devicePixelRatio > 1){
             var retinaCanvas = toRetina(canvas);
             return Canvas2Image.saveAsPNG(retinaCanvas);
        }
        else {
            return Canvas2Image.saveAsPNG(canvas);
        };
      }

    });
      
  });

//  //Try to update canvas for hi-res/retina(Apple) displays
//  function toRetina(canvas) {
//     var ctx = canvas.getContext('2d');
//     var canvasWidth = canvas.width;
//     var canvasHeight = canvas.height;

//     canvas.width = canvasWidth * window.devicePixelRatio;
//     canvas.height = canvasHeight * window.devicePixelRatio;
//     canvas.style.width = canvasWidth;
//     ctx.scale(window.devicePixelRatio, window.devicePixelRatio);
//     return canvas;
//  };

// //Function found which checks users display and returns boolean if any conditional matches
// function isRetina() {
//     var query = '(-webkit-min-device-pixel-ratio: 1.5),\
//         (min--moz-device-pixel-ratio: 1.5),\
//         (-o-min-device-pixel-ratio: 3/2),\
//         (min-device-pixel-ratio: 1.5),\
//         (min-resolution: 144dpi),\
//         (min-resolution: 1.5dppx)';

//         if (window.devicePixelRatio > 1 || (window.matchMedia && window.matchMedia(query).matches)) {
//           return true;
//         }
//         return false;
// }




});



    





