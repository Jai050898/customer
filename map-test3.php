<!DOCTYPE html>
  <head>
    <title>Solutions to the Too Many Markers problem with the Google Maps JavaScript API V3</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markermanager/1.0/src/markermanager.js"></script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer_compiled.js"></script>
    <script type="text/javascript" src="js/markers.js"></script>

    <script type="text/javascript" src="js/functions.js"></script>
    <style type="text/css">
    #map {
      width: 900px;
      height: 600px;
    }
    #controls {
      margin: 0;
      list-style: none;
    }
    #controls li {
      display: inline;
      margin-left: 25px;
      font-family: Sans-Serif;
      font-size: 10pt;
    }
    #fusion-hm-li {
      visibility: hidden;
      margin-left: 5px;
    }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <ul id="controls">
      <li>
        <label for="mgr-cb">Jan</label>

        <input type="checkbox" id="Jan" name="Jan" />
      </li>
      <li>
        <label for="mc-cb">Feb</label>
        <input type="checkbox" id="Feb" name="Feb" />
      </li>
	  <li>
        <label for="mc-cb">March</label>
        <input type="checkbox" id="March" name="March" />
      </li>
	  <li>
        <label for="mc-cb">April</label>
        <input type="checkbox" id="April" name="April" />
      </li>
	  <li>
        <label for="mc-cb">May</label>
        <input type="checkbox" id="May" name="May" />
      </li>
	  <li>
        <label for="mc-cb">June</label>
        <input type="checkbox" id="June" name="June" />
      </li>
	  <li>
        <label for="mc-cb">July</label>
        <input type="checkbox" id="July" name="July" />
      </li>
	  <li>
        <label for="mc-cb">Aug</label>
        <input type="checkbox" id="Aug" name="Aug" />
      </li>
	  <li>
        <label for="mc-cb">Sep</label>
        <input type="checkbox" id="Sep" name="Sep" />
      </li>
	  <li>
        <label for="mc-cb">Oct</label>
        <input type="checkbox" id="Oct" name="Oct" />
      </li>
	  <li>
        <label for="mc-cb">Nov</label>
        <input type="checkbox" id="Nov" name="Nov" />
      </li>
	  <li>
        <label for="mc-cb">Dec</label>
        <input type="checkbox" id="Dec" name="Dec" />
      </li>
    </ul>
  </body>
</html>