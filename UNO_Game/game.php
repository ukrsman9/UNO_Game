!DOCTYPE html>
<html>
	<head>
		
		<meta name charset= "UTF-8">
		<meta name autor= "Uroš Krsmanović">
		
		<title> UNO </title>
		
		
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
			
				<form action="pravila.php" method="post">
				<input type="hidden" id="ime" name="ime" value="<?php echo $_POST['ime'];?> ">
				<input type="submit" value="pravila">
				
			</form>
				
				
			</div>
			
			<div class="crvena" >
			<h2 > Zdravo  <?php
				echo $_POST['ime'];
				?>
				 ! </h2>
			</div>
			
			
			
			<br><br><br>
			
			<div class="row">
					<div class="column side tabela">
							<h2>tabela rezultata<h2>
							
							<div id="demo">
				
				</div>
					
					</div>
  
					<div class="column middle">
					
						<h1>IGRAJ<h1>
						<button class="button" type="button"  onClick= "startGame()" > Play Game </button>
						
   
					</div>
  
					<div class="column side">
					
						<h2>Promeni spil<h2>	
						<div class="row">
							
							<div class="column side">
								<img src="images/BackCard.png" alt="spil1" height="150" width="100"/> 
								<br>
								<button  type="button"  onClick= "spil1()" > spil 1 </button>
								
							</div>
							
							<div class="column side">
    
								<img src="images/BackCard2.png" alt="spil2" height="150" width="100"/> 
								<br>
								<button  type="button"  onClick= "spil2()" > spil 2 </button>
								
							</div>
							
							<div class="column side">
    
								<img src="images/BackCard3.png" alt="spil3" height="150" width="100"/> 
								<br>
								<button  type="button"  onClick= "spil3()" >   spil 3   </button>
								
							</div>
							
						
						</div>
						
					</div>
			</div>
				
			
			
			
	
			
				
		
			
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div  class="player001"  id="player001">
			
			</div>
			
			
			
			<div class="row">
			
				<div class="columnTabla side">	
					<img class = "nema" id="idSlikeSpila"  src="images/BackCard2.png" onClick="VuciIzSpila()" alt="spil" height="150" width="100"/> 
				</div>
				
			
				<div class="columnTabla middle">
					<div id="prikaz">
					</div>
				
					<div id="tabla">
						<p></p>
					</div>
				</div>
				
				<div class="columnTabla side">	
					<div class="crvena hidden" id="unoLastText">
						<p>neko je zavrsio</p>
					</div>
					<img  class = "hidden " id="unoLast"  src="images/last.png" onClick="last()" alt="spil" height="75" width="50"/> 
				</div>
				
				
			</div>
			
		
			<div class="player000" id="player000">
			
				</div>
		
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
	<p>Telefon: +381 12345678</p>
		
  </div>
</footer>
	
	
			
			
			<script type="text/javascript" src ="./script.js"> </script>
	</body>
	
	</html>