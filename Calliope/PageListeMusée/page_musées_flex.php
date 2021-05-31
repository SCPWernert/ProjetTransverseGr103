<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title> Page musées </title>
        <link href="style_flexbox.css" rel="stylesheet" type="text/css">
        <link href="../Menu&Footer/menu.css" rel="stylesheet" type="text/css">
        <link href="imagehover.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <nav id = "navbar">
              <a href = "../PageAccueil/index_accueil.php" class = "logo"><img class = "navbar_icônes" src = "../Menu&Footer/IconeMenu/logo détouré.png"></a>

              <div class = "navbar_bloc_infos">
                <a href="../PageAccueil/index_accueil.php #h1black"  ><div class = "navbar_infos">Classements</div></a>
                <a href="../PageRecommandation/index_recommanation.php"  ><div class = "navbar_infos">Recommandations</div></a>
                <a href="../PageListeMusée/page_musées_flex.php"  ><div class = "navbar_infos">Musées</div></a>
              </div>

              <div class = "navbar_bloc_connexion">
                <a href = "../PageAccueil/index_accueil.php #newsletter"><img class = "navbar_icônes" src = "../Menu&Footer/IconeMenu/Icone_newsletter_png.png"></img></a>
                <a href = "../Calliope/compte.php"><img class = "navbar_icônes" src = "../Menu&Footer/IconeMenu/Icone_loupe_png.png"></img></a>
                <a href = "../PageConnexion/compte.php"><img class = "navbar_icônes" src = "../Menu&Footer/IconeMenu/Icone_account_png.png"></img></a>
              </div>
        </nav>

        <h1 class="titre">LES MUSEES</h1>

        <div class="box">
          <figure class="imghvr-fade">
              <img class="musees" src="image_musee/louvre.jpg" alt="Le musée du Louvre" title="Le Louvre">        
              <figcaption>
                <a href="../PageMusée/Louvre/Musée du Louvre .php"></a><h2>Musée du Louvre</h2>
                <p class="description">
                  Situé dans le 1er arrondissement de Paris, sur la rive droite entre la Seine et la rue de Rivoli, 
                  le musée se signale par la pyramide de verre de son hall d'accueil, érigée en 1989 dans la cour Napoléon 
                  et qui en est devenue emblématique, tandis que la statue équestre de Louis XIV constitue le point de départ de l'axe historique parisien.
                </p>
              </figcaption>
          </figure>
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/musee-dorsay.jpg" alt="Musée d'Orsay" title="Le musée d'Orsay">               
            <figcaption>
              <a href="../PageMusée/Orsay/Orsay.php"></a><h2>Musée d'Orsay</h2>
              <p class="description">
                Situé dans le 7e arrondissement de Paris le long de la rive gauche de la Seine, il est installé dans l’ancienne gare d'Orsay, 
                réaménagée en musée sur décision du président de la République Valéry Giscard d'Estaing. Ses collections présentent l’art occidental de 1848 à 1914, 
                dans toute sa diversité : peinture, sculpture, arts décoratifs, art graphique, photographie, architecture, etc. Il est l’un des plus grands musées d’Europe pour cette période.
              </p>
            </figcaption>
          </figure>
        </div>

        <div class="box">
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/invalides.jpg" alt="Les Invalides" title="Les Invalides">               
            <figcaption>
              <a href="../PageMusée/Invalides/Invalides.php"></a><h2>Les Invalides</h2>
              <p class="description">
                L’hôtel des Invalides est un monument parisien dont la construction fut ordonnée par Louis XIV, pour accueillir les invalides de ses armées. 
                Demeuré fidèle à cette mission, il abrite également la cathédrale Saint-Louis des Invalides, plusieurs musées et une nécropole militaire avec notamment le tombeau de Napoléon Ier. 
              </p>
            </figcaption>
          </figure>
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/rodin.png" alt="Le musée Rodin" title="Le musée Rodin">               
            <figcaption>
              <a href="../PageMusée/Rodin/Rodin.php"></a><h2>Musée Rodin</h2>
              <p class="description">
                Le musée Rodin est un musée assurant depuis 1919 la conservation et la diffusion de l’œuvre d’Auguste Rodin (1840-1917). 
                À travers ses deux sites, l'hôtel Biron de la rue de Varenne dans le 7e arrondissement de Paris et la villa des Brillants à Meudon (Hauts-de-Seine), 
                l’établissement conserve une collection composée de près de 6 800 sculptures, 8 000 dessins, 10 000 photographies anciennes et 8 000 autres objets d’art.
              </p>
            </figcaption>
          </figure>
        </div>

        <div class="box">
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/centre_pompidou.jpg" alt="Centre Pompidou" title="Le centre Pompidou">               
            <figcaption>
              <a href="../PageMusée/Centre George Pompidou/Pompidou.php"></a><h2>Centre Pompidou</h2>
              <p class="description">
                Le centre Pompidou est un établissement pluridisciplinaire né de la volonté du président Georges Pompidou, 
                de créer au cœur de Paris une institution culturelle originale entièrement vouée à la création moderne et contemporaine 
                où les arts plastiques voisineraient avec les livres, le dessin, la musique, le spectacle vivant, les activités pour les jeunes publics, ainsi que le cinéma.
              </p>
            </figcaption>
          </figure>
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/quai_branly.jpg" alt="Musée Jacques Chirac" title="Musée Jacques Chirac">               
            <figcaption>
              <a href="../PageMusée/Quai Branly/Branly.php"></a><h2>Musée du quai Branly, Jacques Chirac</h2>
              <p class="description">
                Le musée du Quai Branly - Jacques-Chirac, est situé dans le 7e arrondissement de Paris, le long du quai de la Seine qui lui donne son nom et au pied de la tour Eiffel. 
                Le projet est inauguré le 20 juin 2006. Dix ans après son inauguration, le musée prend le nom de l'ancien président Jacques Chirac, à l'initiative du projet
              </p>
            </figcaption>
          </figure>
        </div>
        <div class="box">
          <figure class="imghvr-fade">
            <img class="musees" src="image_musee/cité_des_sciences.jpg" alt="Cité des sciences" title="Cité des sciences">               
            <figcaption>
            <a href="../PageMusée/Cité des sciences/Cité_des_sciences.php"></a><h2>Cité des sciences et de l'industrie</h2>
              <p class="description">
                La Cité des sciences et de l'industrie (CSI) est un établissement spécialisé dans la diffusion de la culture scientifique et technique.
                L'ensemble est situé au niveau de la porte de la Villette, sur un emplacement occupé auparavant par les abattoirs de la Villette, dans le 19e arrondissement de Paris.
                Elle est au cœur d'un dispositif visant à valoriser la culture scientifique et technique : les Centres de culture scientifique, technique et industrielle (CCSTI).
              </p>
            </figcaption>
          </figure>
        </div>
        <footer>
            <div class="footer">
              <a href = "../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
              <a href = "../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
            </div>
        </footer>
    </body>
</html>