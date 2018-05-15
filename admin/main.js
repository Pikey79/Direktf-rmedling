
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

$(".CV-table tr").each(function(){
  if($(this).find(".marked-row").text().indexOf("marked") > -1) {
    $(this).addClass("respond-marked");
    $(this).find(".respond-btn").addClass("hide-button");
    $(this).find(".unmark-btn").addClass("show-button");
  }
});

function deleletconfig(){

	var del = confirm("Är du säker på att du vill radera detta?");
	if (del == true){
   		//header ("Location: indexadmin.php?page=about"
      true;
	}
		return del;
	}
