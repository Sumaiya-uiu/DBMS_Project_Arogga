<html>
<head>
	<title>Delete Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('imgs/s4.jpg'); background-repeat: no-repeat; height: 100%; background-size: cover; background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$sid = $_GET["sid"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM store WHERE id='$sid'" )

		or die("Can not execute query");


	echo "<p style='margin-top:180px; margin-left:70px;font-size:30px;color:#2999db;'class='w3-container w3-center w3-animate-opacity'>Succefully deleted desired record!!<br></p>";

	echo "<p style='margin-left:600px;'><a href=sRead.php><button class='ui inverted purple button' style='font-size:20px;'>READ all records</button></a></p>";

?>
</body>
</html>