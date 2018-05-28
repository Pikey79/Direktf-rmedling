
// Respond button
/*$("body").on("click", ".CV-table .respond-btn", function(){
  var button_clicked = $(this);
  button_clicked.closest("tr").addClass("respond-marked");
  /*var clicks = $(this).data('clicks');
  if (clicks) {
     // odd clicks
     button_clicked.text("Svarat");
  } else {
     // even clicks
     button_clicked.text("Avmarkera");
  }
  $(this).data("clicks", !clicks);

});*/

// Mark a row and change button
$(".CV-table tr").each(function(){
  if($(this).find(".marked-row").text().indexOf("marked") > -1) {
    $(this).addClass("respond-marked");
    $(this).find(".respond-btn").addClass("hide-button");
    $(this).find(".unmark-btn").addClass("show-button");
  }
});

// Confirm to delete a row
function deleletconfig(){

	var del = confirm("Är du säker på att du vill radera detta?");
	if (del == true){
   		//header ("Location: indexadmin.php?page=about"
      true;
	}
		return del;
	}


// Show CV-link if it ends with .pdf, .doc, .docx
$("a[href$='.pdf']").addClass("show-cv-link");
$("a[href$='.doc']").addClass("show-cv-link");
$("a[href$='.docx']").addClass("show-cv-link");
