<?php
session_start();
$servername = "localhost";
$username = "testuser";
$password = "password123";
$dbname = "ieee-money";

// define variables and set to empty values
$psw = $usr = "";

$psw = ($_POST["psw"]);
$usr = test_input($_POST["usr"]);


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT password FROM Users WHERE Users.username = '$usr'");
	$stmt->execute();
	
	$results = $stmt->fetchAll();
	foreach ($results as $pswd) {
		$dbpsw = $pswd['password'];
	}
	
	

	//echo $dbpsw."<br>";
	//echo $usr, " entered ", $psw."<br>";
	

	if (password_verify($psw,$dbpsw))
	{
		
		$_SESSION['user'] = $usr; 
		//echo $_SESSION['user'];
		header("Location: http://kylerakos.me/ieee/boilerbooks/loggedin.php");
	}
	else
	{
		header("Location: http://kylerakos.me/ieee/boilerbooks/");
	}
	
	}
catch(PDOException $e)
	{
	echo $sql . "<br>" . $e->getMessage();
	}

$conn = null; 


?>
