<html>
<head>
	<title>Price</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url(img/p1.jpg);background-repeat: no-repeat;background-size: cover;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 class="w3-container  w3-animate-left" style="color:white; margin-left:490px; font-size:70px; margin-top: 110px; font-style:italic; text-shadow: 2px 2px; ">Showing given input</h1>

<?php

	$mid = $_GET["MID"];

	$uprice = $_GET["UPRICE"];

	$pprice = $_GET["PPRICE"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO price VALUES ( '$mid', $uprice, $pprice )" )

		or die("Can not execute query");



	echo "<pre style=' color:white; margin-left:500px; font-size:30px;'> <span style='text-shadow: 2px 2px white;font-size:70px;'>Record inserted:</span><br> Medicine ID = $mid <br> Unit Price = $uprice <br> Per file Price = $pprice</pre>";


	echo "<p style='margin-left:525px;'><a href=pRead.php><button class='ui teal button' style='font-size:20px;'>READ all records</button></a></p>";


?>

</body>
</html>
