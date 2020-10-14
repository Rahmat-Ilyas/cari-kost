function updatemap(lokasi, lng, lat) {
	var marker;

	function taruhMarker(peta, posisiTitik){

		if( marker ){
			marker.setPosition(posisiTitik);
		} else {

			marker = new google.maps.Marker({
				position: posisiTitik,
				map: peta
			});
		}

		document.getElementById("set_longitude").value = posisiTitik.lng();
		document.getElementById("set_latitude").value = posisiTitik.lat();

	}

	function initialize() {
		var propertiPeta = {
			center:new google.maps.LatLng(lat,lng),
			zoom:18,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};

		var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
		var defmark = new google.maps.LatLng(lat,lng);

		google.maps.event.addListener(peta, 'click', function(event) {
			taruhMarker(this, event.latLng);
		});

		taruhMarker(peta, defmark);

	}

	google.maps.event.addDomListener(window, 'load', initialize);
}