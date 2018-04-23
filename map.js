function initMap() {
  var uluru = {lat: 59.214491, lng: 18.214598};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

initMap();
