<?php require_once(PATH_VIEWS.'header.php');?>
	
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>
	<div id="container">
	<ul id="colonne_gauche">  
		<a href="?page=docs"><li class="flex-item"><i class="fa fa-pencil" aria-hidden="true"></i></li> </a>
		<a href="?page=mail"><li class="flex-item"><i class="fa fa-shopping-basket" aria-hidden="true"></i></li>  </a>
		<a href="?page=keep"><li class="flex-item"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></li>  </a>
		<a href="?page=spotify"><li class="flex-item"><i class="fa fa-headphones" aria-hidden="true"></i></li>  </a>
		<a href="?page=chat"><li class="flex-item"><i class="fa fa-comments-o" aria-hidden="true"></i></li>  </a>
		<a href="?page=calculator"><li class="flex-item"><i class="fa fa-calculator" aria-hidden="true"></i></li></a>
		<a href="?page=maps"><li class="flex-item"><i class="fa fa-map" aria-hidden="true"></i></li> </a>
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