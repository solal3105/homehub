<?php require_once(PATH_VIEWS.'header.php');?>
	
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>
	<div id="container">
	<ul id="colonne_gauche">  
		<a href="?page=docs"><li class="flex-item"><i class="fa fa-pencil" aria-hidden="true"></i></li> </a>
		<a href="?page=info"><li class="flex-item"><i class="fa fa-info" aria-hidden="true"></i></li> </a>
		<a href="?page=shopping"><li class="flex-item"><i class="fa fa-shopping-basket" aria-hidden="true"></i></li>  </a>
		<a href="?page=calendar"><li class="flex-item"><i class="fa fa-calendar" aria-hidden="true"></i></li>  </a>
		<a href="?page=spotify"><li class="flex-item"><i class="fa fa-headphones" aria-hidden="true"></i></li>  </a>
		<a href="?page=meteo"><li class="flex-item"><i class="fa fa-sun-o" aria-hidden="true"></i></li>  </a>
		<a href="?page=calculator"><li class="flex-item"><i class="fa fa-calculator" aria-hidden="true"></i></li></a>
		<a href="?page=maps"><li class="flex-item"><i class="fa fa-map" aria-hidden="true"></i></li> </a>
		<a href="?page=transport"><li class="flex-item"><i class="fa fa-bus" aria-hidden="true"></i></li> </a>
	</ul>

<!--  Pied de page -->
<?php require_once(PATH_CONTROLLERS."footer.php"); ?>