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
			<?php 
				include 'db_connect.php';
				include 'sessionOnOff.php';

				 if(isset($_POST['submit']) && !empty($_POST['submit'])){
						
					$a = $_POST['vorname'];
					$b = $_POST['nachname'];
					$c = $_POST['email'];
					$d = $_POST['sex'];
					$e = $_POST['text'];
					
					if($sessionOnOff == 1){
						include 'session.php'; 
						$f = $user;
					}else{
						$f = '';
					}

					$insert_sql = "INSERT INTO FORMULAR (VORNAME, NACHNAME, EMAIL, GESCHLECHT, NACHRICHT, BENUTZER)
									 VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";
					
					if ($db->query($insert_sql) === TRUE) {
						
					}
				 }
			?>
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
					if($sessionOnOff == 1){
						include 'session.php';
						echo $user;
						echo '</br><a class="abmeldenR"  href="session_destroy.php">Abmelden</a>';
					}	
				?>
			</p>
			<div class="divAnfrage">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.52609625984!2d11.55565991794669!3d48.1772142181928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e767d8a0057d1%3A0xa5353cc93ef3e778!2sBMW+Welt!5e0!3m2!1shr!2shr!4v1541104701207" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div>
				<p>Mit diesem Antragsformular erhalten Sie detaillierte Informationen zu jedem Mietwagen von Rent a M.</p>
				<h3 class="hAnfrage">Bitte füllen Sie das folgende Formular aus:<h3>
				<form action="" method="POST" id="form" onsubmit="return bestetigung(this);">
					<div class="row">
						<div class="col-25">
							<label for="fname">Vorname:</label>
						</div>
						<div class="col-75">
							<input type="text" id="fname" name="vorname" placeholder="Vorname.."required>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="lname">Nachname:</label>
						</div>
						<div class="col-75">
							<input type="text" id="lname" name="nachname" placeholder="Nachname.." required>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="email">E-mail Adresse:</label>
						</div>
						<div class="col-75">
							<input type="email" id="email" name="email" placeholder="Your email.." required>
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="geschlecht">Geschlecht:</label>
						</div>
						<div class="col-75">
							<input type="radio" name="sex" value="Mann" /> Mann
							<input type="radio" name="sex" value="Frau" /> Frau
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							<label for="nachricht">Nachricht:</label>
						</div>
						<div class="col-75">
							<textarea style="resize:none" name="text" rows="15" cols="40"  placeholder="Text eingeben..."></textarea>
						</div>
					</div>
					<div class="sub_res">
					<input type="submit" value="Senden" name="submit"/> <input type="reset" value="Wegwerfen"/>
					</div>
				</form>
				<p>Wir freuen uns auf Ihre Anfrage.</p>
			</div>
		</main>	
		<footer id="footer">
				<p>copyright &copy; 2018. Ante Karačić &trade;</p>
		</footer>
		<script>
			function bestetigung() {
				return alert('Nachricht wurde erfolgreich gesendet.');
			}
		</script>
	</body>
</html>