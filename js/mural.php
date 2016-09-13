<?php
header('Content-Type: application/json');

$t = $_GET['type'];

switch($t) {
	
	
	case 0:
	default:
		echo '{"title":"Taipei Wall","type":"marker","locations":[{"lat":25,"lon":121.3,"title":"<img src=\'img/madsteez-mural.jpg\'>","html":"<img src=\'img/madsteez-mural.jpg\'>","icon":"http://maps.google.com/mapfiles/markerA.png"}]}'; 
		break;
}
