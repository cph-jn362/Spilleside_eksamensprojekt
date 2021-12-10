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
                    <a href="forside.php" class="current">forside</a>
                </li>
                <li>
                    <a href="spil.php" class="fadeTrans">spil</a>
                </li>
                <li>
                    <a href="nyheder.php" class="fadeTrans">nyheder</a>
                </li>
            </ul>
            </div> 
        </div>
    </nav>
    <div class="sektion-populære-spil">
        <div class="boks">
            <h1>Populære spil</h1>
            <hr>
            <div class="container">
                    <a href="spil_daemonjager.php">
                        <div class="thumbnail fadeTrans">                        
                                <img src="images/daemonjager_thumbnail.svg" alt="spil 1">
                               <h2>Dæmonjager</h2> 
                        </div>
                    </a>
                    <a href="#">
                        <div class="thumbnail fadeTrans">
                                    <img src="images/placeholder_image.svg" alt="spil 1">
                                    <h2>titel</h2>
                        </div>
                    </a>    
                    <a href="#">
                        <div class="thumbnail fadeTrans">
                                    <img src="images/placeholder_image.svg" alt="spil 1">
                                    <h2>titel</h2>
                        </div>
                
                </a> 
                </div>
            </div>
    </div>
    <div class="sektion-nyheder-forside">
        <div class="boks1">
            <h1>Nyhed</h1>
            <hr>
            <div class="container">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolores ad ipsa unde est doloribus doloremque fugit minus. 
                </p> 
                <p>
                Accusamus optio explicabo harum maiores ducimus error numquam!
                </p>  
            </div>
        </div>
        <div class="boks2">
            <h1>Nyhed</h1>
            <hr>
            <div class="container">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Quis dolorum doloremque iusto voluptas velit vitae veniam 
                   maxime! Porro aliquam sit culpa ipsa laboriosam nihil nobis, 
                   recusandae doloremque architecto rerum cum? </p>
                <p>Fugiat maxime 
                   est qui quibusdam magni, hic earum ipsam delectus, harum incidunt 
                   consequatur nemo dolore consequuntur itaque, nam ut quis.</p>
            </div>
        </div>
    </div>
    <div class="sektion-nye-spil">
        <div class="boks">
            <h1>Nye spil</h1>
            <hr>
            <div class="container">
                    <a href="spil_daemonjager.php">
                        <div class="thumbnail fadeTrans">                        
                                <img src="images/daemonjager_thumbnail.svg" alt="spil 1">
                               <h2>Dæmonjager</h2> 
                        </div>
                    </a>
                    <a href="#">
                        <div class="thumbnail fadeTrans">
                                    <img src="images/placeholder_image.svg" alt="spil 1">
                                    <h2>titel</h2>
                        </div>
                    </a>    
                    <a href="#">
                        <div class="thumbnail fadeTrans">
                                    <img src="images/placeholder_image.svg" alt="spil 1">
                                    <h2>titel</h2>
                        </div>
                    </a>  
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