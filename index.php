<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">

<style>

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>

  <div class="login-container">
    <form action="logintest.php" method = "post">
      <input type="text" placeholder="email-id" name="email" id = "email">
      <input type = "password" placeholder="Password" name="pswd" id = "pswd">
      <input type="submit" value = "Login" name = "login">
    </form>
  </div>
</div>

	<div class="main">

		<div class="column"  style=" width:60%;">hi
		
		</div>

		<div class="column"  style=" width:40%;">
			<div class="container">
			  <h2 align="center">Sign up Form</h2>
			  	<form form name="contactform" action="signupdetails.php" method = "post">
					<span>
					    <input type="text" id="fname" name="fname" placeholder="Firstname" required style="width: 50% ">
					    <input type="text" id="lname" name="lname" placeholder="Lastname" required style="width: 49%">
					</span>

				    <input type="text" id="email" name="email" placeholder="Email ID" required>
				    <input type="text" id="contact" name="contact" placeholder="Mobile Number" required><br> 
				    <input type="text" id="schno" name="schno" placeholder="Scholar Number">
				  

				  	<input type="password" placeholder="Enter Password" name="pswd" required>


				  	<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

				    <center><input type="submit" value="Submit"></center>
			  	</form>
			</div>
		</div >
	</div>
	
