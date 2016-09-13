<?php
header('Content-Type: application/json');

$t = $_GET['type'];

switch($t) {
	
	case 0:
	default:
		echo '{"title":"Taipei Wall","type":"marker","locations":[
				{
					"lat":22.99974,"lon":120.22198,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Dragon 76(Japan)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12273553_1677386095835691_4598105071552991145_o.jpg\'><p>PWT2015_台南文創園區Tainan cultural park</p><p>(台南市北門路二段18巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerA.png"
				},
				{
					"lat":23.00003,"lon":120.21272,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'> Prime(US)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12273763_1677169262524041_3347535074050802320_o.jpg\'><p>PWT2015_台南文創園區紅磚牆Tainan cultural park</p><p>park(台南市北門路二段與公園南路交叉口)</p>",
					"icon":"http://maps.google.com/mapfiles/markerB.png"
				},
				{
					"lat":22.99407,"lon":120.19623,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'> Huatunan畫圖男(China)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12247801_1678070949100539_2238566452043544988_o.jpg\'><p>PWT2015_台南文創園區Tainan cultural park</p><p>(台南市北門路二段18巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04485,"lon":121.52851,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'> Ben Horton(US)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12186262_1674232979484336_2201056910498145041_o.jpg\'><p>PWT2015_華山1914文創園區九榕壁 Huashan cultural park</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04147,"lon":121.54242,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'> Faith 47(South Africa)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/12234955_1675434222697545_3408984505317023918_n.jpg?oh=20c387af13d65bf29ec6fd303c28e5ef&oe=5812A4A4\'><p>PWT2015_正義國宅Zhengyi Public Housing</p><p>(台北市大安區忠孝東路三段276巷)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04141,"lon":121.54235,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'> Jeff Soto(US)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/12308597_1680171952223772_8463336564606038137_n.jpg?oh=ff9cb113f5964437b88b4e0fe3eab24b&oe=5819895B\'><p>PWT2015_正義國宅屋頂Zhengyi Public Housing</p><p>(台北市大安區忠孝東路三段274號)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":25.04726,"lon":121.51415,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Panic Eddie(Taiwan)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12232680_1675472319360402_2061384093641096087_o.jpg\'><p>PWT2015_國光巴士車站Kuokuang bus</p><p>(候車處外牆)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":24.14812,"lon":120.66347,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Omen(Taiwan)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/11223685_1675229399384694_5107809722012312209_n.jpg?oh=6684a7289722ab351a53905d5a3459ba&oe=582370B3\'><p>VIVRE緯絲概念沙龍</p><p>(台中市中興街122巷4號)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":23.82195,"lon":120.94058,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Caratoes(Hong Kong)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/12274326_1676442845930016_2895155802910177256_n.jpg?oh=3625ba407e0720221692c07b8c5da461&oe=585DDF66\'><p>PWT2015_潭南村和平巷民宅</p><p>(Tainan Village)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				},
				{
					"lat":23.82181,"lon":120.94019,
					"html":"<a href=\'artist.html\' style=\'font-size: 2em; font-weight: bold;\'>Nychos(Austria)</a><img src=\'https://scontent-tpe1-1.xx.fbcdn.net/t31.0-8/12240230_1675253992715568_1057900438801767668_o.jpg\'><p>PWT2015_潭南村和平巷民宅</p><p>(Tainan Village)</p>",
					"icon":"http://maps.google.com/mapfiles/markerC.png"
				}
			]}'; 
		break;
}
