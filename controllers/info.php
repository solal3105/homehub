<?php 

if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://tunein.com/radio/News-c57922/\" width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe src=\"https://embed.radiofrance.fr/franceinfo/player/direct\" width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe src=\"https://embed.radiofrance.fr/franceinfo/player/direct\" width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"></iframe>";
}
require_once(PATH_VIEWS.'info.php');

?>