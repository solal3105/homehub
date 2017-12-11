<?php require_once(PATH_MODELS.'accueil.php');

$_SESSION['name']=$_GET['name'];

$humidity = exec("python python/humidity.py");
$pressure = exec("python python/pressure.py");
$temperature = exec("python python/temperature.py");
$humidity=84;
$pressure=567;
$temperature=17;
require_once(PATH_VIEWS.'applications.php');

?>
