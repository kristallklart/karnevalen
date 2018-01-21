function initMap() {
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: { lat: 55.705254, lng: 13.19508 }
  });
  directionsDisplay.setMap(map);

  //var onChangeHandler = function() {
  calculateAndDisplayRoute(directionsService, directionsDisplay);
  //};
  //document.getElementById('start').addEventListener('change', onChangeHandler);
  //document.getElementById('end').addEventListener('change', onChangeHandler);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route(
    {
      origin: 'Ällingavägen 16, 227 34 Lund',
      destination: 'Finngatan 2, 223 62 Lund, Sweden',
      waypoints: [
        { location: 'Högevall, 222 24 Lund, Sweden', stopover: true }
      ],
      travelMode: 'DRIVING'
    },
    function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    }
  );
}

// waypoints: [{location: 'Helgonavägen 3, 223 62 Lund, Sweden', stopover: false},
// {location: second, stopover: false}],
