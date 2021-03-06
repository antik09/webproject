<!DOCTYPE HTML>
<html>
	<head>
		<title>Rent a M</title>
		<html lang="de">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ante Karačić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/png" href="image/bmw_logo_icon.png">
		<link href="https://fonts.googleapis.com/css?family=Russo+One|Yantramanav" rel="stylesheet"> 
	</head>
	<body>
		<header id="header">
			<img src="image/angel-eyes.png" width= 100% title="Angel Eyes">
			<img class="imageBanner" src="image/mperformance.png" width= 30% title="M Performance">
			<div  style="width:100%">
				<nav id="nav">
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="automobile.php">AUTOMOBILE</a></li>
						<li><a href="anfragen.php">ANFRAGEN</a></li>						
						<li><a href="m_rent.php">M RENT</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<main id="main">
			<p class="nameR">
				<?php 
					include 'db_connect.php';
					include 'sessionOnOff.php';

					if($sessionOnOff == 1){
						include 'session.php';
						echo $user;
						echo '</br><a class="abmeldenR"  href="session_destroy.php">Abmelden</a>';
					}	
				?>
			</p>
			<h1 class="h1Index">BMW M3 Limousine</h1>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="image/bmw_m3.jpg" width= 100% title="BMW M3">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m3_1.jpg" width= 100% title="BMW M3">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m3_2.jpg" width= 100% title="BMW M3">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m3_3.jpg" width= 100% title="BMW M3">
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<p>Ein 4-türiger Hochleistungssportwagen mit atemberaubendem Design und zahlreichen aus dem Motorsport abgeleiteten technologischen Innovationen. Mit einem 431 PS
			starken M TwinPower Turbo Reihen-6-Zylinder Benzinmotor, der spontane Leistungsentfaltung bei jeder Drehzahl bietet. Für adrenalinreiche Fahrmomente, in denen 
			eins sofort klar wird: Hier werden seit fünf Generationen Bestmarken gesetzt – die BMW M3 Limousine. Kraftstoffverbrauch in l/100 km (kombiniert): 8,8 (8,3) 
			CO2-Emission in g/km (kombiniert): 204 (194). Die Angaben in Klammern beziehen sich auf das Fahrzeug mit 7-Gang M Doppelkupplungsgetriebe mit Drivelogic. Die 
			Verbrauchswerte wurden auf Basis des ECE-Testzyklus ermittelt. Abbildungen zeigen Sonderausstattungen.</p>
			<p>Die Heckschürze mit integriertem Diffusor reduziert effektiv den Auftrieb während die M Kieme mit Air Breather die Aerodynamik verbessert. Die M 
			Doppelstegniere in schwarz glänzendem Chrom mit M Emblem unterstreicht, dass die BMW M3 Limousine für die Pole Position gebaut ist. Auf den ersten Blick verraten 
			die Frontschürze mit charakteristischen Lufteinlässen und der Powerdome auf der Motorhaube das enorme Leistungspotenzial. Spätestens im Interieur wird deutlich, 
			dass der BMW M3 eher für Piloten als für Fahrer entworfen wurde: Das M Lederlenkrad mit Chromspange und Schaltwippen, die M Sitze mit Schalencharakter und das M 
			spezifische Instrumentenkombi mit weißen Grafiken vermitteln echte Rennsport-Atmosphäre.</p>
			<p>Mit dem optionalen M Competition Paket bringt die BMW M3 Limousine dank gesteigerter Motorleistung und einer ganzen Reihe aus dem Rennsport inspirierter Innovationen
			noch mehr Dynamik auf die Straße. Erleben Sie Ihren BMW M3 dank BMW M Performance Parts so sportlich individuell wie nie. Zum Beispiel mit dem BMW M Performance 
			Schalldämpfersystem. Die Abgasanlage sorgt für einen eindrucksvoll satten Motorsound. Zugleich reduziert sie den Abgasgegendruck.</p>
		</main>	
		<footer id="footer">
				<p>copyright &copy; 2018. Ante Karačić &trade;</p>
		</footer>
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
				   slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>
	</body>
</html>


