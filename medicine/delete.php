<html>
<head>
	<title>Delete Medicine</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('img/m3.jpg'); background-repeat: no-repeat; height: 100%; background-size: cover; background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$serial = $_GET["serial"];
	



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM medicine WHERE serial='$serial' " )

		or die("Can not execute query");
		
	echo "<p style='margin-top:230px; margin-left:-150px;font-size:30px;color:#db2929;'class='w3-container w3-center w3-animate-opacity'>Record deleted!!<br></p>";

	echo "<p style='margin-left:500px;'><a href=mRead.php><button class='ui brown button' style='font-size:20px;'>READ all records</button></a></p>";

?>

</body>
</html>