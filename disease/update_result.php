<html>
	<head>
		<title>Feedback Delete</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
    <body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
    	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>


<?php
	
	$id = $_GET["id"];

	$name = $_GET["name"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE disease SET name='$name' WHERE d_id = '$id'";

	echo "<P style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'> $query</p>";




	mysqli_query( $connect, $query )

		or die("Can not execute query");




echo "<p style='color:red;margin-left:30px;margin-top:250px;text-align:center;font-size:25px;font-weight:780;font-family: arial'>RECORD UPDATED</p>";

	echo "<p style='margin-left:30px;margin-top:10px;font-size:25px;text-align:center;font-weight:1000;'><a href=read.php>READ ALL RECORDS</a></p>";

?>


</form>

</body>
</html>