/**
 * The MarkerClusterer object.
 * @type {MarkerCluster}
 */
var mc = null;

/**
 * The Map object.
 * @type {google.maps.Map}
 */
var map = null;

/**
 * The MarkerManager object.
 * @type {MarkerManager}
 */
var mgr = null;
var mgrfeb = null;
var mgrmarch = null;
var mgrapril = null;
var mgrmay = null;
var mgrjune = null;
var mgrjuly = null;
var mgraug = null;
var mgrsep = null;
var mgroct = null;
var mgrnov = null;
var mgrdec = null;

/**
 * Marker Manager display/hide flag.
 * @type {boolean}
 */
var showMarketManager = false;
var showMarketFeb = false;
var showMarketMarch = false;
var showMarketApril = false;
var showMarketMay = false;
var showMarketJune = false;
var showMarketJuly = false;
var showMarketAug = false;
var showMarketSep = false;
var showMarketOct = false;
var showMarketNov = false;
var showMarketDec = false;


/**
 * Toggles Marker Manager visibility.
 */
 

function toggleMarkerJan() {
  showMarketManager = !showMarketManager;
  if (mgr) {
    if (showMarketManager) {
      mgr.addMarkers(markers.countriesjan, 0, 5);
      mgr.refresh();
    } else {
      mgr.clearMarkers();
      mgr.refresh();
    }
  } else {
    mgr = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgr, 'loaded', function() {
      mgr.addMarkers(markers.countriesjan, 0, 5);
      mgr.refresh();
    });
  }
}

function toggleMarkerFeb() {
  showMarketFeb = !showMarketFeb;
  if (mgrfeb) {
    if (showMarketFeb) {
      mgrfeb.addMarkers(markers.countriesfeb, 0, 5);
      mgrfeb.refresh();
    } else {
      mgrfeb.clearMarkers();
      mgrfeb.refresh();
    }
  } else {
    mgrfeb = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrfeb, 'loaded', function() {
      mgrfeb.addMarkers(markers.countriesfeb, 0, 5);
      mgrfeb.refresh();
    });
  }
}


function toggleMarkerMarch() {
  showMarketMarch = !showMarketMarch;
  if (mgrmarch) {
    if (showMarketMarch) {
      mgrmarch.addMarkers(markers.countriesmar, 0, 5);
      mgrmarch.refresh();
    } else {
      mgrmarch.clearMarkers();
      mgrmarch.refresh();
    }
  } else {
    mgrmarch = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrmarch, 'loaded', function() {
      mgrmarch.addMarkers(markers.countriesmar, 0, 5);
      mgrmarch.refresh();
    });
  }
}

function toggleMarkerApril() {
  showMarketApril = !showMarketApril;
  if (mgrapril) {
    if (showMarketApril) {
      mgrapril.addMarkers(markers.countriesapril, 0, 5);
      mgrapril.refresh();
    } else {
      mgrapril.clearMarkers();
      mgrapril.refresh();
    }
  } else {
    mgrapril = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrapril, 'loaded', function() {
      mgrapril.addMarkers(markers.countriesapril, 0, 5);
      mgrapril.refresh();
    });
  }
}

function toggleMarkerMay() {
  showMarketMay = !showMarketMay;
  if (mgrmay) {
    if (showMarketMay) {
      mgrmay.addMarkers(markers.countriesmay, 0, 5);
      mgrmay.refresh();
    } else {
      mgrmay.clearMarkers();
      mgrmay.refresh();
    }
  } else {
    mgrmay = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrmay, 'loaded', function() {
      mgrmay.addMarkers(markers.countriesmay, 0, 5);
      mgrmay.refresh();
    });
  }
}

function toggleMarkerJune() {
  showMarketJune = !showMarketJune;
  if (mgrjune) {
    if (showMarketJune) {
      mgrjune.addMarkers(markers.countriesjun, 0, 5);
      mgrjune.refresh();
    } else {
      mgrjune.clearMarkers();
      mgrjune.refresh();
    }
  } else {
    mgrjune = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrjune, 'loaded', function() {
      mgrjune.addMarkers(markers.countriesjun, 0, 5);
      mgrjune.refresh();
    });
  }
}

function toggleMarkerJuly() {
  showMarketJuly = !showMarketJuly;
  if (mgrjuly) {
    if (showMarketJuly) {
      mgrjuly.addMarkers(markers.countriesjuly, 0, 5);
      mgrjuly.refresh();
    } else {
      mgrjuly.clearMarkers();
      mgrjuly.refresh();
    }
  } else {
    mgrjuly = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrjuly, 'loaded', function() {
      mgrjuly.addMarkers(markers.countriesjuly, 0, 5);
      mgrjuly.refresh();
    });
  }
}

