$( document ).ready(function(){

//ToDo: Add code for html2canvas below

//Add PDF download on "Download" button click with jsPDF
$('#click_download').on("click", function() {
	console.log("download button clicked");
	var pdf = new jsPDF('p', 'cm', 'a4');
	var source = $("body")[0];

	specialElementHandlers = {
		'#ignorethis': function(element, renderer) {
			return true;
		}
	}

	margins = {
    top: 80,
    bottom: 60,
    left: 40,
    width: 522

   };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
  	  source // HTML string or DOM elem ref.
  	, margins.left // x coord
  	, margins.top // y coord
  	, {
  		  'width': margins.width // max width of content on PDF
  		, 'elementHandlers': specialElementHandlers
  	},

  	function (dispose) {
  	  // dispose: object with X, Y of the last line add to the PDF
  	  //          this allow the insertion of new lines after html
        pdf.save('appy_invite.pdf');
      },
  	margins
  )

  });

});
