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
			<h1 class="h1Index">BMW M4 CS</h1>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="image/bmw_m4.jpg" width= 100% title="BMW M4">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m4_1.jpg" width= 100% title="BMW M4">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m4_2.jpg" width= 100% title="BMW M4">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m4_3.jpg" width= 100% title="BMW M4">
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<p>Der neue BMW M4 CS steht als Sondermodell in einer Tradition von einzigartigen High-Performance Automobilen. Sportliche Dynamik auf höchstem Niveau, 
			überragende Performance und überraschende Alltagstauglichkeit. Das Hochleistungstriebwerk in Kombination mit einer aerodynamischen Carbon-Leichtbau Karosserie 
			befeuert diesen Extremsportler zur Nordschleifen-Rundenzeit von beachtlichen 7:38 Minuten. Zeit für eine neue Legende: der BMW M4 CS.
			Kraftstoffverbrauch in l/100 km (kombiniert): 8,4. CO2-Emission in g/km (kombiniert): 197. Als Basis für die Verbrauchsermittlung gilt der ECE-Fahrzyklus. 
			Abbildungen zeigen Sonderausstattungen.</p>
			<p>Muskeln aus Stahl, Aluminium und Carbon (CFK). Durch den konsequenten Einsatz von Leichtbaumaterialien sinken beim BMW M4 CS das Fahrzeuggewicht und der Schwerpunkt – 
			gleichzeitig steigen die Dynamik und die Agilität. So bestehen beispielsweise die Motorhaube, der Frontsplitter, der Heckdiffusor und der Heckspoiler, sowie das Dach aus 
			leichtem und hochfestem Carbon (CFK). Auch im Interieur wurde auf jedes Gramm geachtet: der neue BMW M4 CS besticht mit gewichtsoptimierten Leichtbau M Sportsitzen für 
			Fahrer und Beifahrer, die hervorragenden Seitenhalt bieten und griffig mit einer Leder-Alcantara-Kombination bezogen sind. Mit jeder Faser (oder Kohlefaser): Der neue 
			BMW M4 CS macht unmissverständlich klar, dass er ein Hochleistungssportwagen ist.</p>
			<p>Die exzellente Fahrdynamik des neuen BMW M4 CS beruht nicht nur auf seinem spontan ansprechenden und kraftvollen Triebwerk, sondern auch auf dem Einsatz zahlreicher 
			weiterer Hochleistungskomponenten. Die elektromechanische Lenkung M Servotronic, das Aktive M Differenzial und ein besonders sportlich ausgelegtes M 
			Doppelkupplungsgetriebe ermöglichen herausragende Performance auf Straße und Rennstrecke. Für ein Höchstmaß an Agilität, Lenkpräzision sowie Alltagstauglichkeit sorgt 
			das speziell abgestimmte Adaptive M Fahrwerk mit drei verschiedenen Fahrmodi, mit denen die Dämpferabstimmung in Abhängigkeit von Streckenbedingungen und Fahrstil 
			optimiert werden kann.</p>
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


