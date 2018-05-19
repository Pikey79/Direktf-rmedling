$(".table-striped tr").each(function(){
  if($(this).find(".marked-row").text().indexOf("marked") > -1) {
    $(this).addClass("work-taken");
  }
});
