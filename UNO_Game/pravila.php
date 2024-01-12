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
			
					<form action="game.php" method="post">
				<input type="hidden" id="ime" name="ime" value="<?php echo $_POST['ime'];?> ">
				<input type="submit" value="pocetna">
				
				
			</div>
	
				
	
	
	 <div class ="pravila">
	<h2>pravila</h2>
	 
	  <p>Korisnik može da baci kartu na tablu ako je ta karta iste boje ili znaka kao trenutna karta na tabli i ako je trenutno na potezu. Ako nema kartu koja ispunjava uslove korisnik vuče novu kartu iz špila(klikom na sliku). Igrač kojem je polje iza špila plavo je na potezu i može da stavi novu kartu na tablu. Karta ako ispunjava uslove će ostati na tabli i prekriti prethodnu a nestaće iz ruke korisnika koji ju je postavio. Cilj igre je da ostanete bez karata pre protivnika.</p>
	 </div>
	
	
	
	
	
	<br>
	
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