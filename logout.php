<?php 
	session_start();
	session_destroy();
	if (isset($_COOKIE['email']) and isset($_COOKIE['pswd'])) {
		setcookie('email',"",time()-1);
		setcookie('pswd',"",time()-1);
	}
	
	echo "You have been logged out";
	header('location: index.php');
 ?>