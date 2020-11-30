
function getDirection(directionsService, directionsDisplay, start, end){
	var waypts = [];
	var request = {
		origin: start,
		destination: end,
		travelMode: google.maps.TravelMode.DRIVING,
		//transitOptions: TransitOptions,
		//unitSystem: UnitSystem,
		//durationInTraffic: Boolean,
		waypoints: waypts,
		optimizeWaypoints: true,
		//provideRouteAlternatives: Boolean,
		//avoidHighways: Boolean,
		//avoidTolls: Boolean,
		//region: String
	};
	
	directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
			var route = response.routes[0];
			var textDirect = "";
			// For each route, display summary information.
			for (var i = 0; i < route.legs.length; i++) {
				var routeSegment = i + 1;
				//textDirect += '<div class"route-segment">Route Segment: ' + routeSegment + '</div>';
				textDirect += '<div class="start-point">From: ' + route.legs[i].start_address + '</div>';
				textDirect += '<div class="end-point">To:' + route.legs[i].end_address + '</div>';
				textDirect += '<div class="distance">' + route.legs[i].distance.text + '</div>';
			}
			return textDirect;
//			$("#directions-panel-info").html(textDirect);
		}
	});
}

function initializeMap(selector, mapLat, mapLng, mapInfo) {
	var mapInfo = selector.find(".map-info").html();
	var mapLat  = selector.attr("data-lat");
	var mapLng  = selector.attr("data-lng");
	if(mapLat && mapLng){
		var directionsService = new google.maps.DirectionsService();
		var directionsDisplay = new google.maps.DirectionsRenderer();
		var myLatLng     = new google.maps.LatLng(mapLat, mapLng);
		var mapOptions   = { zoom: 14, center: myLatLng };
//		var map          = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		var map          = new google.maps.Map(selector.find(".map-canvas")[0], mapOptions);
		var marker       = new google.maps.Marker({
			position: map.getCenter(),
			map		: map,
			title	: 'Click to zoom'
		});
		if(mapInfo) {// info window
			var infowindow = new google.maps.InfoWindow({ content: mapInfo, position: myLatLng });
			infowindow.open(map, marker);
		}
		directionsDisplay.setMap(map);
//		directionsDisplay.setPanel(document.getElementById('directions-panel'));
		directionsDisplay.setPanel(selector.find(".directions-panel")[0]);
		// add search box
//		var input = (document.getElementById("pac-input")); /** @type {HTMLInputElement} */
		var input = selector.find(".form-control")[0];
		map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		var searchBox = new google.maps.places.SearchBox(input);/** @type {HTMLInputElement} */
		// event search
		google.maps.event.addListener(searchBox, 'places_changed', function() {
			var places 	= searchBox.getPlaces();
			placeLatLng	= places[0].geometry.location;
			placeLat	= placeLatLng.lat();
			placeLng	= placeLatLng.lng();
			selector.find(".directions-panel-info").html(getDirection(directionsService, directionsDisplay, placeLat + "," + placeLng, mapLat + "," + mapLng));
		});
	}
}
$(window).on("load", function(){
	$(".load-google-map").each(function(index, item){
		initializeMap($(item));
	});
});

//google.maps.event.addDomListener(window, 'load', initializeMap);