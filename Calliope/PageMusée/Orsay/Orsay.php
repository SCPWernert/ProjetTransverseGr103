<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musée d'Orsay</title>
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
		<h1>Le Musée d'Orsay</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Un lieu habité d'une magnifique histoire." </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;Le musée d’Orsay (officiellement « établissement public du musée d'Orsay et du musée de l'Orangerie – Valéry Giscard d'Estaing » depuis 2021) est un musée national inauguré en 1986.

			Situé dans le 7e arrondissement de Paris le long de la rive gauche de la Seine, il est installé dans l’ancienne gare d'Orsay, construite par Victor Laloux de 1898 à 1900 et réaménagée en musée sur décision du président de la République Valéry Giscard d'Estaing. Ses collections présentent l’art occidental de 1848 à 1914, dans toute sa diversité : peinture, sculpture, arts décoratifs, art graphique, photographie, architecture, etc. Il est l’un des plus grands musées d’Europe pour cette période.
			
			Le musée possède la plus importante collection de peintures impressionnistes et postimpressionnistes au monde, avec près de 1 100 toiles3 au total sur plus de 3 650, et l’on peut y voir des chefs-d’œuvre de la peinture et de la sculpture comme Le Déjeuner sur l'herbe et l’Olympia d’Édouard Manet, une épreuve de La Petite Danseuse de quatorze ans de Degas, L'Origine du monde, Un enterrement à Ornans, L'Atelier du peintre de Courbet, Les Joueurs de cartes de Cézanne ou encore cinq tableaux de la Série des Cathédrales de Rouen de Monet et Bal du moulin de la Galette de Renoir.
			
			Des expositions temporaires monographiques ou thématiques concernant périodiquement l’œuvre d’un artiste, un courant ou une question d’histoire de l’art sont souvent mises en place. Un auditorium accueille des manifestations diversifiées, concerts, cinéma, théâtre d’ombres, conférences et colloques et des spectacles spécifiquement destinés à un jeune public. [source : wikipédia]</p>
		<br><br>
	</div>

	<?php
		if(isset($_SESSION['user'])){
			$email = $_SESSION['user'];
			echo "
			<div class='historique'>
				<form method='post' action='http://calliopeback/historic.php?name=Musee d Orsay&amp;email=$email'>
					<button type='submit'>J'ai visité ce musée</button>
				</form>
			</div>";
		}
		?>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9115833559067!2d2.324132816022127!3d48.85989637928762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2bc70d6f05%3A0xd143cbd954dda047!2sMusee%20D&#39;Orsay%2C%2075007%20Paris!5e0!3m2!1sen!2sfr!4v1619290306467!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>