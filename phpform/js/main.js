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

   //Customize Page Three buttons
   $('#invite_type input').on('click', function(e){
        e.preventDefault();
        console.log("button selected");
        console.log($(this).val());
    });

   $('#hosting_choice input').on('click', function(e){
        e.preventDefault();
        console.log("button selected");
        console.log($(this).val());
   });



});








