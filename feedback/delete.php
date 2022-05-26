<html>
	<head>
		<title>Feedback Delete</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
    <body style=" background-image: url('W1.jpg');background-repeat: no-repeat;background-size:cover;" >
    	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>




<?php

	$serial = $_GET["serial"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM feedback WHERE serial=$serial" )

		or die("Can not execute query");

  echo "<p style='color:orange;margin-left:30px;margin-top:250px;text-align:center;font-size:25px;font-weight:780;font-family: arial'>RECORD DELETED</p>";

	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'><a href=read.php>READ ALL RECORDS</a></p>";

?>

</form>

</body>
</html>