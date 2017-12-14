<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>
	<div id="container">
	<ul id="colonne_gauche">  
		<?= $iframe ?>
		
	</ul>
	<div id="colonne_droite">
		<h1>Hello, <?= $_SESSION['name']; ?></h1>
		<p><i class="fa fa-tint" aria-hidden="true"></i>
		<?= $humidity ?>%</p>
		<p><i class="fa fa-tachometer" aria-hidden="true"></i>
		<?= $pressure ?>bar</p>
		<p><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
		<?= $temperature ?>°c
		</p>
	</div>
	</div>
</body>

<!--  Pied de page -->
<?php require_once(PATH_VIEWS."footer.php"); ?>