<?php 

if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://docs.google.com/document/d/1ZGT68X5qeVvp9oODm_Sspg87M7xoxkBQxWWtnrjVPI4/edit?usp=sharing\" width=\"100%\" heigth=\"100%\"></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe src=\"https://docs.google.com/document/d/1NVepXeoK9aWY2X88kY66v49LVYrdFHAwU64Dhq_oNlk/edit?usp=sharing\" width=\"100%\" heigth=\"100%\"></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe src=\"https://docs.google.com/document/d/1ySYGxb2tKY1a8BNG32ItIazkMWsWl7n2ur0JSgN0VV0/edit?usp=sharing\" width=\"100%\" heigth=\"100%\"></iframe>";
}
require_once(PATH_VIEWS.'docs.php');

?>