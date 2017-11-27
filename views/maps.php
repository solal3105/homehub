<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
	<link href="<?= PATH_CSS ?>maps.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>

<div id="content">
	<div id="colonne_gauche">
		<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d44527.88892471177!2d4.856809727806385!3d45.771329377159226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x47f4c1c8e5e00eef%3A0x3e95fbdebdefe28f!2s21+Cours+Richard+Vitton%2C+69003+Lyon%2C+France!3m2!1d45.7538973!2d4.8885493!4m5!1s0x47f4c01b8b21021d%3A0x58d89c0c4002702f!2sIUT+Feyssine%2C+69100+Villeurbanne!3m2!1d45.786888999999995!2d4.881926!5e0!3m2!1sfr!2sfr!4v1511793570143" width="100%" height="99%" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div id="colonne_droite">
		<div class="user">
			<img src="<?=PATH_IMAGES.'user.jpg'?>">
		</div>
		<h1>Bonjour, <?= $_SESSION['name']; ?></h1>
		<div class="sensor">
			<p><i class="fa fa-tint" aria-hidden="true"></i>
			<?= 0; ?>%</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-tachometer" aria-hidden="true"></i>
			<?= 0; ?>bar</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
			<?= 0; ?>°c</p>
		</div>
	</div>
</div>

</body>
<!--  Pied de page -->
<?php require_once(PATH_VIEWS."footer.php"); ?>