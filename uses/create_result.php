<html>
<head>
	<title>Uses....</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url(uimg/u2.jpg);background-repeat: no-repeat;background-size: cover;"class="w3-container  w3-animate-left">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$mid = $_GET["MID"];

	$age = $_GET["AGE"];

	$dose = $_GET["DOSE"];

	$uses = $_GET["MUSE"];

	$seffect = $_GET["SEFF"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO uses VALUES ( '$mid', $age, '$dose', '$uses', '$seffect' )" )

		or die("Can not execute query");

		echo "<pre style=' color:#000000; margin-left:500px; font-size:30px;'> <span style='text-shadow: 2px 2px white;font-size:70px;'>Record inserted:</span><br> Medicine ID = $mid <br> Age = $age<br> Dose = $dose <br> Medicine Uses = $uses <br> Side Effects = $seffect</pre>";

		echo "<p style='margin-left:525px;'><a href=uRead.php><button class='ui positive button' style='font-size:20px;'>READ all records</button></a></p>";

?>

</body>
</html>