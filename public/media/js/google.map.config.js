// Draw the map
function initializeGoogleMaps() {

	"use strict";

	// Determine the map element
	var element = document.getElementById('map-canvas');

	// Stop here if there is no map element
	if(element == null) {
		return;
	}

	// Set the coordinates of your location
	var center = {lat: 32.7758142, lng: -96.7963734};
	var zoom = 9;

	// Determine the map
	var map = new google.maps.Map(element, {
		'zoom': zoom,
		'center': center,
		'scrollwheel': false
	});

	// Place a marker in the center of the map
	var marker = new google.maps.Marker({
		'position': center,
		'map': map
	});

	var section1 = new google.maps.Polygon({
		strokeColor: '#FF0000',
		strokeOpacity: 1,
		strokeWeight: 1,
		fillColor: '#FF0000',
		fillOpacity: 0.1,
		map: map,
		paths: [
			{'lat': 32.738079, 'lng': -97.481701}, // I820 @ I30 (1, 4, 5)
			{'lat': 32.826600, 'lng': -97.479787}, // H199 @ Buffalo Rd
			{'lat': 32.968057, 'lng': -97.420441}, // H287 @ Avondale Haslet Rd
			{'lat': 33.035367, 'lng': -97.341450}, // H114 @ Train Tracks
			{'lat': 33.095249, 'lng': -97.391053}, // Median of S County Line Rd between Illinois St and FM407
			{'lat': 33.136116, 'lng': -97.289642}, // FM156 @ Eakin Cemetery Rd
			{'lat': 33.315024, 'lng': -97.179700}, // FM156 @ I35
			{'lat': 33.366840, 'lng': -97.179110}, // I35 @ W Chapman Rd
			{'lat': 33.372471, 'lng': -97.157653}, // W Chapman Rd becomes FM455 W @ Marion Rd
			{'lat': 33.369264, 'lng': -97.115360}, // FM455 W becomes FM455 E @ FM2164
			{'lat': 33.368125, 'lng': -96.964353}, // FM455 E @ H377
			{'lat': 33.298755, 'lng': -96.982682}, // H377 @ Spring Hill Rd
			{'lat': 33.299251, 'lng': -96.936764}, // Spring Hill Rd becomes FM428 @ FM2931
			{'lat': 33.295142, 'lng': -96.891918}, // FM428 @ FM1385 (N)
			{'lat': 33.279877, 'lng': -96.892761}, // FM428 @ FM1385 (S)
			{'lat': 33.307039, 'lng': -96.812793}, // FM428 @ Dallas Pkwy (1 & 2)
			{'lat': 33.219069, 'lng': -96.819522}, // Dallas Pkwy @ H380 (1 & 2)
			{'lat': 33.219097, 'lng': -96.880371}, // H380 @ FM423 (1 & 2)
			{'lat': 33.109588, 'lng': -96.891926}, // FM423 becomes Main St @ Lewisvill Lakee (Bridge) (1 & 2)
			{'lat': 33.065816, 'lng': -96.889150}, // Main St @ H121 (1, 2, 4)
			{'lat': 32.999652, 'lng': -96.959225}, // H121 @ I35E (1 & 4)
			{'lat': 32.982107, 'lng': -96.930815}, // I35E @ PGBT (1 & 4)
			{'lat': 32.912052, 'lng': -96.943334}, // PGBT @ I635 (1 & 4)
			{'lat': 32.836997, 'lng': -97.016883}, // I635 @ H183 (1 & 4)
			{'lat': 32.831531, 'lng': -97.205943}, // H183 @ I820 (1 & 4)
			{'lat': 32.839307, 'lng': -97.264200}, // I820 @ H377 (1 & 4)
			{'lat': 32.839831, 'lng': -97.312953}, // I820 @ I35W (1 & 4)
			{'lat': 32.808896, 'lng': -97.418526}, // I820 @ H199 (1 & 4)
			// {'lat': 32.738079, 'lng': -97.481701}, // I820 @ I30 (1, 4, 5)
		]
	});

	var section2 = new google.maps.Polygon({
		strokeColor: '#FF8800',
		strokeOpacity: 0.8,
		strokeWeight: 1,
		fillColor: '#FF8800',
		fillOpacity: 0.2,
		map: map,
		paths: [
			{'lat': 33.307039, 'lng': -96.812793}, // FM428 @ Dallas Pkwy (1 & 2)
			{'lat': 33.219069, 'lng': -96.819522}, // Dallas Pkwy @ H380 (1 & 2)
			{'lat': 33.219097, 'lng': -96.880371}, // H380 @ FM423 (1 & 2)
			{'lat': 33.109588, 'lng': -96.891926}, // FM423 becomes Main St @ Lewisvill Lakee (Bridge) (1 & 2)
			{'lat': 33.065816, 'lng': -96.889150}, // Main St @ H121 (1, 2, 4)
			{'lat': 33.090969, 'lng': -96.822943}, // H121 @ DNT (2 & 4)
			{'lat': 33.012673, 'lng': -96.829302}, // DNT @ PGBT (2, 3, 4)
			{'lat': 33.004098, 'lng': -96.708141}, // PGBT @ H75 (2 & 3)
			{'lat': 32.950663, 'lng': -96.619147}, // PGBT @ H78 (2 & 3)
			{'lat': 33.022318, 'lng': -96.456469}, // H78 @ H205 (2 & 3)
			{'lat': 33.157979, 'lng': -96.376628}, // H78 @ H308
			{'lat': 33.376147, 'lng': -96.398933}, // H78 @ H160
			{'lat': 33.383647, 'lng': -96.401345}, // H160 @ H121
			{'lat': 33.438947, 'lng': -96.402369}, // H160 @ FM121
			{'lat': 33.421605, 'lng': -96.588840}, // FM121 @ H75
			{'lat': 33.437095, 'lng': -96.714343}, // FM121 becomes E Main St @ Jc Maples Rd
			{'lat': 33.446776, 'lng': -96.742786}, // E Main becomes W Main St @ Preston Rd / H289
			{'lat': 33.304816, 'lng': -96.783617}, // Preston Rd / H289 @ W Glendenning Pkwy
			{'lat': 33.304978, 'lng': -96.799817}, // W Glendenning Pkwy @ FM55
			{'lat': 33.306977, 'lng': -96.799835}, // FM55 @ FM1214
			{'lat': 33.307008, 'lng': -96.801900}, // FM1214 @ FM428
			// {'lat': 33.307039, 'lng': -96.812793}, // FM428 @ Dallas Pkwy (1 & 2)
		]
	});

	var section3 = new google.maps.Polygon({
		strokeColor: '#99AA00',
		strokeOpacity: 0.8,
		strokeWeight: 1,
		fillColor: '#99AA00',
		fillOpacity: 0.2,
		map: map,
		paths: [
			{'lat': 33.012673, 'lng': -96.829302}, // DNT @ PGBT (2 & 3)
			{'lat': 33.004098, 'lng': -96.708141}, // PGBT @ H75 (2 & 3)
			{'lat': 32.950663, 'lng': -96.619147}, // PGBT @ H78 (2 & 3)
			{'lat': 33.022318, 'lng': -96.456469}, // H78 @ H205 (2 & 3)
			{'lat': 32.998038, 'lng': -96.465410}, // H205 @ FM483
			{'lat': 32.979665, 'lng': -96.466601}, // H205 @ John King Blvd
			{'lat': 32.965571, 'lng': -96.452484}, // John King Blvd @ FM552
			{'lat': 32.965724, 'lng': -96.433427}, // FM552 @ FM1141
			{'lat': 32.967277, 'lng': -96.416342}, // FM552 @ N Stodghill Rd
			{'lat': 32.967258, 'lng': -96.404808}, // FM552 becomes E FM552 @ N Smith Rd
			{'lat': 32.967067, 'lng': -96.385721}, // E FM552 @ N King Rd
			{'lat': 32.966731, 'lng': -96.373076}, // E FM552 @ H66
			{'lat': 32.966922, 'lng': -96.369192}, // H66 @ Farm Rd 1138
			{'lat': 32.968913, 'lng': -96.357362}, // H66 @ N Sorrells Rd / S Floyd Rd
			{'lat': 32.973212, 'lng': -96.340539}, // H66 @ Erby Campbell Rd
			{'lat': 32.975119, 'lng': -96.332485}, // H66 @ S Elm St
			{'lat': 32.972750, 'lng': -96.332007}, // S Elm St @ W Lamar St
			{'lat': 32.969246, 'lng': -96.331944}, // S Elm St becomes S FM 548 @ I30
			{'lat': 32.955421, 'lng': -96.332125}, // S FM 548 @ Cookston Ln
			{'lat': 32.951663, 'lng': -96.334205}, // S FM 548 @ Starlight Ln
			{'lat': 32.938463, 'lng': -96.334282}, // S FM 548 @ Crenshaw Rd
			{'lat': 32.938463, 'lng': -96.334282}, // S FM 548 @ Crenshaw Rd
			{'lat': 32.913494, 'lng': -96.339803}, // S FM 548 @ N Munson Rd
			{'lat': 32.899722, 'lng': -96.339931}, // S FM 548 @ TX276
			{'lat': 32.899822, 'lng': -96.360395}, // TX276 @ Remington Dr
			{'lat': 32.904547, 'lng': -96.379274}, // TX276 @ Sun Dr
			{'lat': 32.904723, 'lng': -96.400564}, // TX276 @ Rochelle Rd
			{'lat': 32.906606, 'lng': -96.418310}, // TX276 @ Corperate Crossing / S FM 549
			{'lat': 32.906650, 'lng': -96.431072}, // TX276 @ John King Blvd
			{'lat': 32.907118, 'lng': -96.448604}, // TX276 @ S Goliad St / TX205
			{'lat': 32.909197, 'lng': -96.450067}, // S Goliad St / TX205 @ I30
			{'lat': 32.901132, 'lng': -96.457802}, // I30 @ Greencast Bldv / Mims Rd
			{'lat': 32.897171, 'lng': -96.469886}, // I30 @ Ridge Rd (3 & 5)
			{'lat': 32.876355, 'lng': -96.518425}, // I30 @ Dalrock Rd (3 & 5)
			{'lat': 32.864752, 'lng': -96.543930}, // I30 @ Bass Pro Dr (3 & 5)
			{'lat': 32.853565, 'lng': -96.562029}, // I30 @ Zion Rd (3 & 5)
			{'lat': 32.840086, 'lng': -96.595631}, // I30 @ Broadway (3 & 5)
			{'lat': 32.832954, 'lng': -96.612718}, // I30 @ Northwest Dr (3 & 5)
			{'lat': 32.823146, 'lng': -96.629736}, // I30 @ I635 (3 & 5)
			{'lat': 32.799830, 'lng': -96.676302}, // I30 @ HWY 80 (3 & 5)
			{'lat': 32.793972, 'lng': -96.699968}, // I30 @ N Jim Miller Rd (3 & 5)
			{'lat': 32.790992, 'lng': -96.755995}, // I30 @ Barry Ave (3 & 5)
			{'lat': 32.778931, 'lng': -96.782065}, // I30 @ I375 (3 & 5)
			{'lat': 32.770008, 'lng': -96.808471}, // I30 @ I35E (3, 4, 5)
			{'lat': 32.782245, 'lng': -96.811811}, // I35E @ TX366 (3 & 4)
			{'lat': 32.798591, 'lng': -96.815443}, // I35E @ DNT (3 & 4)
			{'lat': 32.807417, 'lng': -96.817824}, // DNT @ Maple Ave (3 & 4)
			{'lat': 32.815983, 'lng': -96.817469}, // DNT @ Cedar Springs Rd (3 & 4)
			{'lat': 32.886600, 'lng': -96.808921}, // DNT @ Meaders Ln (3 & 4)
			{'lat': 32.894799, 'lng': -96.809358}, // DNT @ Royal Ln (3 & 4)
			{'lat': 32.926032, 'lng': -96.820704}, // DNT @ I635 (3 & 4)
			{'lat': 32.932920, 'lng': -96.822067}, // DNT @ Alpha Rd (3 & 4)
			{'lat': 32.954045, 'lng': -96.821968}, // DNT @ Belt Ln Rd (3 & 4)
			{'lat': 32.968634, 'lng': -96.821504}, // DNT @ Keller Springs Rd (3 & 4)
			{'lat': 32.990265, 'lng': -96.829156}, // DNT @ E Trinity Mills Rd (3 & 4)
			// {'lat': 33.012673, 'lng': -96.829302}, // DNT @ PGBT (2 & 3)
		]
	});

	var section4 = new google.maps.Polygon({
	    strokeColor: '#00AA00',
	    strokeOpacity: 0.8,
	    strokeWeight: 1,
	    fillColor: '#00AA00',
	    fillOpacity: 0.1,
	    map: map,
	    paths: [
	    	{'lat': 32.738079, 'lng': -97.481701}, // I820 @ I30 (1, 4, 5)
			{'lat': 32.808896, 'lng': -97.418526}, // I820 @ H199 (1 & 4)
			{'lat': 32.839831, 'lng': -97.312953}, // I820 @ I35W (1 & 4)
			{'lat': 32.839307, 'lng': -97.264200}, // I820 @ H377 (1 & 4)
			{'lat': 32.831531, 'lng': -97.205943}, // H183 @ I820 (1 & 4)
			{'lat': 32.836997, 'lng': -97.016883}, // I635 @ H183 (1 & 4)
			{'lat': 32.912052, 'lng': -96.943334}, // PGBT @ I635 (1 & 4)
			{'lat': 32.982107, 'lng': -96.930815}, // I35E @ PGBT (1 & 4)
			{'lat': 32.999652, 'lng': -96.959225}, // H121 @ I35E (1 & 4)
			{'lat': 33.065816, 'lng': -96.889150}, // Main St @ H121 (1, 2, 4)
			{'lat': 33.090969, 'lng': -96.822943}, // H121 @ DNT (2 & 4)
			{'lat': 33.012673, 'lng': -96.829302}, // DNT @ PGBT (2, 3, 4)
			{'lat': 32.990265, 'lng': -96.829156}, // DNT @ E Trinity Mills Rd (3 & 4)
			{'lat': 32.968634, 'lng': -96.821504}, // DNT @ Keller Springs Rd (3 & 4)
			{'lat': 32.954045, 'lng': -96.821968}, // DNT @ Belt Ln Rd (3 & 4)
			{'lat': 32.932920, 'lng': -96.822067}, // DNT @ Alpha Rd (3 & 4)
			{'lat': 32.926032, 'lng': -96.820704}, // DNT @ I635 (3 & 4)
			{'lat': 32.894799, 'lng': -96.809358}, // DNT @ Royal Ln (3 & 4)
			{'lat': 32.886600, 'lng': -96.808921}, // DNT @ Meaders Ln (3 & 4)
			{'lat': 32.815983, 'lng': -96.817469}, // DNT @ Cedar Springs Rd (3 & 4)
			{'lat': 32.807417, 'lng': -96.817824}, // DNT @ Maple Ave (3 & 4)
			{'lat': 32.798591, 'lng': -96.815443}, // I35E @ DNT (3 & 4)
			{'lat': 32.782245, 'lng': -96.811811}, // I35E @ TX366 (3 & 4)
			{'lat': 32.770008, 'lng': -96.808471}, // I30 @ I35E (3, 4, 5)
			{'lat': 32.769185, 'lng': -96.822894}, // I30 @ N Beckley Ave (4 & 5)
			{'lat': 32.767372, 'lng': -96.835662}, // I30 @ Sylvan Ave (4 & 5)
			{'lat': 32.764537, 'lng': -96.850610}, // I30 @ Fort Worth Ave (4 & 5)
			{'lat': 32.766329, 'lng': -96.856684}, // I30 @ N Hampton Rd (4 & 5)
			{'lat': 32.767119, 'lng': -96.862509}, // I30 @ Postal Way (4 & 5)
			{'lat': 32.767469, 'lng': -96.873892}, // I30 @ N Westmoreland Rd (4 & 5)
			{'lat': 32.766593, 'lng': -96.895781}, // I30 @ N Cockerell Hill Rd (4 & 5)
			{'lat': 32.766470, 'lng': -96.902472}, // I30 @ Chalk Hill Rd (4 & 5)
			{'lat': 32.766227, 'lng': -96.914707}, // I30 @ N Walton Walker Blvd (4 & 5)
			{'lat': 32.762192, 'lng': -96.960150}, // I30 @ MacArthur Blvd (4 & 5)
			{'lat': 32.758685, 'lng': -96.994945}, // I30 @ S Belt Line Rd (4 & 5)
			{'lat': 32.759506, 'lng': -97.012295}, // I30 @ NW 7th St (4 & 5)
			{'lat': 32.759537, 'lng': -97.019891}, // I30 @ N Carrier Pkwy (4 & 5)
			{'lat': 32.759547, 'lng': -97.029015}, // I30 @ PGBT (4 & 5)
			{'lat': 32.759635, 'lng': -97.063333}, // I30 @ TX-360 (4 & 5)
			{'lat': 32.759768, 'lng': -97.097136}, // I30 @ N Collins St (4 & 5)
			{'lat': 32.759768, 'lng': -97.114497}, // I30 @ N Cooper St (4 & 5)
			{'lat': 32.759790, 'lng': -97.131622}, // I30 @ N Fielder Rd (4 & 5)
			{'lat': 32.760077, 'lng': -97.149089}, // I30 @ NW Gree Oaks Blvd (4 & 5)
			{'lat': 32.760121, 'lng': -97.167159}, // I30 @ Eastchase Pkwy (4 & 5)
			{'lat': 32.759900, 'lng': -97.183259}, // I30 @ Cooks Ln (4 & 5)
			{'lat': 32.759756, 'lng': -97.197540}, // I30 @ Sandy Ln (4 & 5)
			{'lat': 32.759830, 'lng': -97.214083}, // I30 @ I820 (East Intersection) (4 & 5)
			{'lat': 32.757994, 'lng': -97.261768}, // I30 @ Oakland Blvd (4 & 5)
			{'lat': 32.749578, 'lng': -97.289433}, // I30 @ Beach St / S Beach St (4 & 5)
			{'lat': 32.748487, 'lng': -97.303290}, // I30 @ Riverside Dr (4 & 5)
			{'lat': 32.746616, 'lng': -97.319511}, // I30 @ I35W (4 & 5)
			{'lat': 32.744695, 'lng': -97.325924}, // I30 @ Main St / S Main St (4 & 5)
			{'lat': 32.744789, 'lng': -97.330082}, // I30 @ Jennings Ave (4 & 5)
			{'lat': 32.743745, 'lng': -97.337582}, // I30 @ Henderson St (4 & 5)
			{'lat': 32.742304, 'lng': -97.341813}, // I30 @ Summit Ave / 8th Ave (4 & 5)
			{'lat': 32.737130, 'lng': -97.353259}, // I30 @ N Forest Park Blvd / Forest Part Blvd (4 & 5)
			{'lat': 32.733679, 'lng': -97.361469}, // I30 @ University Dr / S University Dr (4 & 5)
			{'lat': 32.732773, 'lng': -97.370001}, // I30 @ Montgomery St (4 & 5)
			{'lat': 32.732817, 'lng': -97.378649}, // I30 @ Clover Ln (4 & 5)
			{'lat': 32.732974, 'lng': -97.387752}, // I30 @ Hulen St (4 & 5)
			{'lat': 32.733055, 'lng': -97.398745}, // I30 @ Merrik St (4 & 5)
			{'lat': 32.733718, 'lng': -97.404048}, // I30 @ Camp Bowie Blvd (4 & 5)
			{'lat': 32.734238, 'lng': -97.407904}, // I30 @ Horne St (4 & 5)
			{'lat': 32.734552, 'lng': -97.413547}, // I30 @ Guliford Rd / Bryant Irvin Rd (4 & 5)
			{'lat': 32.734698, 'lng': -97.418673}, // I30 @ Westridge Ave (4 & 5)
			{'lat': 32.734676, 'lng': -97.424161}, // I30 @ Ridgemar Blvd (4 & 5)
			{'lat': 32.735560, 'lng': -97.434367}, // I30 @ Green Oaks Rd (4 & 5)
			{'lat': 32.736531, 'lng': -97.440762}, // I30 @ Alta Mere Dr (4 & 5)
			{'lat': 32.737650, 'lng': -97.445468}, // I30 @ Lockheed Blvd (4 & 5)
			{'lat': 32.738126, 'lng': -97.451770}, // I30 @ S Cherry Ln (4 & 5)
			{'lat': 32.738180, 'lng': -97.466921}, // I30 @ S Las Vegas Trail / Las Vegas Trail (4 & 5)
			{'lat': 32.738241, 'lng': -97.475944}, // I30 @ Dale Ln (4 & 5)
	    	// {'lat': 32.738079, 'lng': -97.481701}, // I820 @ I30 (1, 4, 5)
	    ]
	});

	var section5 = new google.maps.Polygon({
	    strokeColor: '#00AAAA',
	    strokeOpacity: 0.8,
	    strokeWeight: 1,
	    fillColor: '#00AAAA',
	    fillOpacity: 0.2,
	    map: map,
	    paths: [
			{'lat': 32.897171, 'lng': -96.469886}, // I30 @ Ridge Rd (3 & 5)
			{'lat': 32.876355, 'lng': -96.518425}, // I30 @ Dalrock Rd (3 & 5)
			{'lat': 32.864752, 'lng': -96.543930}, // I30 @ Bass Pro Dr (3 & 5)
			{'lat': 32.853565, 'lng': -96.562029}, // I30 @ Zion Rd (3 & 5)
			{'lat': 32.840086, 'lng': -96.595631}, // I30 @ Broadway (3 & 5)
			{'lat': 32.832954, 'lng': -96.612718}, // I30 @ Northwest Dr (3 & 5)
			{'lat': 32.823146, 'lng': -96.629736}, // I30 @ I635 (3 & 5)
			{'lat': 32.799830, 'lng': -96.676302}, // I30 @ HWY 80 (3 & 5)
			{'lat': 32.793972, 'lng': -96.699968}, // I30 @ N Jim Miller Rd (3 & 5)
			{'lat': 32.790992, 'lng': -96.755995}, // I30 @ Barry Ave (3 & 5)
			{'lat': 32.778931, 'lng': -96.782065}, // I30 @ I375 (3 & 5)
			{'lat': 32.770008, 'lng': -96.808471}, // I30 @ I35E (3, 4, 5)
			{'lat': 32.770008, 'lng': -96.808471}, // I30 @ I35E (3, 4, 5)
			{'lat': 32.769185, 'lng': -96.822894}, // I30 @ N Beckley Ave (4 & 5)
			{'lat': 32.767372, 'lng': -96.835662}, // I30 @ Sylvan Ave (4 & 5)
			{'lat': 32.764537, 'lng': -96.850610}, // I30 @ Fort Worth Ave (4 & 5)
			{'lat': 32.766329, 'lng': -96.856684}, // I30 @ N Hampton Rd (4 & 5)
			{'lat': 32.767119, 'lng': -96.862509}, // I30 @ Postal Way (4 & 5)
			{'lat': 32.767469, 'lng': -96.873892}, // I30 @ N Westmoreland Rd (4 & 5)
			{'lat': 32.766593, 'lng': -96.895781}, // I30 @ N Cockerell Hill Rd (4 & 5)
			{'lat': 32.766470, 'lng': -96.902472}, // I30 @ Chalk Hill Rd (4 & 5)
			{'lat': 32.766227, 'lng': -96.914707}, // I30 @ N Walton Walker Blvd (4 & 5)
			{'lat': 32.762192, 'lng': -96.960150}, // I30 @ MacArthur Blvd (4 & 5)
			{'lat': 32.758685, 'lng': -96.994945}, // I30 @ S Belt Line Rd (4 & 5)
			{'lat': 32.759506, 'lng': -97.012295}, // I30 @ NW 7th St (4 & 5)
			{'lat': 32.759537, 'lng': -97.019891}, // I30 @ N Carrier Pkwy (4 & 5)
			{'lat': 32.759547, 'lng': -97.029015}, // I30 @ PGBT (4 & 5)
			{'lat': 32.759635, 'lng': -97.063333}, // I30 @ TX-360 (4 & 5)
			{'lat': 32.759768, 'lng': -97.097136}, // I30 @ N Collins St (4 & 5)
			{'lat': 32.759768, 'lng': -97.114497}, // I30 @ N Cooper St (4 & 5)
			{'lat': 32.759790, 'lng': -97.131622}, // I30 @ N Fielder Rd (4 & 5)
			{'lat': 32.760077, 'lng': -97.149089}, // I30 @ NW Gree Oaks Blvd (4 & 5)
			{'lat': 32.760121, 'lng': -97.167159}, // I30 @ Eastchase Pkwy (4 & 5)
			{'lat': 32.759900, 'lng': -97.183259}, // I30 @ Cooks Ln (4 & 5)
			{'lat': 32.759756, 'lng': -97.197540}, // I30 @ Sandy Ln (4 & 5)
			{'lat': 32.759830, 'lng': -97.214083}, // I30 @ I820 (East Intersection) (4 & 5)
			{'lat': 32.757994, 'lng': -97.261768}, // I30 @ Oakland Blvd (4 & 5)
			{'lat': 32.749578, 'lng': -97.289433}, // I30 @ Beach St / S Beach St (4 & 5)
			{'lat': 32.748487, 'lng': -97.303290}, // I30 @ Riverside Dr (4 & 5)
			{'lat': 32.746616, 'lng': -97.319511}, // I30 @ I35W (4 & 5)
			{'lat': 32.744695, 'lng': -97.325924}, // I30 @ Main St / S Main St (4 & 5)
			{'lat': 32.744789, 'lng': -97.330082}, // I30 @ Jennings Ave (4 & 5)
			{'lat': 32.743745, 'lng': -97.337582}, // I30 @ Henderson St (4 & 5)
			{'lat': 32.742304, 'lng': -97.341813}, // I30 @ Summit Ave / 8th Ave (4 & 5)
			{'lat': 32.737130, 'lng': -97.353259}, // I30 @ N Forest Park Blvd / Forest Part Blvd (4 & 5)
			{'lat': 32.733679, 'lng': -97.361469}, // I30 @ University Dr / S University Dr (4 & 5)
			{'lat': 32.732773, 'lng': -97.370001}, // I30 @ Montgomery St (4 & 5)
			{'lat': 32.732817, 'lng': -97.378649}, // I30 @ Clover Ln (4 & 5)
			{'lat': 32.732974, 'lng': -97.387752}, // I30 @ Hulen St (4 & 5)
			{'lat': 32.733055, 'lng': -97.398745}, // I30 @ Merrik St (4 & 5)
			{'lat': 32.733718, 'lng': -97.404048}, // I30 @ Camp Bowie Blvd (4 & 5)
			{'lat': 32.734238, 'lng': -97.407904}, // I30 @ Horne St (4 & 5)
			{'lat': 32.734552, 'lng': -97.413547}, // I30 @ Guliford Rd / Bryant Irvin Rd (4 & 5)
			{'lat': 32.734698, 'lng': -97.418673}, // I30 @ Westridge Ave (4 & 5)
			{'lat': 32.734676, 'lng': -97.424161}, // I30 @ Ridgemar Blvd (4 & 5)
			{'lat': 32.735560, 'lng': -97.434367}, // I30 @ Green Oaks Rd (4 & 5)
			{'lat': 32.736531, 'lng': -97.440762}, // I30 @ Alta Mere Dr (4 & 5)
			{'lat': 32.737650, 'lng': -97.445468}, // I30 @ Lockheed Blvd (4 & 5)
			{'lat': 32.738126, 'lng': -97.451770}, // I30 @ S Cherry Ln (4 & 5)
			{'lat': 32.738180, 'lng': -97.466921}, // I30 @ S Las Vegas Trail / Las Vegas Trail (4 & 5)
			{'lat': 32.738241, 'lng': -97.475944}, // I30 @ Dale Ln (4 & 5)
	    	{'lat': 32.738079, 'lng': -97.481701}, // I820 @ I30 (1, 4, 5)
	    	{'lat': 32.724555, 'lng': -97.480371}, // I820 @ TX-580
	    	{'lat': 32.702189, 'lng': -97.472930}, // I820 @ Team Ranch Rd
	    	{'lat': 32.684466, 'lng': -97.459603}, // I820 @ HW377
	    	{'lat': 32.682993, 'lng': -97.460629}, // HW377 @ Interstate 820 Loop
	    	{'lat': 32.671268, 'lng': -97.471294}, // HW377 @ Westpark Dr
	    	{'lat': 32.668677, 'lng': -97.474570}, // HW377 @ Winscott Rd
	    	{'lat': 32.663974, 'lng': -97.471227}, // Winscott Rd @ Beach Rd
	    	{'lat': 32.662337, 'lng': -97.463404}, // Winscott Rd @ Lakeside Dr
	    	{'lat': 32.646476, 'lng': -97.441605}, // Lakeside Dr @ Benbrook Lake Dr / Driks Rd
	    	{'lat': 32.645476, 'lng': -97.416190}, // Driks Rd @ Chrisholm Trail Pkwy
	    	{'lat': 32.629695, 'lng': -97.412935}, // Chrisholm Trail Pkwy @ Sycamore School Rd
	    	{'lat': 32.631779, 'lng': -97.407479}, // Sycamore School Rd @ Summer Creek Dr
	    	{'lat': 32.632878, 'lng': -97.401288}, // Sycamore School Rd @ Fallen Trail / Meadowlark Dr
	    	{'lat': 32.632055, 'lng': -97.396836}, // Sycamore School Rd @ Star Ridge Rd / Creekmoor Dr
	    	{'lat': 32.631784, 'lng': -97.394716}, // Sycamore School Rd @ Silveridge Dr
	    	{'lat': 32.633832, 'lng': -97.390331}, // Sycamore School Rd @ S Hulen St
	    	{'lat': 32.636057, 'lng': -97.385613}, // Sycamore School Rd @ Parkwood Ln
	    	{'lat': 32.636052, 'lng': -97.382734}, // Sycamore School Rd @ 4 Winds Dr
	    	{'lat': 32.634842, 'lng': -97.379766}, // Sycamore School Rd @ W Cleburne Rd
	    	{'lat': 32.634234, 'lng': -97.376366}, // Sycamore School Rd @ Biscayn Ln
	    	{'lat': 32.634921, 'lng': -97.369765}, // Sycamore School Rd @ McCart Ave
	    	{'lat': 32.634929, 'lng': -97.348555}, // Sycamore School Rd / W Everman Pkwy @ Crowley Rd
	    	{'lat': 32.634153, 'lng': -97.345808}, // W Everman Pkwy @ Sycamore School Rd
	    	{'lat': 32.635049, 'lng': -97.343422}, // Sycamore School Rd @ Gladwater Dr
	    	{'lat': 32.635114, 'lng': -97.321505}, // Sycamore School Rd @ I35W
	    	{'lat': 32.614001, 'lng': -97.321632}, // I35W @ W Risinger Rd / E Risinger Rd
	    	{'lat': 32.609327, 'lng': -97.321158}, // I35W @ Rustic View Rd
	    	{'lat': 32.599133, 'lng': -97.319501}, // I35W @ Garden Acres Dr
	    	{'lat': 32.577720, 'lng': -97.319585}, // I35W @ FM1187
	    	{'lat': 32.579963, 'lng': -97.305437}, // FM1187 @ Wildcat Way N
	    	{'lat': 32.579820, 'lng': -97.292754}, // FM1187 @ Oak Grove Rd S
	    	{'lat': 32.579572, 'lng': -97.263355}, // FM1187 @ Stephenson Levy Rd
	    	{'lat': 32.580130, 'lng': -97.252593}, // FM1187 @ Oak Grove Rendon Rd / J Rendon Rd
	    	{'lat': 32.579892, 'lng': -97.241481}, // FM1187 @ Rendon Rd
	    	{'lat': 32.576192, 'lng': -97.232941}, // FM1187 @ Rendon New Hope Rd
	    	{'lat': 32.576128, 'lng': -97.226472}, // FM1187 @ Roberts Ln
	    	{'lat': 32.576393, 'lng': -97.224199}, // FM1187 @ Teague Rd
	    	{'lat': 32.575297, 'lng': -97.215773}, // FM1187 @ Drury Cross Rd
	    	{'lat': 32.574168, 'lng': -97.210398}, // FM1187 @ Wooded Acres Trail
	    	{'lat': 32.573945, 'lng': -97.206847}, // FM1187 @ Cabot Estates Dr
	    	{'lat': 32.574081, 'lng': -97.205181}, // FM1187 @ Willow Creek Cr / Skyview
	    	{'lat': 32.576382, 'lng': -97.199290}, // FM1187 @ Bennet Lawson Rd
	    	{'lat': 32.577100, 'lng': -97.191088}, // FM1187 @ Exchange Dr
	    	{'lat': 32.590698, 'lng': -97.162199}, // FM1187 / W Debbie Ln @ N Main St
	    	{'lat': 32.591757, 'lng': -97.153955}, // W Debbie Ln @ Russell Ln
	    	{'lat': 32.591951, 'lng': -97.146515}, // W Debbie Ln @ Town Crossing Blvd
	    	{'lat': 32.593132, 'lng': -97.143657}, // W Debbie Ln / E Debbie Ln @ US-287
	    	{'lat': 32.581659, 'lng': -97.132138}, // US-287 @ N Walnut Creek Dr
	    	{'lat': 32.568030, 'lng': -97.117425}, // US-287 @ E Broad St
	    	{'lat': 32.571517, 'lng': -97.108995}, // E Broad St @ Cannon Dr
	    	{'lat': 32.568546, 'lng': -97.097349}, // E Broad St @ Matlock Rd
	    	{'lat': 32.577589, 'lng': -97.080300}, // E Broad St @ TX-360
	    	{'lat': 32.579662, 'lng': -97.075490}, // E Broad St @ N Holland Rd
	    	{'lat': 32.581136, 'lng': -97.069496}, // E Broad St @ Lowes Farm Pkwy
	    	{'lat': 32.583372, 'lng': -97.064917}, // E Broad St @ Genesis Dr
	    	{'lat': 32.584999, 'lng': -97.061395}, // E Broad St / England Pkwy (S) @ Day Miar Rd
	    	{'lat': 32.586313, 'lng': -97.058179}, // England Pkwy (S) @ Medina
	    	{'lat': 32.588930, 'lng': -97.053790}, // England Pkwy (S) @ S Grand Peninsula Dr
	    	{'lat': 32.590660, 'lng': -97.049359}, // England Pkwy (S) @ S Camino Lagos
	    	{'lat': 32.591959, 'lng': -97.044765}, // England Pkwy (S) @ Arlington Webb Britton Rd
	    	{'lat': 32.592944, 'lng': -97.040290}, // England Pkwy (S) @ Magellan
	    	{'lat': 32.593822, 'lng': -97.035570}, // England Pkwy (S) @ Lake Ridge Pkwy
	    	{'lat': 32.591399, 'lng': -97.034101}, // Lake Ridge Pkwy @ S Grand Peninsula Dr
	    	{'lat': 32.589502, 'lng': -97.032004}, // Lake Ridge Pkwy @ Villa Di Lago Dr
	    	{'lat': 32.582177, 'lng': -97.021302}, // Lake Ridge Pkwy becomes Mansfield Rd
	    	{'lat': 32.581824, 'lng': -97.010309}, // Mansfield Rd @ Anderson Rd
	    	{'lat': 32.582919, 'lng': -97.006511}, // Mansfield Rd @ Lake Ridge Pkwy
	    	{'lat': 32.586894, 'lng': -96.997151}, // Mansfield Rd @ Mystic Shore Dr
	    	{'lat': 32.588255, 'lng': -96.993251}, // Mansfield Rd @ S Lakeview Dr
	    	{'lat': 32.589671, 'lng': -96.987996}, // Mansfield Rd @ Royal Vista Dr
	    	{'lat': 32.590999, 'lng': -96.977509}, // Mansfield Rd @ W Belt Line Rd
	    	{'lat': 32.589987, 'lng': -96.962713}, // W Belt Line Rd @ Carrell St
	    	{'lat': 32.589937, 'lng': -96.961289}, // W Belt Line Rd @ Ramsey St
	    	{'lat': 32.589954, 'lng': -96.958524}, // W Belt Line Rd @ N Roberts Rd / S Roberts Rd
	    	{'lat': 32.589871, 'lng': -96.954217}, // W Belt Line Rd @ Church St
	    	{'lat': 32.589998, 'lng': -96.950915}, // W Belt Line Rd @ Merrifield Dr
	    	{'lat': 32.589939, 'lng': -96.946217}, // W Belt Line Rd @ FWY-67
	    	{'lat': 32.589939, 'lng': -96.942446}, // W Belt Line Rd / E Belt Line Rd @ N Clark Rd / S Clark Rd
	    	{'lat': 32.589860, 'lng': -96.908320}, // E Belt Line Rd / W Belt Line Rd @ N Ducanville Rd / S Ducanville Rd
	    	{'lat': 32.589706, 'lng': -96.826642}, // E Belt Line Rd @ Alpine Dr / Honey Tree Ln
	    	{'lat': 32.589706, 'lng': -96.826642}, // E Belt Line Rd / W Belt Line Rd @ I-35E
	    	{'lat': 32.592634, 'lng': -96.805601}, // W Belt Line Rd @ N Houston School Rd
	    	{'lat': 32.592242, 'lng': -96.787536}, // W Belt Line Rd @ N Bluegrove Rd
	    	{'lat': 32.592174, 'lng': -96.775709}, // W Belt Line Rd @ Quail Hollow Dr
	    	{'lat': 32.589956, 'lng': -96.772489}, // W Belt Line Rd @ W Main St
	    	{'lat': 32.587584, 'lng': -96.770261}, // W Belt Line Rd @ Homestead Dr
	    	{'lat': 32.587584, 'lng': -96.770261}, // W Belt Line Rd @ Homestead Dr
	    	{'lat': 32.585280, 'lng': -96.762221}, // W Belt Line Rd @ S Stewart Ave
	    	{'lat': 32.584990, 'lng': -96.756672}, // W Belt Line Rd / E Belt Line Rd @ S Dallas Ave
	    	{'lat': 32.585137, 'lng': -96.751186}, // E Belt Line Rd @ Nokomis Rd
	    	{'lat': 32.587592, 'lng': -96.726133}, // E Belt Line Rd @ S Alba Rd
	    	{'lat': 32.587015, 'lng': -96.706499}, // E Belt Line Rd / W Belt Line Rd @ Sunrise Rd
	    	{'lat': 32.586504, 'lng': -96.692573}, // W Belt Line Rd @ Mason Rd
	    	{'lat': 32.587882, 'lng': -96.687660}, // W Belt Line Rd / E Belt Line Rd @ Summers St
	    	{'lat': 32.591340, 'lng': -96.679188}, // E Belt Line Rd @ I-45
	    	{'lat': 32.608316, 'lng': -96.642396}, // E Belt Line Rd / S Beltline Rd @ Post Oak Rd
	    	{'lat': 32.623602, 'lng': -96.615638}, // S Beltline Rd @ Bilindsay Rd
	    	{'lat': 32.627160, 'lng': -96.613406}, // S Beltline Rd @ W Simonds Rd
	    	{'lat': 32.635343, 'lng': -96.615277}, // S Beltline Rd @ Wilmer Kleberg Rd
	    	{'lat': 32.639775, 'lng': -96.617216}, // S Beltline Rd @ Pin Oak St
	    	{'lat': 32.652549, 'lng': -96.617218}, // S Beltline Rd @ Beckett Rd
	    	{'lat': 32.655750, 'lng': -96.618315}, // S Beltline Rd @ Log Cabin Rd
	    	{'lat': 32.657448, 'lng': -96.618252}, // S Beltline Rd @ Zamora St
	    	{'lat': 32.660729, 'lng': -96.617907}, // S Beltline Rd @ Foothill Dr
	    	{'lat': 32.662796, 'lng': -96.616089}, // S Beltline Rd @ Pecan Lake Dr
	    	{'lat': 32.663597, 'lng': -96.615107}, // S Beltline Rd @ Great Oaks
	    	{'lat': 32.667603, 'lng': -96.612561}, // S Beltline Rd @ Kleberg Rd
	    	{'lat': 32.672153, 'lng': -96.607286}, // S Beltline Rd @ Cabrillo Ln
	    	{'lat': 32.691664, 'lng': -96.583709}, // S Beltline Rd @ Sarah Ln
	    	{'lat': 32.692598, 'lng': -96.582573}, // S Beltline Rd @ Lawson Rd
	    	{'lat': 32.703692, 'lng': -96.569110}, // Lawson Rd @ I-20
	    	{'lat': 32.708690, 'lng': -96.557235}, // Lawson Rd @ Milam Rd
	    	{'lat': 32.720716, 'lng': -96.542759}, // Lawson Rd @ E Cartwright Rd
	    	{'lat': 32.725846, 'lng': -96.536493}, // Lawson Rd @ Clay Mathis Rd
	    	{'lat': 32.730527, 'lng': -96.531107}, // Lawson Rd @ Berry Rd
	    	{'lat': 32.735312, 'lng': -96.525889}, // Lawson Rd near Gibson's Outpost Conceled
	    	{'lat': 32.737837, 'lng': -96.523346}, // Lawson Rd near Batfish Corner
	    	{'lat': 32.745678, 'lng': -96.519703}, // Lawson Rd left curve
	    	{'lat': 32.754302, 'lng': -96.519621}, // Lawson Rd @ E Scyene Rd
	    	{'lat': 32.777741, 'lng': -96.519323}, // Lawson Rd @ US-80
	    	{'lat': 32.769577, 'lng': -96.488639}, // US-80 @ Clements Dr
	    	{'lat': 32.780293, 'lng': -96.475416}, // Clements Dr @ FM740
	    	{'lat': 32.781762, 'lng': -96.476761}, // FM740 @ Lake Ray Hubbard Dr
	    	{'lat': 32.786604, 'lng': -96.476759}, // FM740 @ Rainbow Dr
	    	{'lat': 32.790174, 'lng': -96.476587}, // FM740 @ San Marcos Drive
	    	{'lat': 32.792551, 'lng': -96.475815}, // FM740 @ Rains County Rd
	    	{'lat': 32.798220, 'lng': -96.471722}, // FM740 @ Travis Ranch Blvd
	    	{'lat': 32.801658, 'lng': -96.470032}, // FM740 @ Johnson City Ave
	    	{'lat': 32.804641, 'lng': -96.468556}, // FM740 @ Coolwater Circle
	    	{'lat': 32.809899, 'lng': -96.465366}, // FM740 @ Saddle Club Dr
	    	{'lat': 32.812372, 'lng': -96.464260}, // FM740 Curve
	    	{'lat': 32.815208, 'lng': -96.465704}, // FM740 @ Trophy Drive
	    	{'lat': 32.816187, 'lng': -96.466610}, // FM740 Right Turn
	    	{'lat': 32.817903, 'lng': -96.465036}, // FM740 Left Turn
	    	{'lat': 32.820705, 'lng': -96.466731}, // FM740 @ Paradise Ct
	    	{'lat': 32.822756, 'lng': -96.467910}, // FM740 Right Turn
	    	{'lat': 32.826637, 'lng': -96.463754}, // FM740 @ S King Rd
	    	{'lat': 32.836551, 'lng': -96.475271}, // FM740 / Smirl Dr @ Hubbard Dr / Laurence Dr
	    	{'lat': 32.840523, 'lng': -96.470281}, // Laurence Dr @ FM550
	    	{'lat': 32.844076, 'lng': -96.470478}, // Laurence Dr @ Health Hawk Drive
	    	{'lat': 32.853151, 'lng': -96.470169}, // Laurence Dr @ Las Lomas Dr
	    	{'lat': 32.860272, 'lng': -96.470196}, // Laurence Dr / Ridge Rd @ Smirl Dr / Heathland Crossing
	    	{'lat': 32.863675, 'lng': -96.472717}, // Ridge Rd @ Old Ridge Rd
	    	{'lat': 32.866841, 'lng': -96.473249}, // Ridge Rd @ Green Pasture Rd
	    	{'lat': 32.868650, 'lng': -96.474319}, // Ridge Rd @ Shephards Glen Rd
	    	{'lat': 32.870790, 'lng': -96.474726}, // Ridge Rd @ Lafayette Landing
	    	{'lat': 32.874505, 'lng': -96.474858}, // Ridge Rd @ Lakeway Dr / Wellington Ln
	    	{'lat': 32.875774, 'lng': -96.474654}, // Ridge Rd @ Henry M Chandler Dr
	    	{'lat': 32.876834, 'lng': -96.473773}, // Ridge Rd @ White Rd
	    	{'lat': 32.877593, 'lng': -96.473420}, // Ridge Rd @ Buckingham Dr
	    	{'lat': 32.881890, 'lng': -96.472829}, // Ridge Rd @ Shady Dale Ln
	    	{'lat': 32.884095, 'lng': -96.473210}, // Ridge Rd @ Foxchase Ln
	    	{'lat': 32.886811, 'lng': -96.473875}, // Ridge Rd @ Summer Lee Dr
	    	{'lat': 32.889356, 'lng': -96.473027}, // Ridge Rd @ Glen Hill Way
	    	{'lat': 32.891831, 'lng': -96.471358}, // Ridge Rd @ Horizon Rd
			// {'lat': 32.897171, 'lng': -96.469886}, // I30 @ Ridge Rd (3 & 5)
	    ]
	});

	// var dallas = new google.maps.Polygon({
	//     strokeColor: '#FF0000',
	//     strokeOpacity: 1,
	//     strokeWeight: 1,
	//     fillColor: '#FF0000',
	//     fillOpacity: 0.1,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.989208, 'lng': -97.031005},
	//     	{'lat': 32.982406, 'lng': -96.517009},
	//     	{'lat': 32.545717, 'lng': -96.523296},
	//     	{'lat': 32.548870, 'lng': -97.038511},
	//     ]
	// });

	// var denton = new google.maps.Polygon({
	//     strokeColor: '#FF8800',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#FF8800',
	//     fillOpacity: 0.2,
	//     map: map,
	//     paths: [
	//     	{'lat': 33.430555, 'lng': -97.383509},
	//     	{'lat': 33.413532, 'lng': -96.841094},
	//     	{'lat': 33.405426, 'lng': -96.841094},
	//     	{'lat': 33.405426, 'lng': -96.834297},
	//     	{'lat': 32.987353, 'lng': -96.844007},
	//     	{'lat': 32.989411, 'lng': -97.032080},
	//     	{'lat': 32.984931, 'lng': -97.032565},
	//     	{'lat': 32.990204, 'lng': -97.398485},
	//     ]
	// });

	// var collin = new google.maps.Polygon({
	//     strokeColor: '#99AA00',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#99AA00',
	//     fillOpacity: 0.2,
	//     map: map,
	//     paths: [
	//     	{'lat': 33.405772, 'lng': -96.833886},
	//     	{'lat': 33.398320, 'lng': -96.385507},
	//     	{'lat': 33.341549, 'lng': -96.384820},
	//     	{'lat': 33.351874, 'lng': -96.295556},
	//     	{'lat': 32.981718, 'lng': -96.297616},
	//     	{'lat': 32.988054, 'lng': -96.843499}
	//     ]
	// });

	// var tarrant = new google.maps.Polygon({
	//     strokeColor: '#00AA00',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#00AA00',
	//     fillOpacity: 0.1,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.993964, 'lng': -97.544298},
	//     	{'lat': 32.993617, 'lng': -97.497431},
	//     	{'lat': 32.992764, 'lng': -97.452175},
	//     	{'lat': 32.990970, 'lng': -97.415133},
	//     	{'lat': 32.989099, 'lng': -97.354583},
	//     	{'lat': 32.988934, 'lng': -97.347159},
	//     	{'lat': 32.984619, 'lng': -97.032676},
	//     	{'lat': 32.548584, 'lng': -97.038502},
	//     	{'lat': 32.555231, 'lng': -97.550358},
	//     ]
	// });

	// var johnson = new google.maps.Polygon({
	//     strokeColor: '#00AAAA',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#00AAAA',
	//     fillOpacity: 0.2,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.555390, 'lng': -97.616715},
	//     	{'lat': 32.554233, 'lng': -97.464290},
	//     	{'lat': 32.549603, 'lng': -97.087312},
	//     	{'lat': 32.264967, 'lng': -97.087312},
	//     	{'lat': 32.181900, 'lng': -97.475953},
	//     	{'lat': 32.175508, 'lng': -97.471833},
	//     	{'lat': 32.171730, 'lng': -97.486596},
	//     	{'lat': 32.165917, 'lng': -97.492776},
	//     	{'lat': 32.162430, 'lng': -97.503076},
	//     	{'lat': 32.162430, 'lng': -97.509599},
	//     	{'lat': 32.151676, 'lng': -97.513032},
	//     	{'lat': 32.140048, 'lng': -97.508225},
	//     	{'lat': 32.133652, 'lng': -97.516122},
	//     	{'lat': 32.133652, 'lng': -97.516122},
	//     	{'lat': 32.149350, 'lng': -97.555261},
	//     	{'lat': 32.150222, 'lng': -97.568650},
	//     	{'lat': 32.154582, 'lng': -97.570710},
	//     	{'lat': 32.161558, 'lng': -97.564530},
	//     	{'lat': 32.167371, 'lng': -97.567964},
	//     	{'lat': 32.176379, 'lng': -97.568307},
	//     	{'lat': 32.181029, 'lng': -97.576547},
	//     	{'lat': 32.181029, 'lng': -97.576547},
	//     	{'lat': 32.174055, 'lng': -97.594399},
	//     	{'lat': 32.175508, 'lng': -97.601953},
	//     	{'lat': 32.180157, 'lng': -97.601953},
	//     	{'lat': 32.185387, 'lng': -97.591996},
	//     	{'lat': 32.192070, 'lng': -97.589936},
	//     	{'lat': 32.198752, 'lng': -97.591653},
	//     	{'lat': 32.204272, 'lng': -97.598519},
	//     	{'lat': 32.203400, 'lng': -97.615342},
	//     	{'lat': 32.257709, 'lng': -97.614655},
	//     	{'lat': 32.471722, 'lng': -97.617402},
	//     	{'lat': 32.495469, 'lng': -97.615685},
	//     	{'lat': 32.523264, 'lng': -97.617059},
	//     ]
	// });

	// var ellis = new google.maps.Polygon({
	//     strokeColor: '#0000FF',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#0000FF',
	//     fillOpacity: 0.2,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.549325, 'lng': -97.086799},
	//     	{'lat': 32.545274, 'lng': -96.530616},
	//     	{'lat': 32.542538, 'lng': -96.529276},
	//     	{'lat': 32.540129, 'lng': -96.529480},
	//     	{'lat': 32.539785, 'lng': -96.527031},
	//     	{'lat': 32.541678, 'lng': -96.525398},
	//     	{'lat': 32.540817, 'lng': -96.523969},
	//     	{'lat': 32.538408, 'lng': -96.524989},
	//     	{'lat': 32.536687, 'lng': -96.524785},
	//     	{'lat': 32.535310, 'lng': -96.520294},
	//     	{'lat': 32.532212, 'lng': -96.520702},
	//     	{'lat': 32.532212, 'lng': -96.515599},
	//     	{'lat': 32.536171, 'lng': -96.514170},
	//     	{'lat': 32.534622, 'lng': -96.510291},
	//     	{'lat': 32.532901, 'lng': -96.507433},
	//     	{'lat': 32.531007, 'lng': -96.508250},
	//     	{'lat': 32.531007, 'lng': -96.510087},
	//     	{'lat': 32.526705, 'lng': -96.509883},
	//     	{'lat': 32.525155, 'lng': -96.506004},
	//     	{'lat': 32.527393, 'lng': -96.504779},
	//     	{'lat': 32.525672, 'lng': -96.502942},
	//     	{'lat': 32.523606, 'lng': -96.504167},
	//     	{'lat': 32.518098, 'lng': -96.505188},
	//     	{'lat': 32.517754, 'lng': -96.507637},
	//     	{'lat': 32.515688, 'lng': -96.504167},
	//     	{'lat': 32.512934, 'lng': -96.501921},
	//     	{'lat': 32.511901, 'lng': -96.503759},
	//     	{'lat': 32.513450, 'lng': -96.506821},
	//     	{'lat': 32.511557, 'lng': -96.509883},
	//     	{'lat': 32.513450, 'lng': -96.512945},
	//     	{'lat': 32.501399, 'lng': -96.509066},
	//     	{'lat': 32.502432, 'lng': -96.505800},
	//     	{'lat': 32.497267, 'lng': -96.505800},
	//     	{'lat': 32.493996, 'lng': -96.501717},
	//     	{'lat': 32.496751, 'lng': -96.504779},
	//     	{'lat': 32.498128, 'lng': -96.506617},
	//     	{'lat': 32.493996, 'lng': -96.509066},
	//     	{'lat': 32.490896, 'lng': -96.507637},
	//     	{'lat': 32.490036, 'lng': -96.502738},
	//     	{'lat': 32.487280, 'lng': -96.502330},
	//     	{'lat': 32.483837, 'lng': -96.509883},
	//     	{'lat': 32.480737, 'lng': -96.509066},
	//     	{'lat': 32.477465, 'lng': -96.503963},
	//     	{'lat': 32.469887, 'lng': -96.500901},
	//     	{'lat': 32.467131, 'lng': -96.493552},
	//     	{'lat': 32.465065, 'lng': -96.493347},
	//     	{'lat': 32.459725, 'lng': -96.494572},
	//     	{'lat': 32.456797, 'lng': -96.493552},
	//     	{'lat': 32.453696, 'lng': -96.498451},
	//     	{'lat': 32.451801, 'lng': -96.484978},
	//     	{'lat': 32.437675, 'lng': -96.480078},
	//     	{'lat': 32.423718, 'lng': -96.451090},
	//     	{'lat': 32.410104, 'lng': -96.436596},
	//     	{'lat': 32.399763, 'lng': -96.439658},
	//     	{'lat': 32.387869, 'lng': -96.435371},
	//     	{'lat': 32.383904, 'lng': -96.438842},
	//     	{'lat': 32.378215, 'lng': -96.439617},
	//     	{'lat': 32.377525, 'lng': -96.446803},
	//     	{'lat': 32.370284, 'lng': -96.443741},
	//     	{'lat': 32.366146, 'lng': -96.449865},
	//     	{'lat': 32.359249, 'lng': -96.453132},
	//     	{'lat': 32.345625, 'lng': -96.451499},
	//     	{'lat': 32.345107, 'lng': -96.439658},
	//     	{'lat': 32.338898, 'lng': -96.431493},
	//     	{'lat': 32.332517, 'lng': -96.430064},
	//     	{'lat': 32.333207, 'lng': -96.421989},
	//     	{'lat': 32.332689, 'lng': -96.411487},
	//     	{'lat': 32.328032, 'lng': -96.406792},
	//     	{'lat': 32.333724, 'lng': -96.390665},
	//     	{'lat': 32.331999, 'lng': -96.385561},
	//     	{'lat': 32.329097, 'lng': -96.393315},
	//     	{'lat': 32.323547, 'lng': -96.395360},
	//     	{'lat': 32.052345, 'lng': -96.940802},
	//     	{'lat': 32.265525, 'lng': -97.086556}
	//     ]
	// });

	// var rockwall = new google.maps.Polygon({
	//     strokeColor: '#8800FF',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#AA00AA',
	//     fillOpacity: 0.2,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.982605, 'lng': -96.517067},
	//     	{'lat': 32.981992, 'lng': -96.502777},
	//     	{'lat': 32.982163, 'lng': -96.479913},
	//     	{'lat': 32.981992, 'lng': -96.397032},
	//     	{'lat': 32.981821, 'lng': -96.297207},
	//     	{'lat': 32.814223, 'lng': -96.297334},
	// 		{'lat': 32.812959, 'lng': -96.489632},
	// 		{'lat': 32.800716, 'lng': -96.494487},
	// 		{'lat': 32.805205, 'lng': -96.519249},
	//     	{'lat': 32.867222, 'lng': -96.518623},
	//     	{'lat': 32.928070, 'lng': -96.517602},
	//     	{'lat': 32.939036, 'lng': -96.517398},
	//     	{'lat': 32.962676, 'lng': -96.516785},
	//     ]
	// });

	// var kaufman = new google.maps.Polygon({
	//     strokeColor: '#FF00FF',
	//     strokeOpacity: 0.8,
	//     strokeWeight: 1,
	//     fillColor: '#FF00FF',
	//     fillOpacity: 0.1,
	//     map: map,
	//     paths: [
	//     	{'lat': 32.805205, 'lng': -96.519249},
	//     	{'lat': 32.800716, 'lng': -96.494487},
	//     	{'lat': 32.812959, 'lng': -96.489632},
	//     	{'lat': 32.814999, 'lng': -96.297847},
	//     	{'lat': 32.941927, 'lng': -96.297847},
	//     	{'lat': 32.838663, 'lng': -96.076930},
	//     	{'lat': 32.358038, 'lng': -96.076444},
	//     	{'lat': 32.358038, 'lng': -96.076444},
	//     	{'lat': 32.323547, 'lng': -96.395360},
	//     	{'lat': 32.329097, 'lng': -96.393315},
	//     	{'lat': 32.331999, 'lng': -96.385561},
	//     	{'lat': 32.333724, 'lng': -96.390665},
	//     	{'lat': 32.328032, 'lng': -96.406792},
	//     	{'lat': 32.332689, 'lng': -96.411487},
	//     	{'lat': 32.333207, 'lng': -96.421989},
	//     	{'lat': 32.332517, 'lng': -96.430064},
	//     	{'lat': 32.338898, 'lng': -96.431493},
	//     	{'lat': 32.345107, 'lng': -96.439658},
	//     	{'lat': 32.345625, 'lng': -96.451499},
	//     	{'lat': 32.359249, 'lng': -96.453132},
	//     	{'lat': 32.366146, 'lng': -96.449865},
	//     	{'lat': 32.370284, 'lng': -96.443741},
	//     	{'lat': 32.377525, 'lng': -96.446803},
	//     	{'lat': 32.378215, 'lng': -96.439617},
	//     	{'lat': 32.383904, 'lng': -96.438842},
	//     	{'lat': 32.387869, 'lng': -96.435371},
	//     	{'lat': 32.399763, 'lng': -96.439658},
	//     	{'lat': 32.410104, 'lng': -96.436596},
	//     	{'lat': 32.423718, 'lng': -96.451090},
	//     	{'lat': 32.437675, 'lng': -96.480078},
	//     	{'lat': 32.451801, 'lng': -96.484978},
	//     	{'lat': 32.453696, 'lng': -96.498451},
	//     	{'lat': 32.456797, 'lng': -96.493552},
	//     	{'lat': 32.459725, 'lng': -96.494572},
	//     	{'lat': 32.465065, 'lng': -96.493347},
	//     	{'lat': 32.467131, 'lng': -96.493552},
	//     	{'lat': 32.469887, 'lng': -96.500901},
	//     	{'lat': 32.477465, 'lng': -96.503963},
	//     	{'lat': 32.480737, 'lng': -96.509066},
	//     	{'lat': 32.483837, 'lng': -96.509883},
	//     	{'lat': 32.487280, 'lng': -96.502330},
	//     	{'lat': 32.490036, 'lng': -96.502738},
	//     	{'lat': 32.490896, 'lng': -96.507637},
	//     	{'lat': 32.493996, 'lng': -96.509066},
	//     	{'lat': 32.498128, 'lng': -96.506617},
	//     	{'lat': 32.496751, 'lng': -96.504779},
	//     	{'lat': 32.493996, 'lng': -96.501717},
	//     	{'lat': 32.497267, 'lng': -96.505800},
	//     	{'lat': 32.502432, 'lng': -96.505800},
	//     	{'lat': 32.501399, 'lng': -96.509066},
	//     	{'lat': 32.513450, 'lng': -96.512945},
	//     	{'lat': 32.511557, 'lng': -96.509883},
	//     	{'lat': 32.513450, 'lng': -96.506821},
	//     	{'lat': 32.511901, 'lng': -96.503759},
	//     	{'lat': 32.512934, 'lng': -96.501921},
	//     	{'lat': 32.515688, 'lng': -96.504167},
	//     	{'lat': 32.517754, 'lng': -96.507637},
	//     	{'lat': 32.518098, 'lng': -96.505188},
	//     	{'lat': 32.523606, 'lng': -96.504167},
	//     	{'lat': 32.525672, 'lng': -96.502942},
	//     	{'lat': 32.527393, 'lng': -96.504779},
	//     	{'lat': 32.525155, 'lng': -96.506004},
	//     	{'lat': 32.526705, 'lng': -96.509883},
	//     	{'lat': 32.531007, 'lng': -96.510087},
	//     	{'lat': 32.531007, 'lng': -96.508250},
	//     	{'lat': 32.532901, 'lng': -96.507433},
	//     	{'lat': 32.534622, 'lng': -96.510291},
	//     	{'lat': 32.536171, 'lng': -96.514170},
	//     	{'lat': 32.532212, 'lng': -96.515599},
	//     	{'lat': 32.532212, 'lng': -96.520702},
	//     	{'lat': 32.535310, 'lng': -96.520294},
	//     	{'lat': 32.536687, 'lng': -96.524785},
	//     	{'lat': 32.538408, 'lng': -96.524989},
	//     	{'lat': 32.540817, 'lng': -96.523969},
	//     	{'lat': 32.541678, 'lng': -96.525398},
	//     	{'lat': 32.539785, 'lng': -96.527031},
	//     	{'lat': 32.540129, 'lng': -96.529480},
	//     	{'lat': 32.542538, 'lng': -96.529276},
	//     	{'lat': 32.545274, 'lng': -96.530616},
	//     	{'lat': 32.545717, 'lng': -96.523296},

	//     ]
	// });

}