function toggleMarkerAug() {
  showMarketAug = !showMarketAug;
  if (mgraug) {
    if (showMarketAug) {
      mgraug.addMarkers(markers.countriesaug, 0, 5);
      mgraug.refresh();
    } else {
      mgraug.clearMarkers();
      mgraug.refresh();
    }
  } else {
    mgraug = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgraug, 'loaded', function() {
      mgraug.addMarkers(markers.countriesaug, 0, 5);
      mgraug.refresh();
    });
  }
}

function toggleMarkerSep() {
  showMarketSep = !showMarketSep;
  if (mgrsep) {
    if (showMarketSep) {
      mgrsep.addMarkers(markers.countriessep, 0, 5);
      mgrsep.refresh();
    } else {
      mgrsep.clearMarkers();
      mgrsep.refresh();
    }
  } else {
    mgrsep = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrsep, 'loaded', function() {
      mgrsep.addMarkers(markers.countriessep, 0, 5);
      mgrsep.refresh();
    });
  }
}

function toggleMarkerOct() {
  showMarketOct = !showMarketOct;
  if (mgroct) {
    if (showMarketOct) {
      mgroct.addMarkers(markers.countriesoct, 0, 5);
      mgroct.refresh();
    } else {
      mgroct.clearMarkers();
      mgroct.refresh();
    }
  } else {
    mgroct = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgroct, 'loaded', function() {
      mgroct.addMarkers(markers.countriesoct, 0, 5);
      mgroct.refresh();
    });
  }
}

function toggleMarkerNov() {
  showMarketNov = !showMarketNov;
  if (mgrnov) {
    if (showMarketNov) {
      mgrnov.addMarkers(markers.countriesnov, 0, 5);
      mgrnov.refresh();
    } else {
      mgrnov.clearMarkers();
      mgrnov.refresh();
    }
  } else {
    mgrnov = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrnov, 'loaded', function() {
      mgrnov.addMarkers(markers.countriesnov, 0, 5);
      mgrnov.refresh();
    });
  }
}

function toggleMarkerDec() {
  showMarketDec = !showMarketDec;
  if (mgrdec) {
    if (showMarketDec) {
      mgrdec.addMarkers(markers.countriesdec, 0, 5);
      mgrdec.refresh();
    } else {
      mgrdec.clearMarkers();
      mgrdec.refresh();
    }
  } else {
    mgrdec = new MarkerManager(map, {trackMarkers: true, maxZoom: 15});
    google.maps.event.addListener(mgrdec, 'loaded', function() {
      mgrdec.addMarkers(markers.countriesdec, 0, 5);
      mgrdec.refresh();
    });
  }
}

/**
 * Initializes the map and listeners.
 */
function initialize() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: new google.maps.LatLng(38, 15),
    zoom: 2,
    mapTypeId: 'terrain'
  });
 

  google.maps.event.addDomListener(document.getElementById('Jan'),'click', toggleMarkerJan);
  google.maps.event.addDomListener(document.getElementById('Feb'),'click', toggleMarkerFeb);
  google.maps.event.addDomListener(document.getElementById('March'),'click', toggleMarkerMarch);
  google.maps.event.addDomListener(document.getElementById('April'),'click', toggleMarkerApril);
  google.maps.event.addDomListener(document.getElementById('May'),'click', toggleMarkerMay);
  google.maps.event.addDomListener(document.getElementById('June'),'click', toggleMarkerJune);
  google.maps.event.addDomListener(document.getElementById('July'),'click', toggleMarkerJuly);
  google.maps.event.addDomListener(document.getElementById('Aug'),'click', toggleMarkerAug);
  google.maps.event.addDomListener(document.getElementById('Sep'),'click', toggleMarkerSep);
  google.maps.event.addDomListener(document.getElementById('Oct'),'click', toggleMarkerOct);
  google.maps.event.addDomListener(document.getElementById('Nov'),'click', toggleMarkerNov);
  google.maps.event.addDomListener(document.getElementById('Dec'),'click', toggleMarkerDec);
  // Prepares the marker object, creating a google.maps.Marker object for each
  // location, place and country
  if (markers) {
    for (var level in markers) {
      for (var i = 0; i < markers[level].length; i++) {
        var details = markers[level][i];
        markers[level][i] = new google.maps.Marker({
          title: details.level,
          position: new google.maps.LatLng(
              details.location[0], details.location[1]),
          clickable: false,
          draggable: true,
          flat: true
        });
      }
    }
  }
}

google.maps.event.addDomListener(window, 'load', initialize);