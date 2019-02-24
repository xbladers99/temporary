<?php
		$username = $pswd = "";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$username = test_input($_POST["username"]);
			$pswd = test_input($_POST["password"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		/*$timeTarget = 0.05; // 50 milliseconds 

		$cost = 8;
		do {
		    $cost++;
		    $start = microtime(true);
		    password_hash($pswd, PASSWORD_BCRYPT, ["cost" => $cost]);
		    $end = microtime(true);
		} while (($end - $start) < $timeTarget);

		echo "Appropriate Cost Found: " . $cost;
		*/

		$options = ['cost' => 9,];

		$hash_pswd = password_hash($pswd, PASSWORD_DEFAULT,$options);

		echo "<h2>Your Username is ". $username . "</h2>";
		echo "<h2>Your password is ". $pswd . "</h2>";
		echo "<h2>Your hashed password is ". $hash_pswd . "</h2>";

	?>