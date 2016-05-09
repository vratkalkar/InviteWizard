$(document).ready(function(){

   $("#click_download").on('click', function(){
        html2canvas($("#content"), {
            onrendered: function(canvas) {
                if (window.devicePixelRatio == 2){
                    console.log(canvas);
                    var context = canvas.getContext('2d');
                    canvas.setAttribute('height', window.innerHeight * 2);
                    canvas.setAttribute('width', window.innerWidth * 2);
                    context.scale(window.innerHeight,window.innerWidth * 2);
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

//Resize browser window code
  $( window ).resize(function() {
       console.log("window resized");
       console.log($('.invite_container').text());
   });

//Tipr for tooltips
$('.tip').tipr();

});







