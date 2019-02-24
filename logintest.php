<?php

	function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

	if(isset($_POST['login']))
	{
		$email = $pswd = $pswd_hash = "";

		if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				$email = test_input($_POST["email"]);
				$pswd = test_input($_POST["pswd"]);
			}


		if(!empty($email) && !empty($pswd))
		{
			$options = ['cost' => 9,];

			$pswd_hash = password_hash($pswd, PASSWORD_DEFAULT,$options);
			//echo "Your email is ".$email." ";
			//echo "your hashed password is ".$pswd_hash."";
		}
		else
		{
			echo "All fields are required";
		}

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mydb";


		$conn2 = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn2->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$query_email = "SELECT * FROM student WHERE email = '$email'";
		$result = mysqli_query($conn2,$query_email);
		$no_rows = mysqli_num_rows($result);
		$correct_pswd = "";
		$name = "";
		if($no_rows == 1)
		{
			if($row = mysqli_fetch_row($result))
			{
				//print_r($row);
				$correct_pswd = $row[6];
				$name = $row[1];
			}

			if(password_verify($pswd,$correct_pswd))
			{
				//echo "password is valid";
				//echo $name;
				setcookie('email',$email,time() + 60*60*12);
				setcookie('pswd',$correct_pswd,time() + 60*60*12);
				setcookie('name',$name,time() + 60*60*12);
				session_start();
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $name;
				header('location: welcome.php');
			}
			else 
			{
				echo "password is invalid";
				echo "<h5>Click here to <a href = 'logintest.php'>Try again</a></h5>";
			}
			
		}
		else
		{
			echo "Wrong email";
		}	
	}
	else
	{
		header("location: index1.html");
	}
	
	
?>