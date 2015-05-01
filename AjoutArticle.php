 <!DOCTYPE html>
 <html>
 	<head>

		<meta name="viewport" content="width=device-width"/>

		<link rel="stylesheet" type="text/css" media="screen and (min-width: 750px)" href="css/ProjetWeb_LegrosWeller.css">
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 750px)" href="css/ProjetWeb_LegrosWeller_smartphone.css">
 		
 		<title> Article </title>
 		<meta charset="utf-8"/>
 	</head>
 		 <body>
 		<header>
				<h1> Un jour, un chaton</h1>
		</header>
		
 		<div id="colonneP">
			<h1> Formulaire d'ajout d'article </h1>
			<form id="soumissionArticle" action="Introuvable.html">
				<input name="Auteur" type="text" placeholder="Auteur">
				<input name="Titre" type="text" placeholder="Titre">
				<textarea placeholder="Tapez le résumé de votre article ici" cols="80" rows="10"></textarea>
				<textarea placeholder="Tapez votre article complet ici" cols="80" rows="10"></textarea>

				<div>	
					<p>Télecharger une image : </p>
					<input name="Image" type="file">
				</div>
				<div>
					<button>Soumettre l'article</button> 
					<button>Annuler</button>
				</div>
			</form>
		</div>

<!-- DEBUT MENU  -->
				<aside>
					<h3>Menu</h3>
					<nav>
						<ul>
							<li><a href="Accueil.html">Accueil</a></li>
							<li><a href="Apropos.html">A propos</a></li>
							<li><a href="AjoutArticle.html">Soumettre un article</a></li>
						</ul>
					</nav>
				</aside>
				
				<aside>
					<h3>Recherche</h3>
					<form action="Recherche.html">
						<input name="Rechercher" type="text" placeholder="Rechercher">
					</form>
				</aside>

				<aside>	
					<h3>Liens externes</h3>
					<nav>
						<ul>
							<li><a href="Introuvable.html">Un jour, un poussin</a></li>
							<li><a href="Introuvable.html">Un jour, un ecureuil</a></li>
							<li><a href="Introuvable.html">Un jour, un fenouil</a></li>
							<li><a href="Introuvable.html">Un jour, une loutre</a></li>
						</ul>
					</nav>
				</aside>
			<!-- FIN MENU -->
		
		<footer>
			<p>Designed by Aline Legros | Cyril Weller</p>	
		</footer>
		</body>
		
 </html>