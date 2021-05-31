<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>My Cultural Discovery</title>
        <meta name="viewport" content="width=device-width"/>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="../Menu&Footer/menu.css">
        <link rel="stylesheet" href="style_accueil.css">
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

      <div id = "partie1">
          <div id = "pt1_btn1"><div></div></div>
          <div id = "pt1_scroll"><a href = "#h1black"><div id = "scroll-down"><div></div><div></div><div></div></div></a></div>
          <div id = "pt1_btn2"><div></div></div>
      </div>
     
      <h1 id = "h1black"><br>Top3 du moment</h1>
      <div id = "partie2">
          <div id = "p2_1">
            <div id = "top3I">
              <div class = "top3_1">1</div>
              <div class = "top3_2"><h2>Invalides</h2><br><p>Construit sous le roi soleil, ce bâtiment est un des fleurons de l'histoire de la France. Il accueille aussi le musée de l'armée ainsi que le tombeau de l'empereur Napoléon Ier.</p></div>
            </div>

            <div id = "top3II">
              <div class = "top3_1">2</div>
              <div class = "top3_2"><h2>Louvre</h2><br><p>Qui n'a jamais entendu parler du Louvre ? En effet, ce musée connu dans le monde entier habrite des oeuvres connues telles que la Joconde, Le Sacre de Napoléon ou encore Les Noces de Cana.</p></div>
            </div>

            <div id = "top3III">
              <div class = "top3_1">3</div>
              <div class = "top3_2"><h2>Centre Pompidou</h2><br><p>SI tu souhaites découvrir l'art moderne dans tous ses états, viens visiter le Centre Pompidou.</p></div>
            </div>
          </div>
          <img id ="img_pt2" src = "image/Statue.jpg">
      </div>

    <div class="back_newsletter" id="newsletter">
        <div class="formulaire1">
          <form action="/ma-page-de-traitement" method="post">
          <div class="flex_form">
              <h2 class="news">Vous aimez les musées ? <br> Abonnez-vous à notre Newsletters !</h2>
              <div class="flex1">
                  <div class="flex_name">
                      <label for="name"><strong>Nom</strong><br></label>
                          <input type="text" id="name" name="formulaire"  required>
                  </div>
                  <div class="flex_surname">
                      <label for="surname"><strong>Prénom</strong><br></label>
                          <input type="text" id="surname" name="formulaire"  required>
                      </div>
              </div>
              <label for="email" class="email"><strong>Email</strong><br></label>
                  <input type="email" id="email" name="formulaire"  required>
              <div class="button">
                  <button type="submit">Envoyer</button>
              </div>
          </div>
          </form>
      </div>
      <div><a href = "#partie3"><div id = "scroll-down2"><div></div><div></div><div></div></div></a></div>
  </div>


  <div id = "partie3">
    <div id = "hd_main">
      <div id = "hd_1">Les derniers commentaires postés sur le site</div>
      <div id = "hd_2">
          <div class = "hd_comm">
              <div class = "hd_img"><br><br></div> 
              <div class = "hd_block_text">
                  <h1><strong>Nom</strong></h1>
                  <div class = "para_flex">
                      <p class = "p1">“</p>
                      <p class = "p2">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsumlorem ipsum</p>
                      <p class = "p3">”</p>
                  </div>
              </div>
          </div>

          <div class = "hd_comm">
              <div class = "hd_img"><br><br></div> 
              <div class = "hd_block_text">
                  <h1><strong>Nom</strong></h1>
                  <div class = "para_flex">
                      <p class = "p1">“</p>
                      <p class = "p2">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsumlorem ipsum</p>
                      <p class = "p3">”</p>
                  </div>
              </div>
          </div>

          <div class = "hd_comm">
              <div class = "hd_img"><br><br></div> 
              <div class = "hd_block_text">
                  <h1><strong>Nom</strong></h1>
                  <div class = "para_flex">
                      <p class = "p1">“</p>
                      <p class = "p2">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsumlorem ipsum</p>
                      <p class = "p3">”</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


    <footer>
            <div class="footer">
              <a href = "../PageNous/index_notre_histoire.php" class="foot"><strong>Notre histoire</strong></a>
              <a href = "../PageNousContacter/index_contact.php" class="foot"><strong>Nous contacter</strong></a> 
            </div>
    </footer>

 

      <noscript>Veuillez autoriser javascript</noscript>
      
      <script>

        let partie1 = document.getElementById("partie1");
        let pt1_btn1 = document.getElementById("pt1_btn1");
        let pt1_btn2 = document.getElementById("pt1_btn2");
        pt1_btn1.onclick = précédent;
        pt1_btn2.onclick = suivant;

        function précédent() {partie1.style.backgroundImage = "url('image/Mona Lisa.jpg')"}
        function suivant() {partie1.style.backgroundImage = "url('image/phone.png')"}

        let scroll_down = document.getElementById("scroll-down");
        scroll_down.onclick = animation_top3I;

        function animation_top3I(){
            let top3I = document.getElementById("top3I");
            top3I.style.animationDuration = '3s';
            top3I.style.animationName = 'glissement_Top3';

            let top3II = document.getElementById("top3II");
            top3II.style.animationDuration = '5s';
            top3II.style.animationName = 'glissement_Top3';

            let top3III = document.getElementById("top3III");
            top3III.style.animationDuration = '7s';
            top3III.style.animationName = 'glissement_Top3';
        }

        let scroll2 = document.getElementById("scroll-down2");
        scroll2.onclick = zoom;

        function zoom() {
            let partie3 = document.getElementById("partie3");
            let hd_main = document.getElementById("hd_main");
            partie3.style.animationDuration = '7s';
            partie3.style.animationName = 'effet_zoom';
            if (partie3.style.width < '2120px') {hd_main.style.display = 'none';}
                hd_main.style.display = 'unset';
        }
      </script>
    </body>
</html>