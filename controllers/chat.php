<?php 
$humidity=84;
$pressure=567;
$temperature=17;
$iframe=0;
if ($_SESSION['name']=='Solal') {
 $iframe="<iframe width=\"500\" height=\"500\" src=\"http://www.calculator-1.com/outdoor/?f=000000&r=000000\" scrolling=\"no\" frameborder=\"0\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe width=\"500\" height=\"500\" src=\"http://www.calculator-1.com/outdoor/?f=000000&r=000000\" scrolling=\"no\" frameborder=\"0\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe width=\"500\" height=\"500\" src=\"http://www.calculator-1.com/outdoor/?f=000000&r=000000\" scrolling=\"no\" frameborder=\"0\"></iframe>";
}
require_once(PATH_VIEWS.'chat.php');

?>