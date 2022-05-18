<!DOCTYPE html>
<html>
  <head>
    <title>Remove Markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
        <form action="/action_page.php">
    Coordinates:<br>
    <input type="text" name="coordinates" size="55" value="How to get coordinates from info window after clicking on markers?">
    <br>

    <input type="submit" value="Submit">
    </form> 
    <br />
      <input onclick="clearMarkers();" type=button value="Hide Markers">
      <input onclick="showMarkers();" type=button value="Show All Markers">
      <input onclick="deleteMarkers();" type=button value="Delete Markers">
    </div>
    <div id="map"></div>
    <p>Click on the map to add markers geocoorditanes.</p>




    <div id="map-canvas"> </div>
    <script src="script.js" ></script>
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=MYKEY&callback=initMap"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




  </body>

<script>
  // In the following example, markers appear when the user clicks on the map.
  // The markers are stored in an array.
  // The user can then click an option to hide, show or delete the markers.
  var map;
  var markers = [];

  window.initMap = function(){
    var haightAshbury = {lat: 52.131514, lng: 20.913248};

    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: haightAshbury,
      mapTypeId: 'satellite'
    });

    // This event listener will call addMarker() when the map is clicked.
    map.addListener('click', function(event) {
      addMarker(event.latLng);
    });

    // Adds a marker at the center of the map.
    addMarker(haightAshbury);
  }

  // Adds a marker to the map and push to the array.
  function addMarker(latlng) {
    var marker = new google.maps.Marker({
      position: latlng,
      map: map,
      title: 'Set lat/lon values for this property',
      draggable: true
    });
      var infowindow = new google.maps.InfoWindow({
      content: '' + marker.getPosition() + ''
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
    markers.push(marker);
  }
   // Sets the map on all markers in the array.
   function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
      markers[i].setMap(map);
    }
  }

  // Removes the markers from the map, but keeps them in the array.
  function clearMarkers() {
    setMapOnAll(null);
  }

  // Shows any markers currently in the array.
  function showMarkers() {
    setMapOnAll(map);
  }

  // Deletes all markers in the array by removing references to them.
  function deleteMarkers() {
    clearMarkers();
    markers = [];
  }
</script>

</html><?php /**PATH C:\xampp\htdocs\epic-portal-php\resources\views/test.blade.php ENDPATH**/ ?>