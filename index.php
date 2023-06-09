<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="Script/Script.js" defer></script>

</head>

<body>
    <header id="test">
        <nav class="home">
            <ul>
                <li><a class="on" href="#">MINI JEUX</a></li>
                <li><a href="#">CREDITS</a></li>
                <li><a href="#">NOUS CONTACTER</a></li>
            </ul>
        </nav>

        <div class="right">
            <input id="searchbar" type="text" name="search" placeholder="Rechercher un jeu ...">
            <img src="./asset/icone-mario.png" alt="">
            <a class="log" href="./Registration/login.php">Se connecter</a>
            <a class="sign" href="./Registration/register.php">S'inscrire</a>
        </div>
        <div class="clear"></div>
        <span class="barre"></span>

        <div class="rondlogo">
            <article class="span">
                <span class="rond rondun"></span>
                <span class="rond ronddeux"></span>
                <span class="rond rondtrois"></span>
                <span class="rond rondquatre"></span>
                <span class="rond rondcinq"></span>
                <span class="rond rondsix"></span>
            </article>
            <article class="logotexte">
                <img src="asset/logogeekgame.png" alt="">
                <p class="textlogo">Lorem Ipsum is simply dummy text of the printing and typesetting <br>
                    industry. Lorem Ipsum has been the industry's standard dummy <br>
                    text ever since the 1500s, when an unknown printer took a galle... <br> </p>
            </article>

            <article class="textejeu">
                <h1 id="titrejeu"></h1>
                <p class="descrijeu">Lorem Ipsum is simply dummy text of the printing and typesetting <br>
industry. Lorem Ipsum has been the industry's standard dummy text <br>
ever since the 1500s, when an unknown printer took a galley of type <br>
and scrambled it to make a type specimen book. It has survived not <br>
only five centuries, but also the leap into electronic typesetting, <br>
remaining essentially unchanged. It was popularised in the 1960s <br>
with the release of Letraset sheets containing Lorem Ipsum passages <br>
and more recently with desktop publishing software like Aldus <br>
PageMaker including versions of Lorem Ipsum.</p>
                    <a href="#">Jouer au jeu</a>
            </article>
        </div>

        <section class="minijeu">
            <h2>LISTE DES JEUX</h2>
            <div class="jeux">
                <article id="quiz">
                    <img src="asset/backjeuun.jpg" alt="">
                    <h2>QUIZ GEEK</h2>
                </article>

                <article id="septdiff">
                    <img src="asset/backjeudeux.jpg" alt="">
                    <h2>7 DIFFERENCES</h2>
                </article>

                <article  id="justeprix">
                    <img src="asset/backjeutrois.jpg" alt="">
                    <h2>LE JUSTE PRIX</h2>
                </article>

                <article id="snake">
                    <img src="asset/backjeuquatre.jpg" alt="">
                    <h2>SNAKE</h2>
                </article>

                <article id="flappybird">
                    <img src="asset/backjeucinq.jpg" alt="">
                    <h2>FLAPPY BIRD</h2>
                </article>

                <article id="pingpong">
                    <img src="asset/backjeusix.jpg" alt="">
                    <h2>PING PONG</h2>
                </article>
            </div>
            
        </section>

    </header>
</body>

</html>