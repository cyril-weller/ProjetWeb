<?php session_start(); ?>
<aside>
	<h3>Menu</h3>

	<nav>
		<ul>
	<?php


	if(isset($_SESSION['Pseudo'])){
		echo '<li> vous êtes connecté(e) sous le pseudo: '.$_SESSION['Pseudo'].'</li>'.
		'<form method="post" action="#" id="Deconnexion">'.
		'<li><input name="Deconnexion" value="Se déconnecter" type="submit"></li>'.
		'</form>';
	}
	else{
		echo '<li><a href="Connexion.php">Se connecter</a></li>'.
		'<li><a href="Inscription.php">S\'inscrire</a></li>';
	}


	if(isset($_POST['Deconnexion'])){
		session_destroy();
	}

	?>

	</li>		
		</ul>
	</nav>

	<nav>
		<ul>
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="Apropos.php">A propos</a></li>
			<li><a href="AjoutArticle.php">Soumettre un article</a></li>		
		</ul>
	</nav>
</aside>
				
<aside>
	<h3>Recherche</h3>
	<form method="post" action="Recherche.php">
		<input name="Rechercher" type="text" placeholder="Rechercher">
	</form>
</aside>

<aside>	
	<h3>Liens externes</h3>
		<nav>
			<ul>
				<li><a href="Introuvable.php">Un jour, un poussin</a></li>
				<li><a href="Introuvable.php">Un jour, un ecureuil</a></li>
				<li><a href="Introuvable.php">Un jour, un fenouil</a></li>
				<li><a href="Introuvable.php">Un jour, une loutre</a></li>
			</ul>
		</nav>
</aside>