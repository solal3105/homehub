<?php
require_once(PATH_MODELS.'accueil.php');

$fileHumidity = fopen(PATH_PYTHON."humidity.txt", "r");
if($fileHumidity) {
	$humidity = (int) fgets($fileHumidity);
	fclose($fileHumidity);
}

$filePressure = fopen(PATH_PYTHON."pressure.txt", "r");
if($filePressure) {
	$pressure = (int) fgets($filePressure);
	fclose($filePressure);
}

$fileTemperature = fopen(PATH_PYTHON."temperature.txt", "r");
if($fileTemperature) {
	$temperature = (int) fgets($fileTemperature);
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
require_once(PATH_VIEWS.'accueil.php');
