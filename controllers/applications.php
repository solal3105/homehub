<?php

require_once(PATH_MODELS.'accueil.php');

if(isset($_GET['name']) && ($_GET['name'] == "Solal" || $_GET['name'] == "Jean-B" || $_GET['name'] == "Marc")) {
	$_SESSION['name'] = $_GET['name'];
}

$fileHumidity = fopen(PATH_PYTHON."humidity.txt", "r");
if($fileHumidity) {
	$humidity = (int) fgets($fileHumidity);
	fclose($fileHumidity);
	echo $humidity;
}

$filePressure = fopen(PATH_PYTHON."pressure.txt", "r");
if($filePressure) {
	$pressure = (int) fgets($filePressure);
	fclose($filePressure);
	echo $pressure;
}

$fileTemperature = fopen(PATH_PYTHON."temperature.txt", "r");
if($fileTemperature) {
	$temperature = (int) fgets($fileTemperature);
	echo $temperature;
}

if (!isset($humidity)) {
	$humidity=0;
}
if (!isset($pressure)) {
	$pressure=0;
}
if (!isset($temperature)) {
	$temperature=0;
}

require_once(PATH_VIEWS.'applications.php');
