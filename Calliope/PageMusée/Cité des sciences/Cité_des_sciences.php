<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cité des sciences</title>
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
		<h1>La Cité des sciences et de l'industrie</h1>
	</div>

	<div class="background">	</div>
	<main>	
	<div class="avis">
		<p class="avis1">"Un réel plaisir pour les neurones !" </p>
		<p class="avis2">Avis d'un de nos utilisateurs.</p>
	</div>
	<div class="description">
		<p><br>&emsp;La Cité des sciences et de l'industrie (CSI) est un établissement français spécialisé dans la diffusion de la culture scientifique et technique. 
            Créée à l'initiative du président Valéry Giscard d'Estaing, elle a pour mission de diffuser à un large public, notamment aux enfants et aux adolescents, les connaissances scientifiques et techniques, ainsi que de susciter l'intérêt des citoyens pour les enjeux de société liés à la science, à la recherche et à l'industrie. 
            L'ensemble est situé au niveau de la porte de la Villette, sur un emplacement occupé auparavant par les abattoirs de la Villette, dans le 19e arrondissement de Paris. Elle est au cœur d'un dispositif visant à valoriser la culture scientifique et technique : les Centres de culture scientifique, technique et industrielle (CCSTI). 
            Avec la Philharmonie de Paris et le Conservatoire national supérieur de musique et de danse de Paris, elle fait partie du parc de la Villette. [source : wikipédia]</p>
		<br><br>
	</div>
	<?php
	if(isset($_SESSION['user'])){
		$email = $_SESSION['user'];
		echo "
		<div class='historique'>
			<form method='post' action='http://calliopeback/historic.php?name=Citee des Sciences&amp;email=$email'>
				<button type='submit'>J'ai visité ce musée</button>
			</form>
		</div>";
	}
	?>

	<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.0300715350527!2d2.3859147639389873!3d48.89576406283255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c32df92aa0f%3A0x52d157d86ddecf27!2sCit%C3%A9%20des%20sciences%20et%20de%20l&#39;industrie!5e0!3m2!1sfr!2sfr!4v1621332459625!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>	</div>
</main>
<footer>
    <div class="footer">
      <a href = "../../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
      <a href = "../../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
    </div>
</footer>
</body>
</html>