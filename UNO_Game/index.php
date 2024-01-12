<!DOCTYPE html>

<html>
	<head>
		
		<meta name charset= "UTF-8">
		<meta name "autor" content= "Uros K">
		<meta name "keywords" content= "">
		<title> logIn </title>
		
		
		<link rel ="stylesheet" href="./css.css" type="text/css">		
	</head>	
	
	<body>
	
	<header id="header">
						<br>
					<div class= "crvena">	
						<h1>UNO<h1>
						
				
					</div>	
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
			</header>
	
	<div class="topnav">
				
				<a href="signUp.php">Sign Up</a>
				
			</div>
	
	
	
	
		
<br><br>
	
	<div class = "crvena border">
			
				<h2> Prijava </h2>
				
		<section >
       
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
				<label id="username1" for="username">Korisničko ime:</label>
				<input type="text" id="username" name="username" required><br>

				<label id="password1" for="password">Lozinka:</label>
				<input type="password" id="password" name="password" required><br>

				<input id="submit" type="submit" value="Prijavi se">
				
				
			</form>
			
			<br>
			
			
			<br>
			<br>
			
			
		
 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "maturski";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        // Povezivanje sa bazom podataka
        $conn = new mysqli($servername, $username, $password, $dbname);
			
		$username = $_POST['username'];
        $password = $_POST['password'];


        if ($conn->connect_error) {
            die("Greška prilikom povezivanja sa bazom podataka: " . $conn->connect_error);
        }

        // Provera korisničkih podataka u bazi
        $checkUserQuery = "SELECT * FROM korisnik WHERE username = '$username' AND password = '$password'";
        $checkUserResult = $conn->query($checkUserQuery);

        if ($checkUserResult->num_rows == 1) {
            echo "Uspešno ste se ulogovali $username.";
			echo '
				<script>
				
				document.getElementById("username").style.display = "none";
				document.getElementById("password").style.display = "none";
				document.getElementById("username1").style.display = "none";
				document.getElementById("password1").style.display = "none";
				document.getElementById("submit").style.display = "none";
				
			
				</script>';
			

			echo '<form action="game.php" method="post">';
			echo '<input type="hidden" id="ime" name="ime" value="' . htmlspecialchars($username) . '">';
			echo '<input type="submit" value="Pošalji">';
			echo '</form>';
        } else {
            echo "Pogrešno korisničko ime ili lozinka.";
        }

        // Zatvaranje veze sa bazom podataka
        $conn->close();
    }
    ?>
	
		
		
	<br><br>
  
	
	
	
    </div>
</section>

   






	<div>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
		<footer>

  <div class="contact-info">
  
    <div class="social-media">
    <a href="https://www.facebook.com">Facebook</a>
    <a href="https://www.twitter.com">Twitter</a>
    <a href="https://www.instagram.com">Instagram</a>
    <a href="https://www.linkedin.com">LinkedIn</a>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">YouTube</a>
  </div>
    <p>Kontaktirajte nas: testzasvee@email.com</p>
    <p>Telefon: +123456789</p>
  </div>
</footer>
	
	
	
	
	
	
			<script type="text/javascript" src ="./script.js"> </script>
	</body>
		</html>