<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Nous contacter</title>
        <meta name="viewport" content="width=device-width"/>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="../Menu&Footer/menu.css">
        <link rel="stylesheet" href="style_contact.css">
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


        <main>
        <div class="formulaire">
            <form action="/ma-page-de-traitement" method="post">
            <div class="flex_form">
                <h1 class="news">Contactez nous !</h1>

                <label for="email" class="email"><strong>Email</strong><br></label>
                    <input type="email" id="email" name="formulaire"  required>
  
                <label for="text" class="text"><strong>Votre message</strong><br></label>
                    <input type="text" id="text" name="message"  size ="150" row="5 "required>

                <div class="button">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
            </form>
        </div>
    </main>

        <footer>
            <div class="footer">
              <a href = "../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
              <a href = "index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
            </div>
        </footer>

    </body>
</html>