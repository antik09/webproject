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
			<?php
				if($sessionOnOff == 0){
					print
						'<div class="grandParentContaniner">
							<div class="parentContainer">
								<form action="" method="POST" id="form" autocomplete="off">
									<label for="uname"><b>Benutzer</b></label>
									<input type="text" placeholder="Benutzer" name="bname" id="bname" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Password" name="psw" id="psw" required>';
									
									if(isset($_POST['submit']) && !empty($_POST['submit'])){
					
										$count = 0;
									
										$user = mysqli_real_escape_string($db ,$_POST['bname']);
										$pass = mysqli_real_escape_string($db ,$_POST['psw']);
								
										$query_user = "SELECT * FROM BENUTZER WHERE BENUTZER = '$user'";
										$query_pass = "SELECT PASSWORD FROM BENUTZER WHERE BENUTZER = '$user'";
									
										$result = mysqli_query($db, $query_user);
										$row_user = mysqli_num_rows($result);
									
										$result = mysqli_query($db, $query_pass);
										while($row = mysqli_fetch_assoc($result)){
											if (password_verify($pass, $row['PASSWORD'])) {
												$count++;
											}						
										}
										
										if($row_user == 0){
											echo  'Benutzer existiert nicht!';
										}
										elseif($count == 0){
											echo 'Falsches passwort!';
										}
										else{
											$update_sql = "UPDATE SESSIONONOFF SET benutzerOnOff ='On' WHERE benutzerOnOff ='Off'";
											if ($db->query($update_sql) === TRUE) {
										
											}
											session_start();
											$_SESSION['loggedin']=$user; // Initializing Session
											header('location: m_rent.php'); // Redirecting To Other Page
										}
														
									}
									print'<div class="sub_res">
										<input type="submit" value="Anmelden" name="submit"/>
										<span>
											<a href="registrieren.php">Registrieren</a>
										</span>
									</div>
								</form>
								<p>* Falls Sie nicht registriert sind. Müssen Sie sich für die Mietung eines Automobile Registrieren.</p>
							</div>
						</div>';
				}
				elseif($sessionOnOff == 1){
					print
						'<div>
							<p>Die freude am M kann ihnen keiner nehmen.</p>
							<p>Bitte die Anmietung erst berechnen bevor Sie sie bestätigen!</p>
							<h3 class="hAnfrage">Bitte wählen sie das gewünschte Automobile aus:<h3>
							<form action="" method="POST" id="form" autocomplete="off">
								<div class="row">
									<div class="col-25">
										<label for="auto">Automobile:</label>
									</div>
									<div class="col-78">
										<select name="autoL" id="autoL" default="" onChange="swapImage()" required>
										<option value="" disabled selected>bitte wählen</option>
										<option value="image/bmw_m2.jpg">BMW M2 Competition</option>
										<option value="image/bmw_m3.jpg">BMW M3 Limousine</option>
										<option value="image/bmw_m4.jpg">BMW M4 CS</option>
										<option value="image/bmw_m5.jpg">BMW M5 Competition</option>
										<option value="image/bmw_x6_m.jpg">BMW X6 M</option>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for=""></label>
									</div>
									<div class="col-78">
										<select name="" id="">
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="datumV">VON:</label>
									</div>
									<div class="col-75">
										<input type="date" id="datumV" name="datumV" value="'; echo date("Y-m-d"); print'" required >
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="datumB">BIS:</label>
									</div>
									<div class="col-75">
										<input type="date" id="datumB" name="datumB" value="'; echo date("Y-m-d"); print'" required>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="autoBild">Ausgewältes Automobile:</label>
									</div>
									<div class="col-75">
											<img  id="imageToSwap" src="" class="imageSelect"/>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<label for="rechnen">Die Berechnung:</label>
									</div>
									<div class="col-75"></br>'; 
										if(isset($_POST['rechnen']) && !empty($_POST['rechnen']))
										{
											$datumVvar = $_POST['datumV'];
											$datumBvar = $_POST['datumB'];
											$odabranoAuto = $_POST['autoL'];
											
											$earlier = new DateTime($datumVvar);
											$later = new DateTime($datumBvar);
											$trenutniDatum = new DateTime();
												
											$diff = $trenutniDatum->diff($earlier)->format("%a");
											
											if($trenutniDatum < $earlier || $diff == 0)
											{
												if($earlier <= $later)
												{
													if($odabranoAuto == "image/bmw_m2.jpg")
													{
														$idAuto = 1;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														/*elseif($count == 0){
															echo 'Falsches passwort!';
														}
														else{
															$update_sql = "UPDATE SESSIONONOFF SET benutzerOnOff ='On' WHERE benutzerOnOff ='Off'";
															if ($db->query($update_sql) === TRUE) {
														
															}
														}*/
														$imeAutomobila = "BMW M2 Competition";
													}
													elseif($odabranoAuto == "image/bmw_m3.jpg")
													{
														$idAuto = 2;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M3 Limousine";
													}
													elseif($odabranoAuto == "image/bmw_m4.jpg")
													{
														$idAuto = 3;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M4 CS";
													}
													elseif($odabranoAuto == "image/bmw_m5.jpg")
													{
														$idAuto = 4;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M5 Competition";
													}
													elseif($odabranoAuto == "image/bmw_x6_m.jpg")
													{
														$idAuto = 5;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW X6 M";
													}
													$diff = $later->diff($earlier)->format("%a");
													if($diff == 0 )
													{
														$diff++;
													}
													if($gesamt != -1)
													{
														$datumVvarFormat = date("d.m.Y.", strtotime($datumVvar));
														$datumBvarFormat = date("d.m.Y.", strtotime($datumBvar));
														$rez = $diff * $preis;
														echo "Der $imeAutomobila für $diff Tage (pro Tag $preis &euro;) von $datumVvarFormat bis $datumBvarFormat ist $rez &euro;.";
														echo "</br>Wenn der Preis stimmt! Erneut die Form Ausfüllen.";
													}
													else
													{
														echo "Alle $imeAutomobila sind vermietet.</br>Wählen sie ein anderes Automobile.";
													}
													
												}
												else
												{
													echo "Das Datum VON ist größer als das Datum BIS.";
												}
											}
											else
											{
												echo "Das Datum VON ist kleiner als das heutige Datum. Bitte mindestens vom heutigen Datum das Automobile mieten!";
											}
										}
										elseif(isset($_POST['senden']) && !empty($_POST['senden']))
										{
											$datumVvar = $_POST['datumV'];
											$datumBvar = $_POST['datumB'];
											$odabranoAuto = $_POST['autoL'];
											
											$earlier = new DateTime($datumVvar);
											$later = new DateTime($datumBvar);
											$trenutniDatum = new DateTime();
												
											$diff = $trenutniDatum->diff($earlier)->format("%a");
											
											if($trenutniDatum < $earlier || $diff == 0)
											{
												if($earlier <= $later)
												{
													if($odabranoAuto == "image/bmw_m2.jpg")
													{
														$idAuto = 1;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M2 Competition";
													}
													elseif($odabranoAuto == "image/bmw_m3.jpg")
													{
														$idAuto = 2;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M3 Limousine";
													}
													elseif($odabranoAuto == "image/bmw_m4.jpg")
													{
														$idAuto = 3;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M4 CS";
													}
													elseif($odabranoAuto == "image/bmw_m5.jpg")
													{
														$idAuto = 4;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW M5 Competition";
													}
													elseif($odabranoAuto == "image/bmw_x6_m.jpg")
													{
														$idAuto = 5;
														
														$query_preis = "SELECT PREIS FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
													
														$result_preis = mysqli_query($db, $query_preis);
														$row_preis = mysqli_num_rows($result_preis);
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_preis)){
															$preis = $row['PREIS'];
														}
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
														}
														
														if($gesamt == 0)
														{
															$gesamt = -1;
														}
														$imeAutomobila = "BMW X6 M";
													}
													$diff = $later->diff($earlier)->format("%a");
													if($diff == 0 )
													{
														$diff++;
													}
													if($gesamt != -1)
													{
														$rez = $diff * $preis;
														/*echo "Der $imeAutomobila für $diff Tage (pro Tag $preis &euro;) ist $rez &euro;.";
														echo "</br>Wenn der Preis stimmt! Erneut die Form Ausfüllen.";
													}
													else
													{*/
														$query_user_id = "SELECT ID FROM BENUTZER WHERE BENUTZER = '$user'";
														
														$result_user_id = mysqli_query($db, $query_user_id);
														$row_user_id = mysqli_num_rows($result_user_id);
														
														while($row = mysqli_fetch_assoc($result_user_id)){
															$id_user = $row['ID'];
														}
														
														$insert_sql = "INSERT INTO VERMIETET (ID_BENUTZER, ID_AUTO, VON, BIS, PREIS_VERMIETUNG)
															 VALUES ('$id_user', '$idAuto', '$datumVvar', '$datumBvar', '$rez')";
														if ($db->query($insert_sql) === TRUE) {
															
														}
														
														$query_gesamt = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAuto'";
														
														$result_gesamt = mysqli_query($db, $query_gesamt);
														$row_gesamt = mysqli_num_rows($result_gesamt);
														
														while($row = mysqli_fetch_assoc($result_gesamt)){
															$gesamt = $row['GESAMT'];
															$gesamt--;
														}
														
														$update_sql = "UPDATE AUTOMOBILE SET gesamt ='$gesamt' WHERE id_auto ='$idAuto'";
														if ($db->query($update_sql) === TRUE) {
																	
														}
														echo "Der $imeAutomobila für $diff Tage (pro Tag $preis &euro;) wurde erfolgreich gemietet für $rez &euro;.";
														
													}
													else
													{
														echo "Alle Automobile $imeAutomobila sind vermieten";
													}
													
												}
												else
												{
													echo "Das Datum VON ist größer als das Datum BIS.";
												}
											}
											else
											{
												echo "Das Datum VON ist kleiner als das heutige Datum. Bitte mindestens vom heutigen Datum das Automobile mieten!";
											}
										}
									print '</div>
								</div>
								<div class="sub_res">
									<input type="submit" value="Berechnen" name="rechnen"/> <input type="submit" value="Senden" name="senden"/>
								</div>
							</form>';
							$query_admin = "SELECT ADMIN FROM BENUTZER WHERE BENUTZER = '$user'";
								
							$result_admin = mysqli_query($db, $query_admin);
							$row_admin = mysqli_num_rows($result_admin);
										
							while($row = mysqli_fetch_assoc($result_admin)){
								$admin = $row['ADMIN'];
							}
							if($admin == 'Y')
							{
								print '<div>
										<h3 class="hAnfrage">Administrator<h3>
										<form action="" method="POST" id="form" autocomplete="off">
											<div class="row">
												<div class="col-25">
													<label for="auto">Automobile zurück gebracht:</label>
												</div>
												<div class="col-78">
													<select name="autoB" id="autoB" default="" required>
														<option value="" disabled selected>bitte wählen</option>
														<option value="1">BMW M2 Competition</option>
														<option value="2">BMW M3 Limousine</option>
														<option value="3">BMW M4 CS</option>
														<option value="4">BMW M5 Competition</option>
														<option value="5">BMW X6 M</option>
													</select>
												</div>';
												#$odabranoAuto = $_POST['autoL'];
												if(isset($_POST['bestätigen']) && !empty($_POST['bestätigen']))
												{
													$id_autoB = $_POST['autoB'];
													if($id_autoB == "1")
													{
														$idAutoB = 1;
													}
													elseif($id_autoB == "2")
													{
														$idAutoB = 2;
													}
													elseif($id_autoB == "3")
													{
														$idAutoB = 3;
													}
													elseif($id_autoB == "4")
													{
														$idAutoB = 4;
													}
													elseif($id_autoB == "5")
													{
														$idAutoB = 5;
													}
													$query_gesamtB = "SELECT GESAMT FROM AUTOMOBILE WHERE ID_AUTO = '$idAutoB'";
													$query_autoB = "SELECT AUTONAME FROM AUTOMOBILE WHERE ID_AUTO = '$idAutoB'";
														
													$result_gesamtB = mysqli_query($db, $query_gesamtB);
													$row_gesamtB = mysqli_num_rows($result_gesamtB);
													
													$result_autoB = mysqli_query($db, $query_autoB);
													$row_autoB = mysqli_num_rows($result_autoB);
													
													while($row = mysqli_fetch_assoc($result_gesamtB)){
														$gesamtB = $row['GESAMT'];
														$gesamtB++;
													}
													
													while($row = mysqli_fetch_assoc($result_autoB)){
														$autoB = $row['AUTONAME'];
													}
													
													if($gesamtB <= 3){	
														$update_sql = "UPDATE AUTOMOBILE SET gesamt ='$gesamtB' WHERE id_auto ='$idAutoB'";
														if ($db->query($update_sql) === TRUE) {
															
														}
														echo "Erfolgreich abgeschlossen.";
													}
													else
													{
														echo " Alle $autoB sind im lager. ";
													}
												}
											print '</div>
											<div class="sub_res">
												<input type="submit" value="Bestätigen" name="bestätigen"/>
											</div>
										</form>
									 </div>';
							}
							print '<p>Wir freuen uns Ihnen ein Automobile zu vermieten.</p>
						</div>';
				}
			?>
		</main>	
		<?php
			if($sessionOnOff == 0){
				print
					'<footer class="footer">
						<p>copyright &copy; 2018. Ante Karačić &trade;</p>
					</footer>';
			}
			elseif($sessionOnOff == 1){
				print
					'<footer id="footer">
						<p>copyright &copy; 2018. Ante Karačić &trade;</p>
					</footer>';
			}
		?>
		<script type="text/javascript">
			function swapImage(){
					var image = document.getElementById("imageToSwap");
					var dropd = document.getElementById("autoL");
					image.src = dropd.value;
			};
		</script>
	</body>
</html>


