<?php
	////////////////////////////////////////////////////////////////////// I N T R O D U C T I O N
	define('ROOT', dirname(__DIR__)); // Constante qui contient nom du repertoire parent
	require ROOT.'/App/App.php'; // Inclusion du fichier App.php [notre fichier principal]
	App::load(); // Appel de la fonction load() qui se trouve dans la classe statique App

	////////////////////////////////////////////////////////////////////// L A   L A N G U E
	if(!isset($_SESSION['bpd_237_portfolio.lang'])) {
		if(isset($_GET['p'])) {
			$__tmp = stripcslashes(htmlspecialchars($_GET['p']));
			$__tmp = explode('.', $__tmp);
			$_SESSION['bpd_237_portfolio.lang'] = $__tmp[0];
		} else {

			$_SESSION['bpd_237_portfolio.lang'] = 'en';
		}
	}

	if($_SESSION['bpd_237_portfolio.lang'] == '*') {
		$_SESSION['bpd_237_portfolio.lang'] = 'en';
	}

	///////////////////////////////////////////////////////////////////// C H A N G E M E N T   D E   L A N G U E
	if(isset($_POST['lang'])) {
		$_SESSION['bpd_237_portfolio.lang'] = $_POST['lang'];
	}

	if (isset($_POST['send_mail'])) {
		
    $to = 'bpsmartdesign@hotmail.com, biyapaul45@gmail.com';
    $subject = 'Contact from your portfolio website '. $_POST['subject'];
		$from = $_POST['mail'];

    $headers = "From: $from" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = $_POST['message'];

		mail($to, $subject, $message, $headers);
	}

	///////////////////////////////////////////////////////////////////// P E T I T   S Y S T E M E   D E   R O U T I N G
	$p = isset($_GET['p']) ? stripcslashes(htmlspecialchars($_GET['p'])) : $_SESSION['bpd_237_portfolio.lang'].'.Page.Home.Index'; // récupération de la page à charger
	$p = explode('.', $p); // division de la valeur de $p en un tableau de plusieurs éléments correspondants aux noms des fichiers à charger

	//////////////////////////////////////////////////////////////////// C O N T R O L L E U R  E T  V U E
	$controller = '\My_portfolio\Controller\\'.ucfirst($p[1]).'\\'.ucfirst($p[2]).'Controller'; // Appel du controleur correspondant
	$action = $p[3]; // Chargement de la méthode correspondante

	$controller = new $controller(); // Appel de la page correspondante
	$controller->$action(); // Appel de la page correspondante
