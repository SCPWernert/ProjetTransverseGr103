<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musée Rodin</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="../../Menu&Footer/menu.css"/>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="musee_style.css"/>

</head>

<body>
	<header>
	<nav id = "navbar">
				<a href = "../../PageAccueil/index_accueil.php" class = "logo"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/logo détouré.png"></a>

				<div class = "navbar_bloc_infos">
					<a href="../../PageAccueil/index_accueil.php #h1black"  ><div class = "navbar_infos">Classements</div></a>
					<a href="../../PageRecommandation/inedx_recommanation.php"  ><div class = "navbar_infos">Recommandations</div></a>
					<a href="../../PageListeMusée/page_musées_flex.php"  ><div class = "navbar_infos">Musées</div></a>
				</div>

				<div class = "navbar_bloc_connexion">
					<a href = "../../PageAccueil/index_accueil.php #newsletter"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_newsletter_png.png"></img></a>
					<a href = "../Calliope/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_loupe_png.png"></img></a>
         	       <a href = "../../PageConnexion/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_account_png.png"></img></a>
				</div>
		</nav>

	</header>



<div id="Page_muse_du_Louvre">
	<div class="title">
		<h1>Le Musée Rodin</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Un penseur toujours aussi pensant..." </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;Le musée Rodin est un musée assurant depuis 1919 la conservation et la diffusion de l’œuvre d’Auguste Rodin (1840-1917). À travers ses deux sites, l'hôtel Biron de la rue de Varenne dans le 7e arrondissement à Paris et la villa des Brillants à Meudon (Hauts-de-Seine), l’établissement conserve une collection composée de près de 6 800 sculptures, 8 000 dessins, 10 000 photographies anciennes et 8 000 autres objets d’art. Avec 700 000 visiteurs par an, le musée Rodin compte parmi les musées français les plus importants.

			Il a le statut d'établissement public à caractère administratif depuis 1993. [source : wikipédia]</p>
		<br><br>
	</div>

	<?php
		if(isset($_SESSION['user'])){
			$email = $_SESSION['user'];
			echo "
			<div class='historique'>
				<form method='post' action='http://calliopeback/historic.php?name=Le musee Rodin&amp;email=$email'>
					<button type='submit'>J'ai visité ce musée</button>
				</form>
			</div>";
		}
		?>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.137568262694!2d2.3135367657722004!3d48.85558705885788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6702a1eccdb43%3A0x6468d82811b67058!2sRodin%20Museum!5e0!3m2!1sen!2sfr!4v1619290672366!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>