<?php
	session_start();
	if(isset($_SESSION['name']))
		echo 'Welcome '.$_SESSION['name'];
	else 
		echo 'die';
	echo "<h4><a href = 'logout.php'>Logout</a></h4>";
?>