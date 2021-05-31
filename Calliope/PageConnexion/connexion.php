<?php 
    session_start();
    if(isset($_GET['reg_user'])){
        $user = htmlspecialchars($_GET['reg_user']);
        $_SESSION['user'] = $user;
        //header('Location : http://calliopefront/PageConnexion/compte.php');
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Connexion</title>
        <link rel="stylesheet" href="../Menu&Footer/menu.css">
        <link rel="stylesheet" href="connexion.css" type="text/css">
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
        <div class="background">
            <div class="formulaire">
                <form action="http://calliopeBack/connexion_traitement.php" method="post">
                <h1>Connexion</h1>
                <div class="flex_form">
                        <label for="email"></label>
                            <input type="email" id="email" name="user_email" placeholder=" Email" required>
                        <label for="password"></label>
                            <input type="password" id="password" name="user_password" placeholder="Mot de passe" required>

                    <div class="button">
                        <button type="submit">Se connecter</button>
                    </div>
                </div>
                </form>
                <?php
                    if(isset($_GET['reg_err'])){
                        $err = htmlspecialchars($_GET['reg_err']);

                        switch($err)
                        {
                            case 'password':
                                echo "<div class='alert'>Attention mauvais mot de passe</div>";
                                break;
                            case 'email';
                                echo "<div class='alert'>Cet email n'est pas enregistré</div>";
                                break;
                        }
                    }
                    if(isset($_GET['reg_user'])){
                        echo "<div class='success'>Vous êtes bien connectés</div>";
                    }
                ?>
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