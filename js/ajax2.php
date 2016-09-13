<?php
header('Content-Type: application/json');

$t = $_GET['type'];

switch($t) {
	

	case 0:
	default:
		echo '{"title":"Taipei Wall","type":"marker","locations":[
				{
					"lat":22.99974,"lon":120.22198,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting3.jpg\'><p>PWT2015_台南文創園區Tainan cultural park</p><p>(台南市北門路二段18巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerA.png"
				},
				{
					"lat":23.00003,"lon":120.21272,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting1.jpg\'><p>PWT2015_台南文創園區紅磚牆Tainan cultural park</p><p>park(台南市北門路二段與公園南路交叉口)</p>",
					"icon":"http://maps.google.com/mapfiles/markerB.png"
				},
				{
					"lat":22.99407,"lon":120.19623,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting2.jpg\'><p>PWT2015_台南文創園區Tainan cultural park</p><p>(台南市北門路二段18巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04485,"lon":121.52851,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting4.jpg\'><p>PWT2015_華山1914文創園區九榕壁 Huashan cultural park</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04147,"lon":121.54242,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting5.jpg\'><p>PWT2015_正義國宅Zhengyi Public Housing</p><p>(台北市大安區忠孝東路三段276巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04141,"lon":121.54235,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting6.jpg\'><p>PWT2015_正義國宅屋頂Zhengyi Public Housing</p><p>(台北市大安區忠孝東路三段274號)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04726,"lon":121.51415,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting7.jpg\'><p>PWT2015_國光巴士車站Kuokuang bus</p><p>(候車處外牆)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":24.14812,"lon":120.66347,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting8.jpg\'><p>VIVRE緯絲概念沙龍</p><p>(台中市中興街122巷4號)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":23.82195,"lon":120.94058,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting2.jpg\'><p>PWT2015_潭南村和平巷民宅</p><p>(Tainan Village)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":23.82181,"lon":120.94019,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Colasa Mural</a><img src=\'img/colasa-painting5.jpg\'><p>PWT2015_潭南村和平巷民宅</p><p>(Tainan Village)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				}
			]}'; 
		break;
}
