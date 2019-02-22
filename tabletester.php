<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "CREATE TABLE student (
id int not null auto_increment primary key,
fname varchar(50) not null,
lname varchar(50) not null,
email varchar(50) not null,
contact bigint not null,
schno bigint not null,
pswd varchar(255) not null
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
	
} else {
    echo "Error creating table: " . $conn->error;
}

?>