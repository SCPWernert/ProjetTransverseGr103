<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Recommandations</title>
        <link rel="stylesheet" href="../Menu&Footer/menu.css">
        <link rel="stylesheet" href="style_recommanation.css" type="text/css">
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

      <div class="flex_container">
        <h1>Les recommandations des rédacteurs</h1>

        <div class="flex_item">
            <a href="../PageMusée/Louvre/Musée du Louvre .php" class="text"><h2>Intéressé par l'histoire ?</h2></a>
            <img src="image/Rectangle 20.png" class="image">
        </div>

        <div class="flex_item">
            <img src="image/Rectangle 21.png" class="image">
            <a href="../PageMusée/Cité des sciences/Cité_des_sciences.php" class="text"><h2>Intéressé par la science ?</h2></a>
        </div>

        <div class="flex_item">
            <a href="../PageMusée/Centre George Pompidou/Pompidou.php" class="text"><h2>Intéressé par l'art <br> comptemporain ?</h2></a>
            <img src="image/Rectangle 22.png" class="image">
        </div>

        <div class="flex_item">
            <img src="image/Rectangle 23.png" class="image">
            <a href="../PageMusée/Invalides/Invalides.php" class="text"><h2>Intéressé par l'armée ?</h2></a>
        </div>
      </div>

       
      <footer>
            <div class="footer">
              <a href = "../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
              <a href = "../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
            </div>
        </footer>


    </body>
</html>