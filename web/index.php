<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: forside.php");
						die;
					}
				}
			}
			
			$invalid_login_error = "forkert brugernavn eller adgangskode!";
		}else
		{
			$invalid_login_error;
		}
	}

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
          <a href="index.php" class="fadeTrans"><img src="images/arcadia_logo_2.svg" alt="logo" class="logo"></a>
        </div>
    </header>
    <div class="sektion-login">
        <div class="boks">
            <h1>Login</h1>
            <hr>
            <div class="container">
                <form method="post">
                <p>Velkommen til Arcadia! Den førende side inden for online videospil. Kom med og bliv en del
                af vores fællesskab.
                </p>
                <p>Vi har et stort udvalg af spil til dem, som vil prøve sine kræfter af og udfordre sig selv.</p>               
                <input type="text" name="user_name" placeholder="Brugernavn"> <br>
                <input type="password" name="password" placeholder="Adgangskode"> <br>
                <input type="submit" value="Log på">

                <?php if(isset($invalid_login_error)) {?>		
						<p><?php echo $invalid_login_error ?></p>	
				<?php } ?>

                </form>
            </div>
            <div class="container2">
                <div>
                <p>Mangler du en bruger? Så meld dig til siden gennem
                   vores registeringen.</p>
                </div>
                <div>
                    <a href="tilmeld.php">Tilmeld</a>  
                </div>
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