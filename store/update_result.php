<html>
<head>
	<title>Updated Record</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-image:url('imgs/s5.jpg');background-repeat: no-repeat; background-size:cover;height: 50%;background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$locid = $_GET["locid"];

	$mid = $_GET["mid"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE store SET name='$name', location_id='$locid', m_id='$mid' WHERE id ='$id'";

	echo "<pre style='font-size:20px; text-align:center; margin-left:50px; margin-top:120px;font-weight:bold;'>$query</pre>";



	mysqli_query( $connect, $query )

		or die("Can not execute query");

		echo "<p style=' margin-left:550px;font-size:30px;color:#1d23cf;font-weight:bold;'class='w3-container w3-center w3-animate-opacity'>Record updated!!<br></p>";

	echo "<p style='margin-left:550px;'><a href=sRead.php><button class='ui inverted purple button' style='font-size:20px;'>READ all records</button></a></p>";


?>

</body>
</html>