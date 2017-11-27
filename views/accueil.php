<?php require_once(PATH_VIEWS.'header.php');?>
	<link href="<?= PATH_CSS ?>accueil.css" rel="stylesheet">
<link href="<?= PATH_CSS ?>acceuil.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>

<div id="content">
	<div id="cadre">
		<div id="date">
			<h1>14:25</h1>
			<h2>Tuesday 19th November</h2>
		</div>
		<div id="users">
			<a href="?page=applications&name=Solal">
				<div class="user">
					<img src="<?=PATH_IMAGES.'solal.jpg'?>">
					<h3>Solal</h3>
				</div>
			</a>
			<a href="?page=applications&name=Jean-B">
				<div class="user">
					<img src="<?=PATH_IMAGES.'jb.jpg'?>">
					<h3>Jean-B</h3>
				</div>
			<a href="?page=applications&name=Marc">
				<div class="user">
					<img src="<?=PATH_IMAGES.'marc.jpg'?>">
					<h3>Marc</h3>
				</div>
			</a>
		</div>
	</div>
	<div id="sensehat">
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