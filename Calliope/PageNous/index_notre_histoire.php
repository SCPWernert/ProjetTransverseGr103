<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Notre histoire</title>
        <link rel="stylesheet" href="../Menu&Footer/menu.css">
        <link rel="stylesheet" href="style_notre_histoire.css" type="text/css">
    </head>

    <body>
        <header>
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
        </header>
        <main>
            <div class="Title">
                <h1>Notre histoire</h1>
            </div>

            <div>
                <h2>Lorsqu'un projet scolaire devient profesionnel</h2>
            </div>

            <div class="background_paragraphe_quoi">
                <div class="paragraphe_quoi">
                    <p><Strong>Le quoi</Strong><br><br>En 2020, notre école d’ingénieurs, Efrei Paris, nous a proposé un projet particulier, le projet transverse. Ce dernier avait pour objectif, l’amélioration de notre monde actuel par le biais de créations informatiques. C’est pourquoi, nous nous sommes lancés le défi, de promouvoir la culture française avec un site internet.</p>
                </div>
                <div class="paragraphe_quoi_vide"></div>
            </div>

            <div class="flex_paragraphe_photo">

                <div class="flex1">
                    <div class="paragraphe_qui">
                        <p><Strong>Le qui</Strong><br><br>Désireux de vouloir donner de la force à la culture française, nous nous sommes naturellement trouvés, entre étudiants et pour un but commun. Nous avons alors rapidement créé des liens forts qui nous permis d’être productifs, efficaces et créatifs.</p>
                    </div>

                    <div class="img1f">
                        <img src="image/img1_nous.png" class="img1">
                    </div>
    
                    <div class="img2f">
                        <img src="image/img2_nous.png" class="img2">
                    </div>

                </div>

                <div class="second">
                    <div class="col_para">
                        <div class="paragraphe_quand">
                            <p><Strong>Le quand</Strong><br><br>Le contexte a joué pour nous un rôle primordial. En effet, sans la pandémie de COVID-19, nous n’aurions pas eu cette idée de projet et nous serions sûrement partis sur un tout autre thème. De plus, l’aspect informatique de ce projet a permis sa réalisation, et cela, malgré les confinements et les autres procédures.</p>
                        </div>

                        <div class="paragraphe_ou">
                            <p><Strong>Le où</Strong><br><br>Etant étudiants parisiens, nous avons souhaité nous diriger sur les musées de la Capitale. Par ailleurs, avec plus de 200 musées, Paris reste la ville la plus intéressante de France en matière de culture.</p>
                        </div>

                        <div class="paragraphe_comment">
                            <p><Strong>Le comment</Strong><br><br>De part son objectif et de son contexte, ce projet a été créé en groupe par le télétravail. Le travail a été réparti, entre les cinq membres du groupe et en trois grands pôle : le pôle programmation, le pôle design et le pôle rédaction. </p>
                        </div>

                        <div class="paragraphe_pourquoi">
                            <p><Strong>Le pourquoi</Strong><br><br>Dans ce contexte de pandémie et de dépression du peuple français, il était pour nous nécessaire, voire même obligatoire, d’aider la culture française à se reconstruire. C’est pourquoi, pour préparer la période post-COVID, nous avons souhaiter créé un site recommandant les musées à la population.</p>
                        </div>
                    </div>
                    <div class="img3f">
                        <img src="image/img3_nous.png" class="img3">
                    </div>
                    <div class="empty"></div>
                </div>
            </div>

        </main>

        <footer>
            <div class="footer">
              <a href = "../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
              <a href = "../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
            </div>
        </footer>
    </body>
</html>