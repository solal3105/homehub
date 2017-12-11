<?php require_once(PATH_VIEWS.'header.php');?>
	
	<link href="<?= PATH_CSS ?>applications.css" rel="stylesheet">
</head> 

<!--  Début de la page -->
<body>
	<div id="container">
	<ul id="colonne_gauche">  
		<a href="?page="></a><li class="flex-item"><i class="fa fa-pencil" aria-hidden="true"></i></li> </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-envelope-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-headphones" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-comments-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-calculator" aria-hidden="true"></i></li></a>
		<a href="?page=maps"></a><li class="flex-item"><i class="fa fa-map" aria-hidden="true"></i></li> </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-envelope-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-headphones" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-comments-o" aria-hidden="true"></i></li>  </a>
		<a href="?page="></a><li class="flex-item"><i class="fa fa-calculator" aria-hidden="true"></i></li></a>
	</ul>
	<div id="colonne_droite">
		<h1>Hello, <?= $_SESSION['name']; ?></h1>
	</div>
	</div>
</body>
<!--  Pied de page -->
<?php require_once(PATH_VIEWS."footer.php"); ?>