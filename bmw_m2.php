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
			<h1 class="h1Index">BMW M2 Competition</h1>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="image/bmw_m2.jpg" width= 100% title="BMW M2">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m2_1.jpg" width= 100% title="BMW M2">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m2_2.jpg" width= 100% title="BMW M2">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_m2_3.jpg" width= 100% title="BMW M2">
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<p>Der BMW M2 Competition braucht keine Ziellinie, um Erster zu sein. Mit seinem enormen Leistungspotenzial und der herausragenden Agilität lässt er die 
			Konkurrenz weit hinter sich. Dank zweier, gewichtsoptimierter Turbolader reagiert das Hochleistungstriebwerk mit extrem direktem Ansprechverhalten und unbändiger 
			Drehfreude – perfekt für schnelle Sprints und sportliche Kurven. Der Sound der M Sportabgasanlage lässt sich per Knopfdruck an den jeweiligen Fahrmodus anpassen – 
			kraftvoll und tonangebend in jedem Moment. Dabei sorgt das rennstreckenerprobte Kühlkonzept für die optimale Betriebstemperatur und das M spezifische Fahrwerk für 
			präzises Handling. Ein Fahrzeug für alle, die das Rennen von vorn bestimmen wollen.</p>
			<p>Aufregend. Sportlich. Unangepasst. Der BMW M2 Competition wirkt mit jedem Detail wie pures Adrenalin. Vergrößerte Lufteinlässe und die Doppelsteg Niere in schwarz 
			hochglänzend mit M2 Badge dominieren die Front. Von der beeindruckenden Motorhaube aus zieht sich die charakteristische Coupé-Silhouette bis hin zum muskulös modellierten
			Heck. Markante 19'' M Leichtmetallräder sorgen für dynamische Spannung, M Kiemen mit M2 Modellkennzeichnung und M Außenspiegel in Wagenfarbe unterstreichenden 
			Rennsportcharakter. In der Rückansicht signalisieren der M Diffusor und die abgeschrägten Endrohre in schwarz Chrom sportliche Ambitionen in Höchstform.</P>
			<p>Ein Cockpit, wie für die Rennstrecke gebaut: Konsequent fahrerorientiert präsentiert sich das M spezifische Instrumentendisplay mit roten Zeigern, mittig platzierter
			Ölanzeige und M2 Competition Schriftzug. Auch das M Lederlenkrad ist auf Höchstleistung optimiert. Über die M1/M2 Tasten lassen sich individuelle Fahrprofile 
			konfigurieren, während die Schaltwippen im Zusammenspiel mit dem M Doppelkupplungsgetriebe Gangwechsel in Sekundenschnelle ermöglichen. Komplettiert wird das Set-up von 
			den optionalen M Sportsitzen: In schwarzem Leder Dakota mit illuminiertem M2 Logo bieten sie nicht nur eine besonders starke Optik, sondern auch perfekten Halt – M Design
			auf der Zielgeraden, vom Motorsport inspiriert.</p>
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


