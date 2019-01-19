<?php
	$query_user = "SELECT * FROM SESSIONONOFF";
	
	$result = mysqli_query($db, $query_user);
				
	$result = mysqli_query($db, $query_user);
		while($row = mysqli_fetch_assoc($result)){
			if ($row['benutzerOnOff']== 'Off'){
				$sessionOnOff = 0;
			}
			else{
				$sessionOnOff = 1;
			}
		}	
?>