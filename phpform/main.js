$(document).ready(function(){
 $("#click_download").on('click', function(){
        console.log("button clicked");
        html2canvas($('#content'), {
            useCORS: true,
            allowTaint: true,
            letterRendering: true,
            onrendered: function(canvas) {
                var ctx = canvas.getContext('2d');
                ctx.webkitImageSmoothingEnabled = false;
                ctx.mozImageSmoothingEnabled = false;
                ctx.imageSmoothingEnabled = false;
                canvas.toBlob(function(canvas){
                    saveAs(canvas, "appy-invite.png");
                });
             }
        });
    });
})





