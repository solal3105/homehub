<?php require_once(PATH_MODELS.'accueil.php');

$humidity = exec("python python/humidity.py");
$pressure = exec("python python/pressure.py");
$temperature = exec("python python/temperature.py");

require_once(PATH_VIEWS.'accueil.php');

?>
