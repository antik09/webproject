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
				<div>
					<h3 class="hIndex">BMW M2 Competition</h3>
					<a href="bmw_m2.php">
						<img class="ImageAuto" src="image/bmw_m2.jpg"  title="BMW M2">
					</a>
					<p>Der BMW M2 Competition braucht keine Ziellinie, um Erster zu sein. Mit seinem enormen Leistungspotenzial und der herausragenden Agilität lässt er die 
					Konkurrenz weit hinter sich. Dank zweier, gewichtsoptimierter Turbolader reagiert das Hochleistungstriebwerk mit extrem direktem Ansprechverhalten und unbändiger 
					Drehfreude – perfekt für schnelle Sprints und sportliche Kurven. Der Sound der M Sportabgasanlage lässt sich per Knopfdruck an den jeweiligen Fahrmodus anpassen – 
					kraftvoll und tonangebend in jedem Moment. Dabei sorgt das rennstreckenerprobte Kühlkonzept für die optimale Betriebstemperatur und das M spezifische Fahrwerk für 
					präzises Handling. Ein Fahrzeug für alle, die das Rennen von vorn bestimmen wollen.</p>
					</br>
					<h3 class="hIndex">BMW M3 Limousine</h3>
					<a href="bmw_m3.php">
						<img class="ImageAuto" src="image/bmw_m3.jpg"  title="BMW M3">
					</a>
					<p>Ein 4-türiger Hochleistungssportwagen mit atemberaubendem Design und zahlreichen aus dem Motorsport abgeleiteten technologischen Innovationen. Mit einem 431 PS
					starken M TwinPower Turbo Reihen-6-Zylinder Benzinmotor, der spontane Leistungsentfaltung bei jeder Drehzahl bietet. Für adrenalinreiche Fahrmomente, in denen 
					eins sofort klar wird: Hier werden seit fünf Generationen Bestmarken gesetzt – die BMW M3 Limousine. Kraftstoffverbrauch in l/100 km (kombiniert): 8,8 (8,3) 
					CO2-Emission in g/km (kombiniert): 204 (194). Die Angaben in Klammern beziehen sich auf das Fahrzeug mit 7-Gang M Doppelkupplungsgetriebe mit Drivelogic. Die 
					Verbrauchswerte wurden auf Basis des ECE-Testzyklus ermittelt. Abbildungen zeigen Sonderausstattungen.</p>
					</br>
					<h3 class="hIndex">BMW M4 CS</h3>
					<a href="bmw_m4.php">
						<img class="ImageAuto" src="image/bmw_m4.jpg"  title="BMW M4">
					</a>
					<p>Der neue BMW M4 CS steht als Sondermodell in einer Tradition von einzigartigen High-Performance Automobilen. Sportliche Dynamik auf höchstem Niveau, 
					überragende Performance und überraschende Alltagstauglichkeit. Das Hochleistungstriebwerk in Kombination mit einer aerodynamischen Carbon-Leichtbau Karosserie 
					befeuert diesen Extremsportler zur Nordschleifen-Rundenzeit von beachtlichen 7:38 Minuten. Zeit für eine neue Legende: der BMW M4 CS.
					Kraftstoffverbrauch in l/100 km (kombiniert): 8,4. CO2-Emission in g/km (kombiniert): 197. Als Basis für die Verbrauchsermittlung gilt der ECE-Fahrzyklus. 
					Abbildungen zeigen Sonderausstattungen.</p>
					</br>
					<h3 class="hIndex">BMW M5 Competition</h3>
					<a href="bmw_m5.php">
						<img class="ImageAuto" src="image/bmw_m5.jpg"  title="BMW M5">
					</a>
					<p>Der neue BMW M5 ist die kompromisslose Verbindung aus eleganter Business-Limousine und konsequent umgesetzter High-Performance: Große Lufteinlässe in der 
					athletisch gestalteten Front versorgen das M V8-Hochleistungstriebwerk mit kühlender Luft. Die Linien der charakterstarken Aluminium-Motorhaube mit zwei 
					M-spezifischen Sicken finden ihre optische Fortsetzung in der Konturierung des Daches aus äußerst leichtem und stabilem kohlenstofffaserverstärkten Kunststoff (
					CFK). Der dezente M Heckspoiler unterstützt den sportlich-kraftvollen Auftritt und ist wichtiges Element des aerodynamischen Gesamtkonzeptes. Form follows 
					Performance – konsequent in jedem Detail.</p>
					</br>
					<h3 class="hIndex">BMW X6 M</h3>
					<a href="bmw_x6_m.php">
						<img class="ImageAuto" src="image/bmw_x6_m.jpg"  title="BMW X6 M">
					</a>
					<p>Die muskulöse Schulterlinie schließt mit einem markanten Heckspoiler ab. Unterhalb werden die M Heckschürze und der Diffusor von zwei M spezifischen 
					Doppelendrohren als sportlichem Schlusspunkt eingefasst. In der Seitenansicht prägen die zweigeteilte Sicke- und die deutlich herausgearbeitete Schwellerlinie
					das Sports Activity Coupé während die M Kieme mit Air Breather für verringerte  Luftverwirbelungen im vorderen Radlauf sorgt. Die M Doppelstegniere und die M 
					typische Frontschürze mit großen Lufteinlässen betonen die außergewöhnliche Fahrdynamik des BMW X6 M. Im Cockpit werden Fahrer und Beifahrer zu Piloten, wenn die 
					M Sportsitze besonders in schnellen Kurven perfekten Seitenhalt bieten.</p>
					</br>
					</br>
				</div>
		</main>	
		<footer id="footer">
				<p>copyright &copy; 2018. Ante Karačić &trade;</p>
		</footer>
	</body>
</html>


