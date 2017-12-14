<?php 
$humidity=84;
$pressure=567;
$temperature=17;
$iframe=0;
if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/2NfsrU003QrmvWAjTwwIta\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/5Y8AJIzTe2uDINpVgAN7iJ\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe src=\"https://open.spotify.com/embed/user/solalgendrin/playlist/14tW1Q3nZN6xWj42PcLNk9\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
require_once(PATH_VIEWS.'spotify.php');

