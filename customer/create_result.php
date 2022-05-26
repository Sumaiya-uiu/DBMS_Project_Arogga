<html>
	<head>
		<title>Feedback Delete</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
    <body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
    	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>



<?php

	$id = $_GET["CID"];

	$fname = $_GET["FNAME"];
	$lname = $_GET["LNAME"];

	$email = $_GET["EMAIL"];
	$contact = $_GET["CONTACT"];

	$age = $_GET["AGE"];
	$location = $_GET["LOCATION"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO customer VALUES ( '$id', '$fname','$lname', '$email', $contact, $age, '$location' )" )

		or die("Can not execute query");



	echo "<P style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'> Record inserted:<br> Customer id = $id <br> First name = $fname <br> Last name = $lname <br> Email = $email <br>Contact = $contact <br> Age = $age <br> Location = $location";


	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'><a href=read.php>READ ALL RECORDS</a></p>";


?>


</form>


</body>
</html>