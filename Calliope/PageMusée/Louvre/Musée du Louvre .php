<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Musée du Louvre</title>
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
		<h1>Le Louvre</h1>
	</div>

	<div class="background">	</div>
	<main>	
		<div class="avis">
			<p class="avis1">"Un lieu sublime et rempli d'histoire" </p>
			<p class="avis2">Avis d'un de nos utilisateurs.</p>
		</div>
		<div class="description">
			<p><br>&emsp;Le musée du Louvre est un musée situé dans le 1er arrondissement de Paris, en France.</p>
			<p><br>&emsp;Une préfiguration en est imaginée en 1775-1776 par le comte d'Angiviller, directeur général des Bâtiments du roi, comme lieu de présentation des chefs-d'œuvre de la collection de la Couronne. Ce musée n'a été inauguré qu'en 1793 sous l'appellation de Muséum central des arts de la République dans le palais du Louvre, ancienne résidence royale située au centre de Paris, et il est aujourd'hui le plus grand musée d'art et d'antiquités au monde. Sa surface d'exposition est de 72 735 m28.</p>
			<p><br>&emsp;Fin 2016, ses collections comprenaient 554 731 œuvres, dont 35 000 exposées et 264 486 œuvres graphiques. Celles-ci présentent l'art occidental du Moyen Âge à 1848, celui des civilisations antiques qui l'ont précédé et influencé (orientales, égyptienne, grecque, étrusque et romaine), les arts des premiers chrétiens et de l'islam.</p>
			<p><br>&emsp;Situé dans le 1er arrondissement de Paris, sur la rive droite entre la Seine et la rue de Rivoli, le musée se signale par la pyramide de verre de son hall d'accueil, érigée en 1989 dans la cour Napoléon et qui en est devenue emblématique, tandis que la statue équestre de Louis XIV constitue le point de départ de l'axe historique parisien.</p>
			<p><br>&emsp;En 2018, avec environ 10,2 millions de visiteurs annuels, le Louvre est le musée le plus visité au monde. Il est le site culturel payant le plus visité de France. Parmi ses pièces les plus célèbres figurent La Joconde, la Vénus de Milo, Le Scribe accroupi, La Victoire de Samothrace et le Code de Hammurabi.</p>
			<p><br>&emsp;Le Louvre possède une longue histoire de conservation artistique et historique, depuis l'Ancien Régime jusqu'à nos jours. À la suite du départ de Louis XIV pour le château de Versailles à la fin du xviie siècle, on y entrepose une partie des collections royales de tableaux et de sculptures antiques. Après avoir durant un siècle hébergé plusieurs académies dont celle de peinture et de sculpture, ainsi que divers artistes logés par le roi, l'ancien palais royal est véritablement transformé sous la Révolution en « Muséum central des arts de la République ». Il ouvre en 1793 en exposant environ 660 œuvres, essentiellement issues des collections royales ou confisquées chez des nobles émigrés ou dans des églises. Par la suite les collections ne cesseront de s'enrichir par des prises de guerre, acquisitions, mécénats, legs, donations, et découvertes archéologiques. [source : wikipédia]</p>
			<p><br>&emsp;Le musée compte pour sa gestion 2 091 employés (fonctionnaires, contractuels et vacataires), dont 1 232 agents de surveillance, un garde pour chacune des 403 salles d’exposition, que complètent les effectifs affectés aux 900 caméras du système de télésurveillance9.</p>
			<br><br>
		</div>

		<?php
		if(isset($_SESSION['user'])){
			$email = $_SESSION['user'];
			echo "
			<div class='historique'>
				<form method='post' action='http://calliopeback/historic.php?name=Le Louvre&amp;email=$email'>
					<button type='submit'>J'ai visité ce musée</button>
				</form>
			</div>";
		}
		?>

		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9285439544965!2d2.338892126736701!3d48.859572966392356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e214e955553%3A0x542b8e04be39e5f4!2sMus%C3%A9e%20du%20Louvre%20-%20D%C3%A9partement%20des%20Antiquit%C3%A9s%20Orientales!5e0!3m2!1sen!2sfr!4v1618927122077!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</main>
	<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</div>
</body>
</html>