<!DOCTYPE html>
<html>
	<head>
		<title><?= App::getInstance()->title; ?></title>

		<meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
		<meta name="robots" content="noarchive">
		<meta name="description" content="<?= App::getInstance()->desc_page; ?>">

		<link rel="icon" href="favicon.ico" /> <!-- Icone de la page -->

		<link href="Dist/css/style.css" type="text/css" rel="stylesheet" >

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBqyQAVh8DJgCEeikupo8HqHW9N2n7qp4"></script>
	    <script type="text/javascript">
	        google.maps.event.addDomListener(window, 'load', init);
	        function init() {
	            var mapOptions = {
	                zoom: 14,
	                center: new google.maps.LatLng(3.853250, 11.481220),
	                gestureHandling: 'cooperative',
					styles: [{"featureType": "administrative","elementType": "labels.text.fill","stylers": [{"color": "#444444"}]},{"featureType": "administrative.country","elementType": "geometry","stylers": [{"visibility": "on"},{"color": "#1a1e1f"}]},{"featureType": "administrative.country","elementType": "geometry.fill","stylers": [{"visibility": "on"}, {"color": "#14b2fc"}, {"saturation": "-34"}]}, {"featureType": "administrative.country","elementType": "geometry.stroke","stylers": [{"visibility": "on"},{"color": "#ff0"}]},{"featureType": "administrative.country","elementType": "labels.text.fill","stylers": [{"visibility": "on"},{"color": "#ff0"}]},{"featureType": "administrative.country","elementType": "labels.icon","stylers": [{"visibility": "on"},{"color": "#1a1313"}]},{"featureType": "administrative.province","elementType": "geometry","stylers": [{"visibility": "off"},{"color": "#111"}]},{"featureType": "administrative.province","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"color": "#111"}]},{"featureType": "administrative.province","elementType": "geometry.stroke","stylers": [{"visibility": "on"},{"color": "#d8d8d8"}]},{"featureType": "administrative.province","elementType": "labels.text","stylers": [{"visibility": "on"},{"color": "#00c4c0"}]},{"featureType": "administrative.locality","elementType": "geometry","stylers": [{"visibility": "off"},{"color": "#100f0f"}]},{"featureType": "administrative.locality","elementType": "labels","stylers": [{"visibility": "on"},{"hue": "#111"}]},{"featureType": "landscape","elementType": "all","stylers": [{"color": "#111"}]},{"featureType": "landscape","elementType": "geometry","stylers": [{"visibility": "on"}]},{"featureType": "landscape","elementType": "geometry.fill","stylers": [{"visibility": "on"},{"color": "#14b2fc"}]},{"featureType": "landscape","elementType": "geometry.stroke","stylers": [{"visibility": "on"},{"color": "#260c0c"}]},{"featureType": "landscape","elementType": "labels","stylers": [{"visibility": "on"},{"color": "#ff0"}]},{"featureType": "poi","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "road","elementType": "geometry","stylers": [{"color": "#40434a"}]},{"featureType": "road","elementType": "labels","stylers": [{"color": "#111"}]},{"featureType": "road","elementType": "labels.text.fill","stylers": [{"visibility": "on"},{"hue": "#111"}]},{"featureType": "road","elementType": "labels.text.stroke","stylers": [{"visibility": "off"}]},{"featureType": "road.highway","elementType": "all","stylers": [{"visibility": "simplified"}]},{"featureType": "road.highway","elementType": "geometry","stylers": [{"color": "#284d4d"}]},{"featureType": "road.highway","elementType": "labels.text","stylers": [{"visibility": "on"}]},{"featureType": "road.highway","elementType": "labels.text.fill","stylers": [{"color": "#111"},{"visibility": "off"}]},{"featureType": "road.highway","elementType": "labels.text.stroke","stylers": [{"visibility": "off"}]},{"featureType": "road.highway.controlled_access","elementType": "geometry","stylers": [{"color": "#111"}]},{"featureType": "road.highway.controlled_access","elementType": "labels.text","stylers": [{"color": "#111"},{"visibility": "off"}]},{"featureType": "road.arterial","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "transit","elementType": "all","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "all","stylers": [{"color": "#0f6b90"},{"visibility": "on"}]},{"featureType": "water","elementType": "geometry","stylers": [{"visibility": "on"},{"color": "#ff0"}]}]
	            };
	            var mapElement = document.getElementById('my_map');
	            var map = new google.maps.Map(mapElement, mapOptions);
	            var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(3.864240, 11.4888),
					map: map,
					icon: 'Data/ico/marker.png',
					title: 'BPD_237 Office'
				});
	        }
	    </script>
	</head>

	<body>
		<div id="page">
			<div class="left">
				<div class="logo">
					<a href="Index">
						<svg xmlns:osb="http://www.openswatchbook.org/uri/2009/osb" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" id="svg8" version="1.1" viewBox="0 0 210 297" height="297mm" width="210mm">
							<defs id="defs2">
								<linearGradient osb:paint="solid" id="linearGradient4508">
									<stop id="stop4506" offset="0" style="stop-color:#00bde8;stop-opacity:1;" />
								</linearGradient>
							</defs>
							<metadata id="metadata5">
								<rdf:RDF>
								<cc:Work rdf:about="">
									<dc:format>image/svg+xml</dc:format>
									<dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
									<dc:title></dc:title>
								</cc:Work>
								</rdf:RDF>
							</metadata>
							<g style="display:inline" id="layer1">
								<circle style="fill:#f26800;fill-opacity:0.92346939;stroke:#00bde8;stroke-width:0.26458332;stroke-opacity:1" r="91.848213" cy="144.6756" cx="110.74702" id="path3699"/>
								<path id="path4549" d="m 113.07695,73.739324 c -0.2411,19.046808 -0.4822,38.093886 4.1337,59.819956 4.6159,21.72606 14.10965,46.18452 23.59306,70.61636" style="fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path id="path4553" d="m 106.32609,73.498222 c 23.38698,15.26985 46.7739,30.539658 60.35605,38.616588 13.58215,8.07692 17.35943,8.96097 10.08665,23.14494 -7.27278,14.18397 -25.59749,41.67103 -43.92146,69.15699" style="fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path id="path4605" d="m 127.3423,116.65536 c 0.52221,4.822 2.2903,14.22499 4.94246,21.61892 2.65216,7.39393 6.18825,12.77843 8.43871,15.06881 2.25045,2.29038 3.21485,1.48671 5.90647,-1.80752 2.69163,-3.29423 7.11314,-9.0824 10.04648,-13.50254 2.93334,-4.42014 4.38003,-7.47426 2.8934,-10.72879 -1.48662,-3.25453 -5.90729,-6.71069 -11.61333,-9.40299 -5.70605,-2.69231 -12.69796,-4.62111 -16.55553,-5.46504 -3.85758,-0.84394 -4.58087,-0.60284 -4.05866,4.21915 z" style="fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path transform="scale(0.26458333)" id="path4615" d="m 535.88159,581.62797 c -9.94106,-6.5542 -27.59815,-37.46388 -36.49702,-63.88999 -7.69337,-22.84623 -14.94502,-55.65515 -17.14718,-77.57962 -0.96307,-9.58819 -0.91558,-10.83053 0.49631,-12.98535 2.05028,-3.12913 6.10467,-3.14393 18.83305,-0.0688 42.37976,10.23885 76.07291,25.97748 92.19173,43.06427 16.46094,17.44946 14.59555,27.49536 -12.02281,64.7481 -13.02535,18.22915 -27.39045,36.62041 -33.73643,43.19187 -5.55932,5.75685 -7.75632,6.39495 -12.11765,3.51951 z" style="fill:#f26800;fill-opacity:0.92156863;stroke:#00bde8;stroke-width:0.91268754;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
								<path transform="scale(0.26458333)" id="path4617" d="m 517.77733,732.11015 c -1.82861,-4.8866 -7.27722,-19.32679 -12.10801,-32.08931 C 470.1213,606.10609 450.78763,542.99927 440.5121,487.34179 l -2.66763,-14.44926 9.76327,-11.37891 c 25.28771,-29.47237 34.0674,-44.93051 34.1655,-60.1542 0.0375,-5.811 -0.35729,-7.41023 -3.29747,-13.35928 -5.49315,-11.11463 -16.63918,-20.08742 -39.36745,-31.69163 l -11.33138,-5.78538 -0.0108,-27.10976 c -0.006,-14.91037 0.17872,-27.10976 0.41039,-27.10976 0.23167,0 7.10024,4.36663 15.26348,9.70363 90.89939,59.42855 154.74848,99.93397 197.69485,125.41625 18.82753,11.17134 28.69342,18.01368 32.91394,22.82696 11.4521,13.06051 8.88509,27.43254 -11.74889,65.77924 -16.13771,29.99072 -47.1523,79.80371 -94.17406,151.25435 -35.9468,54.62199 -45.98958,69.65964 -46.53982,69.68687 -0.26616,0.0132 -1.98006,-3.97417 -3.80868,-8.86076 z m 28.66799,-149.72243 c 5.91335,-4.87428 31.29768,-37.65863 45.18491,-58.35719 3.56256,-5.30989 8.22644,-13.29948 10.36417,-17.75464 3.5339,-7.36484 3.88337,-8.72211 3.84911,-14.94945 -0.0307,-5.57358 -0.48599,-7.71649 -2.44489,-11.50614 -10.77897,-20.85284 -48.4563,-41.42063 -98.29386,-53.65795 -24.51459,-6.01941 -26.90655,-4.45068 -24.52861,16.08673 6.00893,51.89713 24.33654,104.97482 45.48089,131.715 9.2057,11.64199 14.05382,13.64504 20.38828,8.42364 z" style="fill:#00bde8;fill-opacity:1;stroke:#00bde8;stroke-width:0.91268754;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
							</g>
							<g id="layer3">
								<path id="path4595" d="m 101.74522,102.63129 c -2.652164,-0.12073 -2.893267,1.88846 -2.732524,5.02314 0.160744,3.13467 0.723233,7.39352 1.326174,9.28214 0.60293,1.88862 1.24583,1.40645 2.69194,0.60306 1.4461,-0.80338 3.69743,-1.92905 5.54575,-3.21487 1.84832,-1.28583 3.29514,-2.73265 4.21926,-3.9381 0.92413,-1.20545 1.32604,-2.17004 -1.00378,-3.77682 -2.32982,-1.60679 -7.39465,-3.85783 -10.04682,-3.97855 z" style="display:inline;fill:#f26800;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;fill-opacity:0.92156863" />
								<path id="path4545" d="m 77.393818,80.490186 c 19.931283,6.26871 39.862402,12.53737 46.854432,19.328214 6.99202,6.79085 1.04478,14.10435 -8.39864,24.91405 -9.44341,10.8097 -22.382059,25.11454 -35.321462,39.42021" style="display:inline;fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path id="path4541" d="m 86.0735,74.462631 c 0,25.958409 0,51.917079 4.084575,74.787629 4.084576,22.87055 12.310325,42.78976 20.507855,62.64065" style="display:inline;fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path transform="scale(0.26458333)" id="path4603" d="m 345.75053,566.18358 -4.09267,-2.02741 -1.12863,-6.8344 c -4.13981,-25.06859 -6.84769,-47.57091 -8.88231,-73.81146 -0.75779,-9.77318 -1.56645,-19.70812 -1.79702,-22.07764 l -0.41923,-4.30823 13.39565,-12.09432 c 19.01076,-17.16395 27.51906,-25.37525 29.35034,-28.32583 l 1.59055,-2.56271 0.60901,5.29647 c 1.89533,16.48335 4.90199,27.15278 7.92176,28.11121 1.89054,0.60004 14.55399,-5.78102 25.74868,-12.97464 11.86073,-7.62161 21.53114,-18.20692 21.53114,-23.56816 0,-2.39133 -0.81848,-3.69568 -4.17057,-6.6463 -7.76207,-6.83245 -29.18183,-16.0757 -39.56955,-17.0754 -8.85896,-0.85258 -12.75754,3.78211 -12.75754,15.16637 v 3.79151 l -3.22302,-2.82985 c -1.77267,-1.55642 -5.31659,-3.89074 -7.87539,-5.18738 -5.46012,-2.76685 -22.63582,-9.51449 -30.13577,-11.83914 l -5.2397,-1.62406 v -34.43258 c 0,-27.14017 0.24124,-34.35253 1.13906,-34.05459 0.62649,0.20791 8.93028,2.91011 18.45287,6.0049 52.17239,16.95574 90.81309,33.09153 110.60309,46.1862 15.76895,10.43403 23.3249,21.19676 23.21619,33.0692 -0.1511,16.50114 -9.49329,31.208 -47.14829,74.22276 -18.45318,21.07977 -71.82557,80.74661 -78.01409,87.21463 l -5.01189,5.23826 z" style="fill:#00bde8;fill-opacity:1;stroke:#00bde8;stroke-width:0.91268754;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
							</g>
							<g style="display:inline" id="layer2">
								<path id="path4533" d="m 46.291629,84.588926 c -1.365633,15.905614 -2.732466,31.825204 -0.730889,53.405644 2.001578,21.58043 7.401345,48.98224 12.786001,76.30736" style="display:inline;fill:none;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path id="path4537" d="m 40.746277,85.31223 c 2.812954,1.527032 5.625813,3.054013 12.629402,5.629524 7.003588,2.575511 18.15148,6.184543 27.192764,9.117936 9.041285,2.9334 15.952982,5.18372 17.761361,7.39367 1.808376,2.20995 -1.486763,4.37992 -7.273622,9.60415 -5.786858,5.22423 -14.063935,13.50131 -17.39928,18.32352 -3.335345,4.82221 -1.728045,6.18841 8.363654,10.63478 10.091698,4.44637 28.806244,12.02899 37.365464,16.36869 8.55921,4.33969 7.03222,5.46485 1.36533,11.73459 -5.66688,6.26973 -15.46979,17.67968 -27.725977,24.79234 -12.256184,7.11267 -26.963057,9.92546 -41.670595,12.73837" style="display:inline;fill:none;stroke:#00bde8;stroke-width:0.26499999;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
								<path id="path4579" d="m 70.361786,161.94245 c 0.120402,2.61184 0.924076,7.83572 2.370725,12.45698 1.446648,4.62127 3.53611,8.63948 4.982906,10.32712 1.446795,1.68764 2.250451,1.04472 4.500085,2.5e-4 2.249634,-1.04446 5.947869,-2.49159 9.082062,-4.46055 3.134192,-1.96896 5.706174,-4.46057 6.067822,-6.30881 0.361647,-1.84823 -1.486997,-3.05387 -5.545636,-5.14347 -4.058639,-2.0896 -10.327079,-5.06309 -14.104344,-6.791 -3.777266,-1.7279 -5.06312,-2.21009 -5.987318,-2.45122 -0.924197,-0.24113 -1.486704,-0.24113 -1.366302,2.3707 z" style="display:inline;fill:#f26800;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;fill-opacity:0.92346936" />
								<path id="path4557" d="m 64.052913,104.64049 c 3.777323,-0.36148 10.849623,3.17467 12.899031,7.43396 2.049408,4.25929 -0.923935,9.24165 -4.701609,9.6035 -3.777675,0.36184 -8.358226,-3.89727 -10.407587,-8.1569 -2.04936,-4.25963 -1.567158,-8.51908 2.210165,-8.88056 z" style="display:inline;fill:#f26800;fill-opacity:0.92346939;stroke:#00bde8;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
								<path transform="scale(0.26458333)" id="path4593" d="M 211.4615,758.9364 C 185.99577,628.92739 175.11009,557.24816 170.67138,490.34471 c -1.39874,-21.08286 -1.41173,-79.71363 -0.0226,-102.06029 1.28083,-20.60455 3.81313,-53.64684 4.13616,-53.96987 0.12583,-0.12584 4.91505,1.65799 10.64269,3.96406 17.57234,7.07499 40.04092,14.85423 96.98289,33.57815 30.07133,9.88819 59.39089,19.825 65.15456,22.0818 22.75929,8.91152 28.18665,14.40027 22.5535,22.80855 -1.12768,1.68321 -10.88062,11.00399 -21.6732,20.71284 -20.91105,18.81125 -47.91379,45.81144 -59.28052,59.2749 -24.09475,28.5393 -23.42889,34.91767 5.09194,48.77617 6.01427,2.92238 36.76904,16.36862 68.34395,29.88053 88.97064,38.0734 105.33935,46.16286 109.43507,54.08309 2.94618,5.69729 0.15863,10.03207 -22.4554,34.91931 -36.68851,40.37652 -58.26891,60.11608 -85.93844,78.60772 -28.13842,18.80502 -62.92997,32.68301 -109.2491,43.57834 -10.71938,2.52145 -34.73971,7.66743 -35.7899,7.66743 -0.12368,0 -3.33734,-15.88997 -7.14147,-35.31104 z m 108.05908,-63.70513 c 29.37622,-13.27481 44.80202,-24.68102 48.70693,-36.0151 1.57671,-4.57646 0.10126,-8.38114 -4.83013,-12.45523 -7.62813,-6.30202 -78.97234,-40.84928 -91.00427,-44.06733 -3.62289,-0.96898 -4.30767,-0.91004 -5.70666,0.49113 -4.23597,4.2426 1.33071,39.76384 9.94938,63.48734 6.01526,16.55745 14.93761,32.40827 19.75737,35.09957 3.46973,1.93746 5.86636,1.2597 23.12738,-6.54038 z M 269.81666,451.61851 c 6.1886,-3.09248 15.36872,-12.05597 18.36749,-17.93405 3.29453,-6.45782 3.39324,-10.07865 0.42891,-15.73443 -4.37863,-8.3542 -18.67056,-16.54774 -29.03467,-16.64552 -9.77497,-0.0922 -11.87095,4.31093 -11.06208,23.23883 1.1702,27.38354 6.67657,34.38276 21.30035,27.07517 z" style="fill:#00bde8;fill-opacity:1;stroke:#00bde8;stroke-width:0.91268754;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
							</g>
						</svg>
					</a>
				</div>
				<nav class="menu">
					<ul>
						<li><a href="Index"><i class="fa menu_ico">&#xf015;</i><i class="supp">CASA</i></a></li>
						<li><a href="About_me"><i class="fa menu_ico">&#xf129;</i><i class="supp">SOBRE MI</i></a></li>
						<li><a href="Skills"><i class="fa menu_ico">&#xf19d;</i><i class="supp">HABILIDADES</i></a></li>
						<li><a href="Worked"><i class="fa menu_ico">&#xf121;</i><i class="supp">TRABAJÓ</i></a></li>
						<li><a href="Contact"><i class="fa menu_ico">&#xf0e0;</i><i class="supp">CONTACTO</i></a></li>
					</ul>
				</nav>
				<nav class="social">
					<ul>
						<li><a href="https://www.facebook.com/biyapaul.kamga" target="blank"><i class="fa ico">&#xf09a;</i></a></li>
						<li><a href="https://www.linkedin.com/in/biyapaul-237/" target="blank"><i class="fa ico">&#xf0e1;</i></a></li>
						<li><a href="https://twitter.com/bpd_237" target="blank"><i class="fa ico">&#xf099;</i></a></li>
						<li><a href="https://github.com/bpd237" target="blank"><i class="fa ico">&#xf09b;</i></a></li>
					</ul>
				</nav>
			</div>
			<div class="right">
				<div class="anim_bg">
					<div id="one" class="tourner"><img src="Data/ico/bg.png" alt=""></div>
					<div id="two" class="tourner"><img src="Data/ico/bg.png" alt=""></div>
					<div id="three" class="tourner"><img src="Data/ico/bg.png" alt=""></div>
				</div>
				<?= $content; ?>
			</div>
			<footer>
				<p>copyright &copy; BPD_237 2018 Todos los derechos reservados ! por &lt;BPD_237/&gt;</p>
				<div>
					<form method="post">
						<input type="submit" name="lang" value="fr" alt="fr" title="Français">
						<input type="submit" name="lang" value="en" alt="en" title="English">
						<input class="active_lang" type="submit" name="lang" value="esp" alt="esp" title="Espagnol">
					</form>
				</div>
			</footer>
		</div>
		<script type="text/javascript" src="Dist/js/anime.min.js"></script>
		<script type="text/javascript" src="Dist/js/dancing_word.js"></script>
		<script type="text/javascript" src="Dist/js/active_menu.js"></script>
		<script type="text/javascript" src="Dist/js/anim_svg.js"></script>
		<script type="text/javascript" src="Dist/js/skill_level.js"></script>
	</body>
</html>