<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>
<body>
	<div id="container">
	<div id="colonne_gauche">  
		<?= $iframe ?>

		<form action="?page=applications" method="post">
			<input type="hidden" name="spotify" value="ouvrir">
			<input type="submit" class="minimize" value="Minimiser">
		</form>
	</div>

<!--  Pied de page -->
<?php require_once(PATH_CONTROLLERS."footer.php"); ?>