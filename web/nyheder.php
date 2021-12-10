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
                    <a href="spil.php" class="fadeTrans">spil</a>
                </li>
                <li>
                    <a href="nyheder.php" class="current">nyheder</a>
                </li>
            </ul>
            </div> 
        </div>
    </nav>
    <div class="sektion-nyheder">
        <div class="boks1">
            <h1>Nyhed</h1>
            <hr>
            <div class="container">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                   Odit facere molestiae eius consequuntur voluptas officiis, 
                   nemo accusamus tenetur? Impedit ipsa officiis consequatur ut, 
                   ab voluptatum esse fuga nulla laboriosam doloremque.
                </p>
            </div>
        </div>
        <div class="boks2">
            <h1>Nyhed</h1>
            <hr>
            <div class="container">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                   Odit facere molestiae eius consequuntur voluptas officiis, 
                   nemo accusamus tenetur? Impedit ipsa officiis consequatur ut, 
                   ab voluptatum esse fuga nulla laboriosam doloremque temporibus 
                   facilis assumenda eaque vitae vero cum non rerum deserunt dolores? 
                   Quidem earum voluptatum id odit tempore veniam amet.
                </p>
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