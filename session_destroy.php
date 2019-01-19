<?php
	include 'db_connect.php';
	session_destroy();
	$update_sql = "UPDATE SESSIONONOFF SET benutzerOnOff ='Off' WHERE benutzerOnOff ='On'";
	if ($db->query($update_sql) === TRUE) {
						
	}
	header('Location: index.php');
?>