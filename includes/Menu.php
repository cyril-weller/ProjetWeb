<aside><h3>Utilisateur</h3><nav><ul> 

<?php	
 if(isset($_SESSION['Identifiant'])){ 

 	//on affiche que l'utilisateur est connecté
	echo '<li> Connecté(e) sous le pseudo: '.$_SESSION['Identifiant'].'</li>';

	//on affiche le bouton de déconnexion
	echo '<form method="post" action="#">
				<li><input name="Deconnexion" value="Se déconnecter" type="submit"></li>
		</form>';

	include_once("./includes/Connexion.php");
	$bdd=connect();
	
	//Affichage de la date d'inscription 
	$query5=$bdd->prepare('SELECT * FROM utilisateur WHERE Identifiant = ?');
	$query5->execute(array($_SESSION['Identifiant']));
	$resultat = $query5->fetch();
	echo'<li> Inscrit le '.$resultat['Date_Inscription'].'</li>';
	$query5->closeCursor();


	//Affichage du nombre d'articles
	$query6=$bdd->prepare('SELECT COUNT(Numero_Article) FROM article WHERE Redacteur = ?');
	$query6->execute(array($_SESSION['Identifiant']));
	$resultat = $query6->fetch();
	echo'<li> Articles: '.$resultat[0].'</li>';
	$query6->closeCursor();


	//Affichage du nombre de commentaires 
	$query7=$bdd->prepare('SELECT COUNT(Numero_Commentaire) FROM commentaire WHERE Identifiant = ?');
	$query7->execute(array($_SESSION['Identifiant']));
	$resultat = $query7->fetch();
	echo'<li> Commentaires: '.$resultat[0].'</li>';
	$query7->closeCursor();
	}


else{
		echo '<form method="post" action="#"><li>

				<input name="Identifiant" type="text" placeholder="Votre Pseudo">
				<input name="Mot_De_Passe" type="password" placeholder="Votre Mot de Passe">
				<input name="Connexion" value="Se Connecter" type="submit">

			</li></form>

		<li><a href="Inscription.php">S\'inscrire</a></li>';
	}
	


	if( isset($_POST['Connexion'])){
			$pseudo = $_POST['Identifiant'];
			$password = $_POST['Mot_De_Passe'];

			include_once("./includes/Connexion.php");
			$bdd=connect();

			$query3 = $bdd->prepare('SELECT Identifiant FROM utilisateur WHERE Identifiant = ?');
			$query3->execute(array($pseudo));
			
			if($pseudo=$query3->fetch()) 
						{ 
							$query4 = $bdd->prepare('SELECT Mot_De_Passe FROM utilisateur WHERE Mot_De_Passe = ?');
							$query4->execute(array($password));
							if($password=$query4->fetch()) 
										{ 
											echo '<p> vous êtes à présent connecté(e) </p>';
											session_start();
	 										$_SESSION['Identifiant'] = $_POST['Identifiant'];
	 										header("Refresh: 1");
	 										
	 										
										}

							else 
								{
									echo ('<p>Mot de passe Incorrect.</p>');
								}
							$query4->closeCursor();	
						}
			else 
				{
					echo ('<p>Identifiants erronés.</p>');
				}
			$query3->closeCursor();	

	}


	if(isset($_POST['Deconnexion'])){
		
		echo '<li> vous êtes à présent déconnecté(e) </li>';
		session_destroy();
		header("Refresh: 1");

	}
?>

</ul></nav></aside>


<aside>
	<h3>Menu</h3>
	<nav>
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="Apropos.php">A propos</a></li>
			<?php
				if(isset($_SESSION['Identifiant'])){
					$result = $bdd->prepare('SELECT Type AS typeUser FROM utilisateur WHERE Identifiant=:val');
					$result->execute(array('val'=>$_SESSION['Identifiant']));
					$donnee=$result->fetch();
					$typeUtilisateur=strtolower($donnee['typeUser']);
					$result->closeCursor();
					if(strcmp($typeUtilisateur,"webmaster")==0){
					echo('<li><a href="AjoutArticle.php">Ajouter un article</a></li>');
					}
				}
			?>
		</ul>
	</nav>
</aside>
				
<aside>
	<h3>Recherche</h3>
	<form method="post" action="Recherche.php">
		<input name="Rechercher" type="text" placeholder="Rechercher">
		<input name="Send" value="Go !" type="submit">
	</form>
</aside>

<?php
if (isset($_POST['Send'])){
	$_SESSION['Recherche'] = $_POST['Rechercher'];
	header('Recherche.php');
	header("Refresh: 0");
}

?>

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
