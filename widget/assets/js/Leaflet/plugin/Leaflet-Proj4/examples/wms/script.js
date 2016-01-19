var crs = new L.Proj.CRS('EPSG:3006',
	'+proj=utm +zone=33 +ellps=GRS80 +towgs84=0,0,0,0,0,0,0 +units=m +no_defs'),
	map = new L.Map('map', {
		crs: crs,
		continuousWorld: true,
		worldCopyJump: false
	});

L.tileLayer.wms('http://geodatatest.havochvatten.se/geoservices/ows', {
	layers: 'hav-bakgrundskartor:hav-grundkarta',
	format: 'image/png',
	maxZoom: 14,
	minZoom: 0,
	continuousWorld: true,
	attribution: '&copy; <a href="https://www.havochvatten.se/kunskap-om-vara-vatten/kartor-och-geografisk-information/karttjanster.html">Havs- och vattenmyndigheten (Swedish Agency for Marine and Water Management)</a>'
}).addTo(map);

map.setView([55.8, 14.3], 6);
