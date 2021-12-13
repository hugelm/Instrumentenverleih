

function cookie() {
  windows.alert(navigator.cookieEnabled);
}

function setCookie() {
  document.cookie = "isNewCustomer; path=/";
}

function readCookie() {
  var x = document.cookie
  window.alert(x);
}






/*
   <div id="pos">
        Deine Position wird ermittelt...
    </div>
*/

navigator.geolocation.getCurrentPosition(function(position){ 
  document.getElementById('pos').innerHTML = 'Latitude: '+position.coords.latitude+' / Longitude: '+position.coords.longitude;
}, function(){
  document.getElementById('pos').innerHTML = 'Deine Position konnte leider nicht ermittelt werden';
});

var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

function initMap() {
  directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(41.850033, -87.6500523);
  var mapOptions = {
    zoom: 7,
    center: chicago
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  directionsDisplay.setMap(map);
  calcRoute(map);
}

function calcRoute(map) {
  var start = new google.maps.LatLng(41.850033, -87.6500523);
  var end = new google.maps.LatLng(37.3229978, -122.0321823);
  var request = {
    origin: start,
    destination: end,
    travelMode: 'DRIVING'
  };

  directionsService.route(request, function(response, status) {
    if (status == 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      alert("directions request failed, status=" + status)
    }
  });
}
//google.maps.event.addDomListener(window, "load", initMap);

