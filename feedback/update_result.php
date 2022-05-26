<html>
	<head>
		<title>Feedback Delete</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
    <body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
    	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>



<?php

	$serial = $_GET["serial"];

	$cid = $_GET["id"];

	$review = $_GET["review"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE feedback SET serial=$serial, review='$review' WHERE c_id = '$cid'";

	echo "<P style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'> $query</p>";




	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p style='color:orange;margin-left:30px;margin-top:250px;text-align:center;font-size:25px;font-weight:780;font-family: arial'>RECORD UPDATED</p>";

	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'><a href=read.php>READ ALL RECORDS</a></p>";
?>


</form>

</body>
</html>