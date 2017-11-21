<?php

$orig = '<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Geogram</title>
</head>
<body>
	<form action=""></form><form>
		<input type="text" name = "location"/>
		<button>Submit</button>

</body>
</html>';


if(!empty($_GET['location'])) {
	$maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $_GET['location'];	
	$maps_json = file_get_contents($maps_url);
	$maps_array = json_decode($maps_json, true);
	$json_string = json_decode($maps_json, JSON_PRETTY_PRINT);
	echo $maps_json;
}
else {
	echo $orig;
}




?>









