function map() {
// Gocoding
//　緯度経度　→　住所
var geocoder = new google.maps.Geocoder();
geocoder.geocode({
	'address': '東京駅'
}, function(result, status) {
	if(status == google.maps.GeocoderStatus.OK) {
		var latlng = result[0].geometry.location;
		var options = {
			zoom: 15,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var map = new google.maps.Map(document.getElementById('map'),options);

		var marker = new google.maps.Marker({
			position: map.getCenter(),
			title: "東京駅",
			map: map
		});

		var infoWindow = new google.maps.InfoWindow({
			content: '<stronge>渋谷のあたり</stronge>だよ！！！！'
		});

		google.maps.event.addListener(map, 'click', function(event) {
			var marker = new google.maps.Marker( {
				position: event.latLng,
				map: map
			});
			geocoder.geocode({
				'latLng': event.latLng
			}, function(result, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var infoWindow = new google.maps.InfoWindow( {
						content: result[0].formatted_address
					});
					infoWindow.open(map, marker);
				} else {
					alert('エラーです！');
				}
			});
		});
	} else {
		alert('エラーです！');
	}
});
}