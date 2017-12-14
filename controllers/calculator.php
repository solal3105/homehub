<?php 

if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://www.desmos.com/scientific\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe src=\"https://www.desmos.com/scientific\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe src=\"https://www.desmos.com/scientific\" width=\"100%\" height=\"100%\" frameborder=\"0\" allowtransparency=\"true\"></iframe>";
}
require_once(PATH_VIEWS.'calculator.php');

?>