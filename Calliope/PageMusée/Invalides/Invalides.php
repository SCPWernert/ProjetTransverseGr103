<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Page musée des Invalides</title>
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
					<a href = "../../PageConnexion/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_loupe_png.png"></img></a>
                	<a href = "../../PageConnexion/compte.php"><img class = "navbar_icônes" src = "../../Menu&Footer/IconeMenu/Icone_account_png.png"></img></a>
				</div>
			</nav>
		
	</header>




<div id="Page_muse_du_Louvre">
	<div class="title">
		<h1>Les Invalides</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Plus qu'interessant! A visiter!" </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;L’hôtel des Invalides est un monument parisien dont la construction fut ordonnée par Louis XIV par l'édit royal du 24 février 16702, pour accueillir les invalides de ses armées. Demeuré fidèle à cette mission, il abrite également la cathédrale Saint-Louis des Invalides, plusieurs musées et une nécropole militaire avec notamment le tombeau de Napoléon Ier. Siège de hautes autorités militaires comme le gouverneur militaire de Paris, il rassemble aussi nombre d'organismes dédiés à la mémoire des anciens combattants et au soutien des soldats blessés.

			Cet immense complexe architectural, conçu par Libéral Bruand et Jules Hardouin-Mansart, est un des chefs-d’œuvre les plus importants de l'architecture classique française.
			
			Ce site est desservi par les stations de métro Invalides, Varenne et La Tour-Maubourg. Avant 1860, il était situé dans le 10e arrondissement « ancien » d'où l'enregistrement du décès des militaires dans l'« état civil reconstitué » de la capitale qu'on peut trouver dans différentes bases de données. [source : wikipédia]</p>
		<br><br>
	</div>

	<?php
	if(isset($_SESSION['user'])){
		$email = $_SESSION['user'];
		echo "
		<div class='historique'>
			<form method='post' action='http://calliopeback/historic.php?name=Les invalides&amp;email=$email'>
				<button type='submit'>J'ai visité ce musée</button>
			</form>
		</div>";
	}
	?>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5250.220577655612!2d2.3084055292019716!3d48.85610726714919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fd7b98f3053%3A0x455a14459c80c16a!2sLes%20Invalides!5e0!3m2!1sen!2sfr!4v1619290085084!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>