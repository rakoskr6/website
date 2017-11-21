<?php
$servername = "localhost";
$username = "testuser";
$password = "password123";
$dbname = "ieee-money";

// define variables and set to empty values
$first = $last = $email = $address = $city = $state = $zip = $cert = $usr = $password1 = $password2 = "";

$first = test_input($_POST["first"]);
$last = test_input($_POST["last"]);
$email = test_input($_POST["email"]);
$address = test_input($_POST["address"]);
$city = test_input($_POST["city"]);
$state = test_input($_POST["state"]);
$zip = test_input($_POST["zip"]);
$cert = test_input($_POST["cert"]);
$usr = test_input($_POST["username"]);
$password1 = ($_POST["password1"]);
$password2 = ($_POST["password2"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($password1 != $password2)
{

	
	echo "Passwords must match";
}

else
{
	$password1 = password_hash($password1,PASSWORD_DEFAULT);
	$password2 = password_hash($password1,PASSWORD_DEFAULT);
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO Users (first,last,email,address,city,state,zip,cert,username,password)
		VALUES ('$first', '$last', '$email', '$address', '$city', '$state', '$zip', '$cert', '$usr', '$password1')";

		
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "New record created successfully";
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}

	$conn = null; 
}

?>
