$(document).ready(function(){
 $("#click_download").on('click', function(){
        console.log("button clicked");
        html2canvas($('#content'), {
            allowTaint: false,
            onrendered: function(canvas) {
                canvas.toBlob(function(canvas){
                    saveAs(canvas, "appy-invite.png")
                });
            }
       });
  });
})
    





