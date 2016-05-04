$(document).ready(function(){

//  $("#click_download").on('click', function(){
//         html2canvas($("#content"), {
//             onrendered: function(canvas) {
//                 canvas.toBlob(function(canvas){
//                     saveAs(canvas, "appy-invite.png");
//                 });
//              }
//         });
//     });
// });


$("#click_download").on('click', function(){
        html2canvas($("#content"), {
            onrendered: function(canvas) {
                if (window.devicePixelRatio == 2){
                    console.log(canvas);
                    var context = canvas.getContext('2d');
                    var height = canvas.setAttribute('height', window.innerHeight * 2);
                    var width = canvas.setAttribute('width', window.innerWidth * 2);
                    context.scale(height,width);
                    canvas.toBlob(function(canvas){
                        saveAs(canvas, "appy-invite-retina.png");
                    });
                }
                else {
                    canvas.toBlob(function(canvas){
                        saveAs(canvas, "appy-invite.png");
                  });

                };
        
              }
         });
    });

});



// var w = 1000;
// var h = 1000;
// var div = document.querySelector('#content');
// var canvas = document.createElement('canvas');
// canvas.width = w*2;
// canvas.height = h*2;
// canvas.style.width = w + 'px';
// canvas.style.height = h + 'px';
// var context = canvas.getContext('2d');
// context.scale(2,2);
// html2canvas(div, { canvas: canvas }).then(function(canvas) {
//     // do what you want
//     onrendered: function(canvas) {
//         canvas.toBlob(function(canvas){
//             saveAs(canvas, "appy-invite.pn")
//         })
//     }
// });





