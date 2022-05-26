<html>
<head>
	<title>Updated Record</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-image:url('uimg/u5.jpg');background-repeat: no-repeat; background-size:cover;height: 50%;background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$id = $_GET["id"];

	$age = $_GET["age"];

	$dose = $_GET["dose"];

	$muse = $_GET["muse"];

	$seff = $_GET["seff"];


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE uses SET age=$age, dose='$dose', m_uses = '$muse',  side_effect = '$seff' WHERE m_id = '$id'";

	echo "<p style='font-size:20px; text-align:center; margin-top:150px;font-weight:bold;'>$query</p>";



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	
		echo "<p style=' margin-left:550px;font-size:30px;color:#1d23cf;font-weight:bold;'class='w3-container w3-center w3-animate-opacity'>Record updated!!<br></p>";

	echo "<p style='margin-left:550px;'><a href=uRead.php><button class='ui olive button' style='font-size:20px;'>READ all records</button></a></p>";

?>

</body>
</html>