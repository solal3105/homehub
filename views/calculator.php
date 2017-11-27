<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>

<div id="content">
	<div id="colonne_gauche">
		<iframe width="500" height="500" src="http://www.calculator-1.com/outdoor/?f=000000&r=000000" scrolling="no" frameborder="0"></iframe>
	</div>
	<div id="colonne_droite">
		<div class="user">
			<img src="<?=PATH_IMAGES.'user.jpg'?>">
		</div>
		<h1>Bonjour, <?= $_SESSION['name']; ?></h1>
		<div class="sensor">
			<p><i class="fa fa-tint" aria-hidden="true"></i>
			<?= $humidity ?>%</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-tachometer" aria-hidden="true"></i>
			<?= $pressure ?>bar</p>
		</div>
		<div class="sensor">
			<p><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
			<?= $temperature ?>°c</p>
		</div>
	</div>
</div>

</body>
<!--  Pied de page -->
<?php require_once(PATH_VIEWS."footer.php"); ?>