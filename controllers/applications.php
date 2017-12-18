<?php

require_once(PATH_MODELS.'accueil.php');

if(isset($_GET['name']) && ($_GET['name'] == "Solal" || $_GET['name'] == "Jean-B" || $_GET['name'] == "Marc")) {
	$_SESSION['name'] = $_GET['name'];
}

if ($_SESSION['name']=='Solal') {
 $spotify="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/2NfsrU003QrmvWAjTwwIta\" width=\"100%\" height=\"100\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $spotify="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/5Y8AJIzTe2uDINpVgAN7iJ\" width=\"100%\" height=\"100\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $spotify="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/14tW1Q3nZN6xWj42PcLNk9\" width=\"100%\" height=\"100\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
require_once(PATH_VIEWS.'applications.php');
