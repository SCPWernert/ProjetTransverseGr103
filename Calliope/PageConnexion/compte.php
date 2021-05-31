<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: inscription.php');
        die();
    }
    if(isset($_GET['reg_exit'])){
        session_destroy();
        header('Location:inscription.php');
        die();
    }

    if(!isset($_GET['string'])){
        $user = $_SESSION['user'];
        header("Location:http://calliopeback/compte_traitement.php?user=$user");
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
                <h1>Vous êtes connecté avec l'adresse email : <?php echo $_SESSION['user']; ?> </h1>
                <h1>
                    <?php 
                        $string = $_GET['string'];
                        if($string != ""){
                            echo "Vous avez déjà visité : <br>".$string;
                        }else{
                            echo "Vous n'avez pas encore visité de musée";
                        }
                    ?>
                </h1>
                <form method="post" action="compte.php?reg_exit">
                    <button type="submit">Se déconnecter</button>
                </form>
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