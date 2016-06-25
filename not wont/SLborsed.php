<?php
/**
 * Created by PhpStorm.
 * User: Dushman
 * Date: 5/26/2016
 * Time: 5:37 PM
 */

// globals
var map = null;
var infoWindow = null;
var geoXml = null;
var geoXmlDoc = null;
var myLatLng = null;
var myOptions = null;
var mapCenter = null;
var geocodeTheCountry = true;
var gpolygons = [];

// Fusion Table data ID
var FT_TableID = "19lLpgsKdJRHL2O4fNmJ406ri9JtpIIk8a-AchA"; // 420419;
var CountryName = "Germany";
google.load('visualization', '1', {
  'packages': ['corechart', 'table', 'geomap']
});

function createSidebar() {
    // set the query using the parameters
    var FT_Query2 = "SELECT 'name_0', 'name_1', 'kml_4326' FROM " + FT_TableID + " WHERE name_0 = '" + CountryName + "' ORDER by 'name_1'";
    var queryText = encodeURIComponent(FT_Query2);
    // alert("createSidebar query="+FT_Query2);
    var query = new google.visualization.Query('http://www.google.com/fusiontables/gvizdata?tq=' + queryText);

    //set the callback function
    query.send(getData);
}

// Set a callback to run when the Google Visualization API is loaded.
google.setOnLoadCallback(createSidebar);

var FTresponse = null;

myLatLng = new google.maps.LatLng(37.422104808, -122.0838851);
// these set the initial center, zoom and maptype for the map
// if it is not specified in the query string
var lat = 37.422104808;
var lng = -122.0838851;
var zoom = 18;
var maptype = google.maps.MapTypeId.ROADMAP;
if (!isNaN(lat) && !isNaN(lng)) {
    myLatLng = new google.maps.LatLng(lat, lng);
}
infoWindow = new google.maps.InfoWindow();
//define callback function, this is called when the results are returned
function getData(response) {
    if (!response) {
        alert('no response');
        return;
    }
    if (response.isError()) {
        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
        return;
    }
    FTresponse = response;
    //for more information on the response object, see the documentation
    //http://code.google.com/apis/visualization/documentation/reference.html#QueryResponse
    numRows = response.getDataTable().getNumberOfRows();
    numCols = response.getDataTable().getNumberOfColumns();

    fusiontabledata = "<table><tr>";
    fusiontabledata += "<th>" + response.getDataTable().getColumnLabel(1) + "</th>";
    //   }
    fusiontabledata += "</tr><tr>";

    for (i = 0; i < numRows; i++) {
        fusiontabledata += "<td><a href='javascript:myFTclick(" + i + ")'>" + response.getDataTable().getValue(i, 1) + "</a></td>";
        //    }
        fusiontabledata += "</tr><tr>";
    }
    fusiontabledata += "</table>";
    //display the results on the page
    document.getElementById('sidebar').innerHTML = fusiontabledata;
}

function infoWindowContent(name, description) {
    content = '<div class="FT_infowindow"><h3>' + name +
        '</h3><div>' + description + '</div></div>';
    return content;
}

function myFTclick(row) {
    var description = FTresponse.getDataTable().getValue(row, 0);
    var name = FTresponse.getDataTable().getValue(row, 1);
    if (!gpolygons[row]) {
        var kml = FTresponse.getDataTable().getValue(row, 2);
        // create a geoXml3 parser for the click handlers
        var geoXml = new geoXML3.parser({
      map: map,
      zoom: false,
      infoWindow: infoWindow,
      singleInfoWindow: true
    });

    geoXml.parseKmlString("<Placemark>" + kml + "</Placemark>");
    geoXml.docs[0].gpolygons[0].setMap(null);
    gpolygons[row] = geoXml.docs[0].gpolygons[0].bounds.getCenter();
  }
  var position = gpolygons[row];
  if (!infoWindow) infoWindow = new google.maps.InfoWindow({});
  infoWindow.setOptions({
    content: infoWindowContent(name, description),
    pixelOffset: new google.maps.Size(0, 2),
    position: position
  });
  infoWindow.open(map);
}

function initialize() {
    myOptions = {
        zoom: zoom,
    center: myLatLng,
    mapTypeId: maptype
  };

  map = new google.maps.Map(document.getElementById("map_canvas"),
          myOptions);

  var geocoder = new google.maps.Geocoder();
  if (geocoder && geocodeTheCountry) {
      geocoder.geocode({
      'address': CountryName + " Country"
    }, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                  map.setCenter(results[0].geometry.location);
          map.fitBounds(results[0].geometry.viewport);
        } else {
                  alert("No results found");
              }
          } else {
              alert("Geocode was not successful for the following reason: " + status);
          }
      });
  }

  var FT_Query = "SELECT 'kml_4326' FROM " + FT_TableID + " WHERE 'name_0' = '" + CountryName + "';";
  var FT_Options = {
        suppressInfoWindows: true,
    query: {
            from: FT_TableID,
      select: 'kml_4326',
      where: "'name_0' = '" + CountryName + "';"
    },
    styles: [{
            polygonOptions: {
                fillColor: "#FF0000",
        fillOpacity: 0.35
      }
        }]
  };
  layer = new google.maps.FusionTablesLayer(FT_Options);
  layer.setMap(map);

  google.maps.event.addListener(layer, "click", function(event) {
      infoWindow.close();
      infoWindow.setContent(infoWindowContent(event.row.name_1.value, event.row.name_0.value));
      infoWindow.setPosition(event.latLng);
      infoWindow.open(map);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
?>
