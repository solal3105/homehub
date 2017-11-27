<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>

<div id="content">
	<div id="colonne_gauche">
		<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
		<img src="back">
		<div id="icons">
			<div class="icon">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<div class="icon">
				<i class="fa fa-shopping-basket" aria-hidden="true"></i>
			</div>
			<div class="icon">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</div>
			<div class="icon">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
			</div>
			<div class="icon">
				<i class="fa fa-headphones" aria-hidden="true"></i>
			</div>
			<div class="icon">
				<i class="fa fa-comments-o" aria-hidden="true"></i>
			</div>
			<a href="?page=calculator">
				<div class="icon">
					<i class="fa fa-calculator" aria-hidden="true"></i>
				</div>
			</a>
			<div class="icon">
				<i class="fa fa-picture-o" aria-hidden="true"></i>
			</div>
			<a href="?page=maps">
			<div class="icon">
				<i class="fa fa-map" aria-hidden="true"></i>
			</div></a>
		</div>
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