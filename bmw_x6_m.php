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
			<h1 class="h1Index">BMW X6 M</h1>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="image/bmw_x6_m.jpg" width= 100% title="BMW X6 M">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_x6_m_1.jpg" width= 100% title="BMW X6 M">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_x6_m_2.jpg" width= 100% title="BMW X6 M">
				</div>
				<div class="mySlides fade">
					<img src="image/bmw_x6_m_3.jpg" width= 100% title="BMW X6 M">
				</div>
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span> 
			</div>
			<p>Die muskulöse Schulterlinie schließt mit einem markanten Heckspoiler ab. Unterhalb werden die M Heckschürze und der Diffusor von zwei M spezifischen 
			Doppelendrohren als sportlichem Schlusspunkt eingefasst. In der Seitenansicht prägen die zweigeteilte Sicke- und die deutlich herausgearbeitete Schwellerlinie
			das Sports Activity Coupé während die M Kieme mit Air Breather für verringerte  Luftverwirbelungen im vorderen Radlauf sorgt. Die M Doppelstegniere und die M 
			typische Frontschürze mit großen Lufteinlässen betonen die außergewöhnliche Fahrdynamik des BMW X6 M. Im Cockpit werden Fahrer und Beifahrer zu Piloten, wenn die 
			M Sportsitze besonders in schnellen Kurven perfekten Seitenhalt bieten.</p>
			<p>Ein Kraftpaket in der eleganten Gestalt eines Sports Activity Coupés. Konstruiert für Höchstleistungen, souverän im Charakter und bereit für die Rennstrecke. Für 
			vielseitige Herausforderungen gerüstet. Immer auf der Jagd nach rasanten Kurven und Wegen abseits gewohnter Pfade. Eine einzigartige Kombination: komfortabel, wenn Sie 
			einsteigen – enorm kraftvoll, sobald Sie das Gaspedal berühren. Kraftstoffverbrauch in l/100 km (kombiniert): 11,1. CO2-Emission in g/km (kombiniert): 258. 
			Die Verbrauchswerte wurden auf Basis des ECE-Testzyklus ermittelt. Abbildungen zeigen Sonderausstattungen.</p>
			<p>Der BMW X6 M setzt auch im Interieur neue Maßstäbe. Als eine besonders hochwertige Variante des BMW Individual Leders Merino Feinnarbe beeindruckt besonders die 
			Kombination aus Lederausstattung in Rauchweiß und der lederbezogenen Instrumententafel in Scotch dunkel. Eine Farbkombination, die ihresgleichen sucht und ein luxuriöses 
			Innenraumgefühl verspricht. Im Interieur bildet die BMW Individual Interieurleiste in in elegantem Pianolack Schwarz einen faszinierenden Kontrast zum seidig-matten, 
			rauchweißen Leder Merino Feinnarbe von BMW Individual.</p>
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


