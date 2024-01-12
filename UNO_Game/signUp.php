<!DOCTYPE html>

<html>
	<head>
		
		<meta name charset= "UTF-8">
		<meta name "autor" content= "Uros K">
		<meta name "keywords" content= "">
		<title> signUp </title>
		
		
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
				<a href="index.php">Log in</a>
			</div>
	<br>
	<br>
	
	<div class = "crvena border">
	<h2>Registracija</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Korisničko ime:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Lozinka:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Registruj se">
    </form>		
			
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

        // Provera da li korisnik već postoji u bazi
        $checkUserQuery = "SELECT * FROM korisnik WHERE username = '$username'";
        $checkUserResult = $conn->query($checkUserQuery);

        if ($checkUserResult->num_rows > 0) {
            echo "Korisničko ime već postoji. Molimo izaberite drugo korisničko ime.";
        } else {
            // Dodavanje novog naloga u bazu
            $insertUserQuery = "INSERT INTO korisnik (username, password) VALUES ('$username', '$password')";

            if ($conn->query($insertUserQuery) === TRUE) {
                echo "Uspešno ste se registrovali.";
            } else {
                echo "Greška prilikom registracije: " . $conn->error;
            }
        }

        // Zatvaranje veze sa bazom podataka
        $conn->close();
    }
    ?>
    
    
	<br><br>
	</div>
	
	<br><br>
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
	
	</body>