//////--- GOOGLE MAP

// Initialize and plot map location
function initialize() {
	var SMLatLong= new google.maps.LatLng(37.794508,-122.39493);
	var mapOptions = {
	  center: new google.maps.LatLng(37.794508,-122.39493),
	  zoom: 14


	};
	var styles = [
			{
	        stylers: [
	          { saturation: -100 }
	        ]
	   }
	];
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	map.setOptions({
		styles: styles,
		scrollwheel: false
	});

	var marker=new google.maps.Marker({
	     position:SMLatLong,
	     map: map

	});
}