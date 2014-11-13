 $(document).ready( function() {
	//Google Maps JS
	//Set Map
	function initialize() {
		var myLatlng = new google.maps.LatLng(45.7977839,15.9530061);
		var centerMap = new google.maps.LatLng(45.803898, 15.952785);
		var imagePath = 'http://www.jamesnew.co.uk/googlePin.png';
		var mapOptions = {
			zoom: 15,
			center: centerMap,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
		//Callout Content
		//var contentString = ;
		//Set window width + content
		var infowindow = new google.maps.InfoWindow({
			content: contentString,
			maxWidth: 900
		});

		google.maps.event.addListener(infowindow, 'domready', function() {
	      //bind mailer
	      bindMailToForm('#googlemap_contact', '#googlemap_responseMsg');
		});


		//Add Marker
		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'Uluru (Ayers Rock)'
		});


		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
		infowindow.open(map,marker);

		//Resize Function
		google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
			infowindow.open(map);
		});
	}

	google.maps.event.addDomListener(window, 'load', initialize);
});