<!DOCTYPE html>
<html>
	<head>
		<title><?= App::getInstance()->title; ?></title>

		<meta charset="utf-8" /> <!-- Encodage des carractères de la page -->
		<meta name="robots" content="noarchive">
		<meta name="description" content="<?= App::getInstance()->desc_page; ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="BP Smart Design" />
		<meta name="keywords" content="" />

		<link rel="icon" href="Data/ico/logo.png" /> <!-- Icone de la page -->

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
					title: '#bpsmartdesign'
				});
			}
		</script>
	</head>

	<body>
		<!-- <div class="mouse"></div> -->
		<div id="page">
			<div class="left fade-in-left">
				<div class="logo">
					<a href="Index">
						<img src="Data/ico/logo.png" alt="Bp SmartDev - logo">
					</a>
				</div>
				<nav class="menu">
					<ul>
						<li><a href="Index"><i class="fa menu_ico">&#xf015;</i><i class="supp">Accueil</i></a></li>
						<li><a href="About_me"><i class="fa menu_ico">&#xf129;</i><i class="supp">Moi</i></a></li>
						<li><a href="Skills"><i class="fa menu_ico">&#xf19d;</i><i class="supp">Qualité</i></a></li>
						<li><a href="Worked"><i class="fa menu_ico">&#xf121;</i><i class="supp">Travaux</i></a></li>
						<li><a href="Contact"><i class="fa menu_ico">&#xf0e0;</i><i class="supp">Contact</i></a></li>
					</ul>
				</nav>
				<nav class="social">
					<ul>
						<li><a href="https://www.fb.me/bpsmartdesign" target="blank"><i class="fa ico">&#xf09a;</i></a></li>
						<li><a href="https://www.linkedin.com/in/bpsmartdesign/" target="blank"><i class="fa ico">&#xf0e1;</i></a></li>
						<li><a href="https://twitter.com/bpsmartdesign" target="blank"><i class="fa ico">&#xf099;</i></a></li>
						<li><a href="https://github.com/bpsmartdesign" target="blank"><i class="fa ico">&#xf09b;</i></a></li>
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
				<p>Copyright &copy; 2020 Tous droits reservé ! par #bpsmartdesign</p>
				<div>
					<form method="post">
						<input type="hidden" name="lang" value="lang">
						<input class="active_lang" type="submit" name="lang" value="fr" alt="fr" title="Français">
						<input type="submit" name="lang" value="en" alt="en" title="English">
						<input type="submit" name="lang" value="esp" alt="esp" title="Espagnol">
					</form>
				</div>
			</footer>
		</div>
		<script type="text/javascript" src="Dist/js/anime.min.js"></script>
   	<script type="text/javascript" src="Dist/js/dancing_word.js"></script>
		<script type="text/javascript" src="Dist/js/active_menu.js"></script>
		<script type="text/javascript" src="Dist/js/custom_mouse.js"></script>
		<script type="text/javascript" src="js/canvas.js"></script>
		<script type="text/javascript" src="Dist/js/anim_svg.js"></script>
	</body>
</html>