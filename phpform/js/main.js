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

   var chosenTemplate = $('.chosen_template');
   chosenTemplate.selectric();

   //Customize Page Three buttons
   $("#invite_type input").on("click", function(e) {
        e.preventDefault();
        $(this).addClass('clicked').siblings().removeClass('clicked');
        var selectedInvite = $(this).val();
        $.ajax({
          type: 'POST',
          url: '../../process_forms/process_invitation/process_page_three.php',
          data: { invite_type: selectedInvite },
          success: function (selectedInvite) {
            console.log("value added");
          },
          error: function () {
            console.log("value NOT added");
          }
        });
      
   });



   $('#hosting_choice input').on('click', function(e){
        e.preventDefault();
        $(this).addClass('clicked').siblings().removeClass('clicked');
        var selectedHost = $(this).val();
        $.ajax({
          type: 'POST',
          url: '../../process_forms/process_invitation/process_page_three.php',
          data: { 'choose_host': selectedHost },
          success: function (selectedHost) {
            console.log(selectedHost);
          },
          error: function () {
            console.log("value NOT added");
          },

       });
   });



});








