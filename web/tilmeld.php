<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && strlen($password) >= 6)
		{

			
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);
			header("Location: succesfuld_tilmeldning.php");
			die;
		} 
		else if(empty($user_name) && empty($password))
		{
			$empty_username_password_error = "Udfyld felterne";
		} 
		else if(empty($user_name))
		{	
			$empty_username_error = "Brugernavn mangler";
		} 
		else if(empty($password)){	
			$empty_password_error = "Adgangskode mangler";
		} 
		else if(strlen($password) < 6){
			$password_length_error = "Adgangskode skal min. indeholde 6 tegn";
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
    <div class="sektion-tilmeld">
        <div class="boks">
            <h1>Tilmeld dig her</h1>
            <hr>
            <div class="container">
                <form method="post">
                <p>Her kan du skrive dig op til vores webside. Når du har
                    indsendt de nødvendige oplysniger, kan du logge dig på og få adgang
                    til vores spil.  </p>              

                <input type="text" name="user_name" placeholder="Brugernavn" value="<?php echo htmlspecialchars($user_name)?>"> <br>
                
                <input type="text" name="password" placeholder="Adgangskode (min. 6 tegn)" value="<?php echo htmlspecialchars($password)?>"> <br>
                
                <input type="submit" value="Tilmeld">
                
                <?php if(isset($empty_username_error)) {?>		
					<p><?php echo $empty_username_error ?></p>	
				<?php } ?>

				<?php if(isset($empty_password_error)) {?>		
					<p><?php echo $empty_password_error ?></p>	
				<?php } ?>
				
				<?php if(isset($empty_username_password_error)) {?>		
					<p><?php echo $empty_username_password_error ?></p>	
				<?php } ?>
				
				<?php if(isset($password_length_error)) {?>		
					<p><?php echo $password_length_error ?></p>	
				<?php } ?>
				
            
            </form>
            </div>
            <div class="container2">
                <div>
                <p>Har du allerede oprettet en bruger? Så gå tilbage og log dig på. </p>
                </div>
                <div>
                    <a href="index.php">Login</a>  
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