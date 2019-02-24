<?php
	$fname = $lname = $pswd = $email = $contact = $schno = "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			$fname = test_input($_POST["fname"]);
			$lname = test_input($_POST["lname"]);
			$email = test_input($_POST["email"]);
			$contact = test_input($_POST["contact"]);
			$schno = test_input($_POST["schno"]);
			$pswd = test_input($_POST["pswd"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($contact) && !empty($pswd) && !empty($schno))
		{
			$options = ['cost' => 9,];

			$activation_code = md5($email.time());
			$hash_pswd = password_hash($pswd, PASSWORD_DEFAULT,$options);
			echo "<h2>Your Firstname is ". $fname . "</h2>";
			echo "<h2>Your Lastname is ". $lname . "</h2>";
			echo "<h2>Your email is ". $email . "</h2>";
			echo "<h2>Your contact is ". $contact . "</h2>";
			//echo "<h2>Your password is ". $pswd . "</h2>";
			echo "<h2>Your hashed password is ". $hash_pswd . "</h2>";
			//echo "<h2>Your activation code is ". $activation_code . "</h2>";
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

		$checkemail = "SELECT * FROM student where email = '$email'";
		$checkno = "SELECT * FROM student where contact = '$contact'";
		$checkschno = "SELECT * FROM student where schno = '$schno'";
		
		$result1 = mysqli_query($conn2,$checkemail);
		$result2 = mysqli_query($conn2,$checkno);
		$result3 = mysqli_query($conn2,$checkschno);

		if(mysqli_num_rows($result1))
			echo "email is already registered";
		else if(mysqli_num_rows($result2))
			echo "mobile is already registered";
		else if(mysqli_num_rows($result3))
			echo "schno is already registered";
		else 
		{
			$sql2 = "INSERT INTO student (fname,lname,email,contact,schno,pswd)
			VALUES ('$fname','$lname','$email','$contact','$schno','$hash_pswd')";

			if ($conn2->query($sql2) === TRUE) {
		    	echo "New record created successfully";
			} else {
		    echo "Error: " . $sql . "<br>" . $conn2->error;
			}
		}
?>