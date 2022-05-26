<html>
<head>
	<title>Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url(imgs/s1.jpg);background-repeat: no-repeat;background-size: cover;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 class="w3-container  w3-animate-left" style="color:#b92719; margin-left:35px; font-size:70px; margin-top: 20px; font-style:italic; text-shadow: 2px 2px; ">Showing given input</h1>

<?php

	$sid = $_GET["SID"];

	$sname = $_GET["SNAME"];

	$lid = $_GET["LID"];

	$mid = $_GET["MID"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO store VALUES ( '$sid', '$sname', '$lid', '$mid' )" )

		or die("Can not execute query");

		echo "<pre style=' color:#ffeb3b; margin-left:35px; font-size:30px;'> <span style='text-shadow: 2px 2px white;font-size:70px;'>Record inserted:</span><br> Store ID = $sid <br> Store Name = $sname <br> Location ID = $lid <br> Medicine ID = $mid</pre>";

	echo "<p style='margin-left:55px;'><a href=sRead.php><button class='ui teal button' style='font-size:20px;'>READ all records</button></a></p>";

?>

</body>
</html>