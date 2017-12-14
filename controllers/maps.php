<?php 

$iframe=0;
if ($_SESSION['name']=='Solal') {
 $iframe="<iframe src=\"https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d22264.57201821469!2d4.865673234364202!3d45.76975726275392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47f4c1c8e5e00eef%3A0x3e95fbdebdefe28f!2s21+Cours+Richard+Vitton%2C+69003+Lyon%2C+France!3m2!1d45.7538973!2d4.8885493!4m5!1s0x47f4c01b8b21021d%3A0x58d89c0c4002702f!2sIUT+Feyssine%2C+69100+Villeurbanne!3m2!1d45.786888999999995!2d4.881926!5e0!3m2!1sfr!2sfr!4v1513233692683\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";
}
elseif ($_SESSION['name']=='Marc') {
 $iframe="<iframe src=\"https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d44537.03609434753!2d4.860481508863479!3d45.759870950902034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47f4c01b8b21021d%3A0x58d89c0c4002702f!2sIUT+Feyssine%2C+Lyon!3m2!1d45.786888999999995!2d4.881926!4m5!1s0x47f4c1763ee80817%3A0x408ab2ae4bb27c0!2sBron!3m2!1d45.733315999999995!2d4.9119269999999995!5e0!3m2!1sfr!2sfr!4v1513234150977\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";
}
elseif ($_SESSION['name']=='Jean-B') {
 $iframe="<iframe src=\"https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d22264.81814772474!2d4.852344734363038!3d45.76914066275313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47f4ea7728c72cc5%3A0x79abf95ca6a336de!2s24+Rue+du+Dauphin%C3%A9%2C+69003+Lyon!3m2!1d45.750949399999996!2d4.8654543!4m5!1s0x47f4c01b8b21021d%3A0x58d89c0c4002702f!2sIUT+Feyssine%2C+69100+Villeurbanne!3m2!1d45.786888999999995!2d4.881926!5e0!3m2!1sfr!2sfr!4v1513234084685\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>";
}
require_once(PATH_VIEWS.'maps.php');

?>