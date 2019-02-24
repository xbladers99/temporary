 <!--
 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,'');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE mentor";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?> 


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentor";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE profile (
name varchar(50) not null,
contact bigint not null,
gender char(1) not null,
city varchar(40) not null,
branch varchar(30) not null
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
 
-->


 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mentor";


$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $contact = $gender = $city = $branch = $interests = "";
// $x=$_POST["firstname"];
// $y=$_POST["lastname"];
// $z=$_POST["email"];
if(isset($_POST['name']) && isset($_POST['contact']) && isset($_POST['gender']) && isset($_POST['city']) && isset($_POST['branch']) && isset($_POST['ipinterests']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	$branch=$_POST['branch'];
	$interests = $_POST['ipinterests'];
	echo $name." ".$contact." ".$gender." ".$city." ".$branch." ".$interests;
	/*$sql2 = "INSERT INTO profile (name,contact,gender,city,branch)
	VALUES ('$name','$contact','$gender','$city','$branch')";

	if ($conn2->query($sql2) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn2->error;
	}*/
}
else 
	echo "not set";


?> 