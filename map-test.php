<!DOCTYPE html>
<html> 
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <title>Google Maps Multiple Markers</title> 
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head> 
<body>
  <div id="map" style="width: 1200px; height: 600px;"></div>

  <script type="text/javascript">
    var locations = [
      ['Bondi Beach', -33.890542, 151.274856, 4],
      ['Coogee Beach', -33.923036, 151.259052, 5],
      ['Cronulla Beach', -34.028249, 151.157507, 3]
    ];
	
	var locations1 = [
      ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
      ['Maroubra Beach', -33.950198, 151.259302, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(-33.92, 151.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i, j;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
	
	setTimeout(loopmap,10000);
	
	function loopmap()
	{
		

		for (j = 0; j < locations1.length; j++) {  
		  marker1 = new google.maps.Marker({
			position: new google.maps.LatLng(locations1[j][1], locations1[j][2]),
			map: map
		  });
		   google.maps.event.addListener(marker1, 'click', (function(marker1, j) {
			return function() {
			  infowindow.setContent(locations1[j][0]);
			  infowindow.open(map, marker1);
			}
		  })(marker1, j));
		}
	}
  </script>
</body>
</html>