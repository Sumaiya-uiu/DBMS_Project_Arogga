<html>
<head>
	<title>Medicine</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url(img/m22.jpg);background-repeat: no-repeat;background-size:cover ;background-position: center;height:100%;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 class="w3-container  w3-animate-left" style="color:white; margin-left:220px; font-size:40px; margin-top: 50px; font-style:italic; text-shadow: 2px 2px; ">Showing given input</h1>
	

<?php

	$serial = $_GET["SERIAL"];
	$mid = $_GET["MID"];

	$mname = $_GET["MNAME"];

	$comid = $_GET["COM"];

	$age = $_GET["AGE"];

	$did = $_GET["DID"];

	$dosage = $_GET["DOSE"];

	$ppata = $_GET["PATA"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO medicine VALUES (NULL,'$mid', '$mname','$comid', $age, '$did', '$dosage', $ppata )" )

		or die("Can not execute query");

	echo "<pre style=' color:white; margin-left:220px; font-size:20px;'> <span style='text-shadow: 2px 2px white;font-size:30px;'>Record inserted:</span><br> <br> Serial No = $serial<br> Medicine Id = $mid <br> Medicine Name = $mname<br> Company ID = $comid <br> Age = $age<br> Disease ID = $did <br> Dosage = $dosage<br> Medicine per file = $ppata</pre>";


	echo "<p style='margin-left:220px;'><a href=mRead.php><button class='ui teal button' style='font-size:20px;'>READ all records</button></a></p>";

?>

</body>
</html>