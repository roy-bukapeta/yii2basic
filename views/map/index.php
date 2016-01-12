<?php

/* @var $this yii\web\View */

$this->title = 'Map Using Leaflat JS';
?>
<div class="site-index">

    

    <div class="body-content">


        <div id="map"></div>
        <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
     <script>
     			var map = L.map('map').setView([-6.219184, 106.8016267], 13);
				var osmMap = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {  
		                attribution: 'OpenStreetMap',
		                minZoom: 0,
		                maxZoom: 20,
		            }).addTo(map);


				var circle = L.circle([-6.2179717, 106.8104699], 130, {
				    color: 'blue',
				    fillColor: '#f00',
				    fillOpacity: 0.5
				}).addTo(map);

				var marker = L.marker([-6.2180454, 106.8126532]).addTo(map);

					marker.bindPopup("<b>Aku Peta</b><br>Gelora Bung Karno.").openPopup();
					circle.bindPopup("I am a circle.");
					polygon.bindPopup("I am a polygon.");

                

     </script>
        </div>
</div>
