function initMap() {
  var uluru = { lat: 55.70543, lng: 13.195595 };
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

55.705254, 13.19508;
55.70543, 13.195595;
