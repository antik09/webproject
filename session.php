<?php
	if (session_status() != PHP_SESSION_ACTIVE) {
		session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				$user = $_SESSION['loggedin'];
			}
	}
	else{
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
			$user = $_SESSION['loggedin'];
		}
	}
?>