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
			<div class="grandParentContaniner">
				<div class="parentContainer">
					<form action="" method="POST" id="form" autocomplete="off">
						<label for="fname"><b>Vorname</b></label>
						<input type="text" placeholder="Vorname" name="vname" id="vname" required>

						<label for="nname"><b>Nachname</b></label>
						<input type="text" placeholder="Nachname" name="nname" id="nname"required>
						
						<label for="uname"><b>Benutzer</b></label>
						<input type="text" placeholder="Benutzer" name="bname" id="bname" required>
						
						<label for="psw"><b>Password</b></label>
						<input type="password" placeholder="Password" name="psw" id="psw" required>
						
						<label for="psw1"><b>Password bestätigen</b></label>
						<input type="password" placeholder="Passwort bestätigen" name="psw1" id="psw1" required>
						<?php 
							include 'db_connect.php'; 

							 if(isset($_POST['submit']) && !empty($_POST['submit'])){
								
								$vname = $_POST['vname'];
								$nname = $_POST['nname'];
								
								$count = 0;
								
								$user = mysqli_real_escape_string($db ,$_POST['bname']);
								$pass = mysqli_real_escape_string($db ,$_POST['psw']);
								
								$query_user = "SELECT * FROM BENUTZER WHERE BENUTZER = '$user'";
								$query_pass = "SELECT PASSWORD FROM BENUTZER";
								
								$result = mysqli_query($db, $query_user);
								$row_user = mysqli_num_rows($result);
								
								$result = mysqli_query($db, $query_pass);
								while($row = mysqli_fetch_assoc($result)){
									if (password_verify($pass, $row['PASSWORD'])) {
												$count++;
										}
								
								}
								
								if($_POST['psw']!= $_POST['psw1']){
									echo  'Die passworte sind nicht gleich!';
								}
								elseif(strlen($_POST['psw']) < 6){
									echo 'Passwort zu kurz. Min. 6 zeichen.';
								}
								elseif($row_user > 0){
									echo 'Benutzer name wechseln!';
								}
								elseif($count > 0){
									echo 'Passwort wechsel!';
								}
								else{
									$hash_pass = password_hash($pass, PASSWORD_DEFAULT);
									
									if (password_verify($pass, $hash_pass)) {
											$sql = "INSERT INTO BENUTZER (VORNAME, NACHNAME, BENUTZER, PASSWORD, ADMIN) VALUES ('$vname', '$nname', '$user', '$hash_pass', 'N')";

											if(! mysqli_query($db,$sql)){
												echo 'Nicht registriert';
											}
											else{
												echo 'Registriert';
											}
										}
										else{
											echo 'ERROR'; 
										}
								
								}				 
							}
						?>
						<div class="sub_res">
							<input type="submit" value="Registrieren" name="submit"/>
							<span>
								<a href="m_rent.php">Anmelden</a>
							</span>
						</div>
					</form>
					<p>* Bitte registrien Sie sich. Falls Sie ein Automobile bei Rent a M Mieten wollen.</p>
				</div>
			</div>
		</main>	
		<footer id="footer">
				<p>copyright &copy; 2018. Ante Karačić &trade;</p>
		</footer>
	</body>
</html>


