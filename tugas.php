!DOCTYPE html>
<html>
<head> <!-- untuk meta description, keywords, dan author bisa gantu dan di sesuaikan tapi yang meta charset sama viewport jangan di ganti -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name='description' content='WebGIS geosis.id menyajikan berbagai konten spasial ke dalam bentuk Website'/>
<meta name='keywords' content='WebGIS, WebGIS geos, WebGIS Indoensia'/>
<meta name='Author' content='Egi Septiana'/> 
<title>WebGIS Info-Geospasial</title> <!-- title bisa di sesuaikan dengan nama judul WebGIS yang di inginkan -->
<link rel="stylesheet" href="leaflet/leaflet/dist/leaflet.css" /> <!-- memanggil css di folder leaflet -->
	<link rel="stylesheet" href="css/style.css" /> <!-- memanggil css style -->
<script src="leaflet/leaflet/dist/leaflet.js"></script> <!-- memanggil leaflet.js di folder leaflet -->
<script src="js/jquery-3.6.0.min.js"></script> <!-- memanggil jquery di folder js -->
<script src="leaflet/leaflet-providers-master/leaflet-providers.js"></script> <!-- memanggil leaflet-providers.js di folder leaflet provider -->
<link rel="stylesheet" href="leaflet/leaflet-search-master/src/leaflet-search.css"/>
<link rel="stylesheet" href="leaflet/leaflet.defaultextent-master/dist/leaflet.defaultextent.css" />
<script src="leaflet/leaflet-ajax/dist/leaflet.ajax.js"></script>
<script src="leaflet/leaflet-search-master/src/leaflet-search.js"></script>
<script src="leaflet/leaflet.defaultextent-master/dist/leaflet.defaultextent.js"></script>
</head>
<body>
	<div id="map"> <!-- ini id="map" bisa di ganti dengan nama yang di inginkan -->
<script>
// MENGATUR TITIK KOORDINAT TITIK TENGAN & LEVEL ZOOM PADA BASEMAP
var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
</script>
</div>
</body>
</html>