<html>
	<form name="test2" id ="test" method ="POST">
<input type ="text" id="test" name="test" value ="tester git hub">
<input type ="text" id="test1" name="test1" value ="tester git hub and my file ">
<input type="submit" name="submit" id="submit">
</form>
</html>

<?php

$test =  $_POST;
$test1 = $_POST;

print_r( $test1);

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyGuests (name) VALUES ($test1)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>
