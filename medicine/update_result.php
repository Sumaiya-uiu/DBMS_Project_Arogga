<html>
<head>
	<title>Updated Record</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-image:url('img/m6.jpg');background-repeat: no-repeat; background-size:cover;height: 50%;background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>


<?php

	$serial = $_GET["serial"];

	$mid = $_GET["mid"];
	
	$age = $_GET["age"];

	$dosage = $_GET["dosage"];

	$ppata = $_GET["pata"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE medicine SET m_age='$age',dosage='$dosage',per_pata='$ppata'  WHERE serial = '$serial'";

	echo "<pre style='font-size:20px; text-align:center; margin-left:140px; margin-top:100px;font-weight:bold;'>$query</pre>";



	mysqli_query( $connect, $query )

		or die("Can not execute query");


	echo "<p style=' margin-left:550px;font-size:30px;color:#1d23cf;font-weight:bold;'class='w3-container w3-center w3-animate-opacity'>Record updated!!<br></p>";

	echo "<p style='margin-left:515px;'><a href=mRead.php><button class='ui purple button' style='font-size:20px;'>Want to READ all records??</button></a></p>";

?>

</body>
</html>