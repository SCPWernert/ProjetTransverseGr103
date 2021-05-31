<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Centre George Pompidou</title>
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
		<h1>Centre George Pompidou</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Une beauté architecturale" </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;Le centre national d’art et de culture Georges-Pompidou (CNAC) – communément appelé « centre Georges-Pompidou », « centre Pompidou » ou « centre Beaubourg » et familièrement « Beaubourg » – est un établissement pluridisciplinaire né de la volonté du président Georges Pompidou, grand amateur d'art moderne, de créer au cœur de Paris une institution culturelle originale entièrement vouée à la création moderne et contemporaine où les arts plastiques voisineraient avec les livres, le dessin, la musique, le spectacle vivant, les activités pour les jeunes publics, ainsi que le cinéma.

			Il est situé dans le quartier Saint-Merri, dans le 4e arrondissement de Paris, entre le quartier des Halles, à l'ouest, et le Marais, à l'est.
			
			Il emploie un milliers de personnes (1 075,8 ETPT dont 1 009,8 sous plafond d’emploi et 66 hors plafond d’emploi en 2019) et a un budget en recettes de 119,7 M€, composé pour l’essentiel de 78,5 M€ de subventions de l’État et de 41,2 M€ de recettes propres1.
			
			Inauguré le 31 janvier 1977, le centre Pompidou a accueilli, en 2019, 3 273 867 visiteurs1, soit une moyenne de 10 595 visites par jour. Au sein du musée national d'Art moderne / centre de création industrielle (MNAM / CCI), il conserve l'une des deux plus importantes collections d'art moderne et contemporain au monde, et la première d'Europe avec 113 675 œuvres1 de 6 000 artistes au 1er janvier 2019.
			
			Il abrite également d'importantes galeries d'expositions temporaires, des salles de spectacles et de cinéma, et la Bibliothèque publique d'information (BPI), première bibliothèque publique de lecture en Europe. De part et d'autre de la Piazza, deux bâtiments annexes accueillent l'Institut de recherche et coordination acoustique/musique (IRCAM) et l'atelier Brancusi. [source : wikipédia]</p>
		<p><br>&emsp;</p>
		<br><br>
	</div>

	<?php
	if(isset($_SESSION['user'])){
		$email = $_SESSION['user'];
		echo "
		<div class='historique'>
			<form method='post' action='http://calliopeback/historic.php?name=Le centre Pompidou&amp;email=$email'>
				<button type='submit'>J'ai visité ce musée</button>
			</form>
		</div>";
	}
	?>


	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1560.7582139577798!2d2.35135717180601!3d48.86065165599619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1c09b820a3%3A0xb7ac6c7e59dc3345!2sLe%20Centre%20Pompidou!5e0!3m2!1sen!2sfr!4v1619289698245!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>