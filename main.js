
// Form flap, change form
$("body").on("click", ".flap-two", function () {
  $(".form-container-search-stuff").addClass("show-form-search-staff");
  $(".form-container-apply-job").addClass("hide-form-apply-job");
  $(".flap-one").removeClass("flap-active");
  $(".flap-two").addClass("flap-active");

});

$("body").on("click", ".flap-one", function () {
  $(".form-container-search-stuff").removeClass("show-form-search-staff");
  $(".form-container-apply-job").removeClass("hide-form-apply-job");
  $(".flap-one").addClass("flap-active");
  $(".flap-two").removeClass("flap-active");
});


// Menu active
if(window.location.href.indexOf("school") > -1 || window.location.href.indexOf("restaurant") > -1
|| window.location.href.indexOf("retail") > -1 || window.location.href.indexOf("care") > -1
|| window.location.href.indexOf("economy") > -1 || window.location.href.indexOf("construction") > -1
|| window.location.href.indexOf("cleaning") > -1 ) {
  $(".operations-page").addClass("active");
} else if(window.location.href.indexOf("about-us") > -1 ) {
  $(".about-us-page").addClass("active");
} else if(window.location.href.indexOf("application") > -1 ) {
  $(".application-page").addClass("active");
} else if(window.location.href.indexOf("contact") > -1 ) {
  $(".contact-page").addClass("active");
} else if(window.location.href.indexOf("employee") > -1 ) {
  $(".employee-page").addClass("active");
}else if(window.location.href.indexOf("home") > -1 ) {
  $(".home-page").addClass("active");
} else if(window.location.href.indexOf("search-staff") > -1 ) {
  $(".search-staff-page").addClass("active");
} else {
  $(".home-page").addClass("active");
}

// Popup
$("body").on("click", ".black-overlay, .popup-button", function () {
  $("body").removeClass("show-success");
});
