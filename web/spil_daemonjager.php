<?php

session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="js_spil/main.js" defer></script>
</head>
<body>
    <header>
        <div class="container">
          <a href="forside.php" class="fadeTrans"><img src="images/arcadia_logo_2.svg" alt="logo" class="logo"></a>
        </div>
    </header>
    <nav>
        <div class="container"> 
            <div class="boks1">
                <img src="images/profilbillede_2.svg" alt="profilbillede">
                <a href="log_ud.php" class="fadeTrans">Logout</a>
            </div>
            <div class="boks2">
            <ul>
                <li>
                    <a href="forside.php" class="fadeTrans">forside</a>
                </li>
                <li>
                    <a href="spil.php"class="current">spil</a>
                </li>
                <li>
                    <a href="nyheder.php" class="fadeTrans">nyheder</a>
                </li>
            </ul>
            </div> 
        </div>
    </nav>
    <div class="sektion-spil-daemonjager">
        <div class="boks">
            <h1>Dæmonjager</h1>
            <hr>
            <div class="container">
                <center>
                    <canvas id="canvas"></canvas>
                </center>
                <p>Der er opstået kaos i kongeriget! De mørke kræfter har sluppet monstre løs og bragt bøndernes live i fare.
                Der er nu op til dig at redde disse mennesker fra ondskabens klør. Brug piletastene til at bevæge dig rundt.
                Saml point op og nå hen til bonden.    
                </p>
                <p id="besked"></p> <br>
                
                <a href="spil.php">Gå tilbage</a>
            </div>   
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="info">
                <ul>
                    <h4>Information</h4>
                    <hr>
                    <li>Arcadia Ltd.</li>
                    <li>2800 Kongens Lyngby</li>
                    <li>Nørgaardsvej 30</li>
                    <li>(+45) 12 34 56 78</li>
                </ul>
            </div> 
            <div class="om_os">
                <ul>
                    <h4>Om os</h4>
                    <hr>
                    <li>Personale</li>
                    <li>Copyright</li>
                </ul>
            </div> 
            <div class="sociale_medier">
                <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook_logo.svg" alt="facebook logo" class="fadeTrans"></a>
                <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram_logo.svg" alt="instagram logo" class="fadeTrans"></a>
                <a href="https://twitter.com/" target="_blank"><img src="images/twitter_logo.svg" alt="twitter logo" class="fadeTrans"></a>
            </div>

        </div>
    </footer>
</body>
</html>