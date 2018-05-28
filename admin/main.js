
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

// Popup
$("body").on("click", ".message-btn", function () {
  $(this).closest("td").addClass("show-msg-text");
  $("body").addClass("show-msg-popup");
});


$("body").on("click", ".black-overlay, .close-btn", function () {
  $("body").removeClass("show-msg-popup");
  $("td").removeClass("show-msg-text");
});


// Hide message button
if($(".message-popup").length > 0) {

  $(".CV-table tbody tr").each(function(){
    if($(this).find(".message-popup").text().length == 7 || $(this).find(".message-popup").text().length == 0) {
      $(this).addClass("hide-message-btn");

    }
  });
}
