	<div id="colonne_droite">
		<div id="navigation">
			<a href="?page=accueil"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
			<a href="?page=applications"><i class="fa fa-th" aria-hidden="true"></i> All apps </a>
		</div>
		<h1>Hello, <?= $_SESSION['name']; ?></h1>
		<p><i class="fa fa-tint" aria-hidden="true"></i>
		<?= $humidity ?> %</p>
		<p><i class="fa fa-tachometer" aria-hidden="true"></i>
		<?= $pressure ?> bar</p>
		<p><i class="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
		<?= $temperature ?> °c
		</p>
		<div id="spotify">
			<?php 
			if((isset($_POST['spotify'])) && ($_POST['spotify']=='fermer')){
				$_SESSION['affichage']=0;
			}
			if(((isset($_POST['spotify']))&& $_POST['spotify']=='ouvrir') || ($_SESSION['affichage']==1)){
				$_SESSION['affichage']=1;
				echo $spotify;
			?>
			<form method="post">
				<input type="hidden" name="spotify" value="fermer">
				<input type="submit" class="close" value="Close">
			</form>
			<?php
			}
			?>
		</div>
	</div>
	</div>
</body>

    <footer>

    </footer>
</html>