<?php
require_once(PATH_MODELS.'accueil.php');

$fileHumidity = fopen(PATH_PYTHON."humidity.txt", "r");
if($fileHumidity) {
	$humidity = (int) fgets($fileHumidity);
	fclose($fileHumidity);
	echo $humidity;
}

$filePressure = fopen(PATH_PYTHON."pressure.txt", "r");
if($filePressure) {
	$pressure = (int) fgets(filePressure);
	fclose($filePressure);
	echo $pressure;
}

$fileTemperature = fopen(PATH_PYTHON."temperature.txt", "r");
if($fileTemperature) {
	$temperature = (int) fgets($fileTemperature);
	echo $temperature;
}

require_once(PATH_VIEWS.'accueil.php');
