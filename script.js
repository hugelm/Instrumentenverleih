

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


/* Route Calculation */
function calcRoute(vari) {

  const directionsService = new google.maps.DirectionsService();
  const directionsRenderer = new google.maps.DirectionsRenderer();
  if (navigator.geolocation) {
      
    navigator.geolocation.getCurrentPosition(function(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var coords = new google.maps.LatLng(latitude, longitude);


    var mapOptions = {
        zoom: 15,
        center: coords,
        mapTypeControl: true,
        navigationControlOptions: {
            style: google.maps.NavigationControlStyle.SMALL
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(
            document.getElementById("mapContainer"), mapOptions
            );
        var marker = new google.maps.Marker({
                position: coords,
                map: map,
                title: "Your current location!"
        });
        var start = coords;
        var end = "Windmühlstraße 27, 68165 Mannheim";
        var request = {
          origin: start,
          destination: end,
          travelMode: vari
        };
        directionsService.route(request, function(result, status) {
          if (status == 'OK') {
            directionsRenderer.setDirections(result);
          }
        });
    directionsRenderer.setMap(map);
  });

}};

/* AKTUELL IN HTML, KANN HIER INTEGRIERT WERDEN ZUR ÜERSICHTICHKEIT
function getDistance() {
  navigator.geolocation.getCurrentPosition(
            function(position) {
                var latLngA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                var latLngB = new google.maps.LatLng(40.778721618334295, -73.96648406982422);
                var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
                alert(distance);//In metres
            },
            function() {
                alert("geolocation not supported!!");
            }
    );
}
getDistance();
/*


/*
   <div id="pos">
        Deine Position wird ermittelt...
    </div>


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
*/
