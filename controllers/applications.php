<?php

require_once(PATH_MODELS.'accueil.php');

if(isset($_GET['name']) && ($_GET['name'] == "Solal" || $_GET['name'] == "Jean-B" || $_GET['name'] == "Marc")) {
	$_SESSION['name'] = $_GET['name'];
}

$humidity=84;
$pressure=567;
$temperature=17;

require_once(PATH_VIEWS.'applications.php');
