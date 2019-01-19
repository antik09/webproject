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
			<h1 class="h1Index">BMW M5 Competition</h1>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="image/bmw_m5.jpg" width= 100% title="BMW M5">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m5_1.jpg" width= 100% title="BMW M5">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m5_2.jpg" width= 100% title="BMW M5">
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<p>Der neue BMW M5 ist die kompromisslose Verbindung aus eleganter Business-Limousine und konsequent umgesetzter High-Performance: Große Lufteinlässe in der 
			athletisch gestalteten Front versorgen das M V8-Hochleistungstriebwerk mit kühlender Luft. Die Linien der charakterstarken Aluminium-Motorhaube mit zwei 
			M-spezifischen Sicken finden ihre optische Fortsetzung in der Konturierung des Daches aus äußerst leichtem und stabilem kohlenstofffaserverstärkten Kunststoff (
			CFK). Der dezente M Heckspoiler unterstützt den sportlich-kraftvollen Auftritt und ist wichtiges Element des aerodynamischen Gesamtkonzeptes. Form follows 
			Performance – konsequent in jedem Detail.</p>
			<p>Die neue Benchmark in der Klasse der High-Performance-Limousinen heißt BMW M5 Competition. Mit mehr Leistung als je zuvor ist der M5 Competition das bislang stärkste 
			Modell in der Geschichte von BMW M. Dazu wurde die vom Rennsport inspirierte Technologie in vielen Details weiter optimiert. Auch optisch untermauert das ikonische M 
			Automobil seinen Führungsanspruch auf einzigartig souveräne Art und Weise. BMW M5 Competition: Kraftstoffverbrauch in l/100 km (kombiniert): 10,8 - 10,7.
			CO2-Emissionin g/km (kombiniert): 246 - 243. Die Verbrauchswerte wurden auf Basis des ECE Testzyklus ermittelt. Abbildungen zeigen Sonderausstattungen.</p>
			<p>Maximale Fahrdynamik auf jeder Straße, bei allen Bedingungen. Mit dem neuen M xDrive mit Aktivem M Differenzial lässt sich die überragende Performance des BMW M5 noch 
			intensiver erleben. Durch eine zentrale intelligente Steuerung kombiniert das innovative System Agilität und Präzision des Standardantriebs mit der Souveränität und 
			Traktion des Allradantriebs. Der ambitionierte Fahrer kann M xDrive jederzeit nach seinen Bedürfnissen konfigurieren – bis hin zum reinen puristischen Hinterradantrieb.</p>
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


