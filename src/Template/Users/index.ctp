<div class="brclr"></div>
<div class="content-wrapper">
	<div class="container-fluid">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<h4>Users</h4>
			</li>
		</ol>
		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Date Joined</th>
				<th>Status</th>
			</tr>
			<tr>
				<?php foreach($users as $user): ?>
				<td><?=$user->id ?></td>
				<td><a href=""><?=$user->username ?></a></td>
				<td><?=$user->created ?></td>
				<?php endforeach; ?>
			</tr>
		</table>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<p id='latitudeAndLongitude'></p>
		<p id='address'></p> 
		<div id="dvMap" style="width: 500px; height: 500px">
</div>
	</div>
</div>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCMewxhcPyVV81U5Lpn6v1SaRIEYhEuOHw&sensor=false"></script>
<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(p.coords.latitude, p.coords.longitude);
        var mapOptions = {
            center: LatLng,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
        });
        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
            infoWindow.setContent(marker.title);
            infoWindow.open(map, marker);
        });
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// getLocation();
	});

	// function getLocation() {
	// 	if (navigator.geolocation) {
	// 		navigator.geolocation.getCurrentPosition(showPosition,showError);
	// 	} else {
	// 		x.innerHTML = "Geolocation is not supported by this browser.";
	// 	}
	// }

	// function showPosition(position) {
	// 	x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;    
	// }

	// function showError(error) {
	// 	switch(error.code) {
	// 		case error.PERMISSION_DENIED:
	// 			x.innerHTML = "User denied the request for Geolocation."
	// 		break;
	// 		case error.POSITION_UNAVAILABLE:
	// 			x.innerHTML = "Location information is unavailable."
	// 		break;
	// 		case error.TIMEOUT:
	// 			x.innerHTML = "The request to get user location timed out."
	// 		break;
	// 		case error.UNKNOWN_ERROR:
	// 			x.innerHTML = "An unknown error occurred."
	// 		break;
	// 	}
	// }

</script>