<?php 

if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://calendar.google.com/calendar/embed?src=solal.gendrin%40gmail.com&ctz=Europe%2FParis\" style=\"border: 0\" width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"no\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe width=\"100%\" height=\"100%\" src=\"http://edt.jordan-martin.fr/AAE\" frameborder=\"0\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe width=\"100%\" height=\"100%\" src=\"http://edt.jordan-martin.fr/AAE\" frameborder=\"0\"></iframe>";
}
require_once(PATH_VIEWS.'calendar.php');

?>
