
<html>
<head>
	<title>Sub Query</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="margin: auto; margin-right: 330px; background-image: url('data.jpg');background-repeat: no-repeat;background-size:cover;margin-top: 15px; width: 50%;padding: 10px;" >
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

	<h1 style='margin-left:150px;font-size:35;color: whitesmoke;font-style: italic;'>CUSTOMER NAME TABLE</h1>
	
	

<?php
		require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

			$sub = mysqli_query( $connect, "SELECT first_name, last_name from customer WHERE location IN (SELECT name from location where postal_code like '%4%')")
			or die("Can not execute query");

			echo "<table style='margin-left:250px;'class='ui striped unstackable collapsing table'> \n";
	echo "<thead><th>First Name</th><th>Last Name</th></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $sub ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $first_name </td>";
		echo "<td> $last_name </td>";
		//echo "<td> $p_price </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>
</body>
</html>