<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musée du Quai Branly</title>
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
					<a href = "../../Calliope/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_loupe_png.png"></img></a>
                	<a href = "../../PageConnexion/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_account_png.png"></img></a>
				</div>
		</nav>

	</header>



<div id="Page_muse_du_Louvre">
	<div class="title">
		<h1>Le Quai Branly</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Impressionante façade, et ce lieu regorge d'histoire." </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;Le musée du Quai Branly - Jacques-Chirac, parfois appelé musée des Arts et Civilisations d'Afrique, d'Asie, d'Océanie et des Amériques (civilisations non européennes), est situé dans le 7e arrondissement de Paris, le long du quai de la Seine qui lui donne son nom et au pied de la tour Eiffel. Le projet, porté par Jacques Chirac et réalisé par Jean Nouvel, est inauguré le 20 juin 2006. La fréquentation se situe à près de 1 500 000 visiteurs en 2014 et franchit en 2016 le cap des 10 millions depuis son ouverture, ce qui le place parmi les plus fréquentés au monde dans sa catégorie.

			Le 21 juin 2016, dix ans après son inauguration, le musée prend le nom de l'ancien président Jacques Chirac, à l'initiative du projet5. Son emblème est une statuette Chupicuaro. [source : wikipédia]</p>
		<br><br>
	</div>

	<?php
		if(isset($_SESSION['user'])){
			$email = $_SESSION['user'];
			echo "
			<div class='historique'>
				<form method='post' action='http://calliopeback/historic.php?name=Musee du quai Branly&amp;email=$email'>
					<button type='submit'>J'ai visité ce musée</button>
				</form>
			</div>";
		}
		?>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.859533597798!2d2.2957053160221745!3d48.860888879287806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fe0da76cf63%3A0xb7949d5df6b04424!2sQuai%20Branly%20Museum!5e0!3m2!1sen!2sfr!4v1619290436941!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>