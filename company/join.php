<html>
<head>
	<title>Join Query</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="margin: auto; margin-right: 470px;font-style;background-image: url('data.jpg');background-repeat: no-repeat;background-size:cover; margin-top: 15px; width: 50%;padding: 10px;" >
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

	<h1 style='margin-left:270px;font-size:35;color: whitesmoke;font-style: italic;'>CUSTOMER REVIEW TABLE</h1>
	

<?php
		require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

			$join = mysqli_query( $connect, "SELECT c.c_id, c.first_name, c.last_name, f.review  FROM feedback f JOIN customer c ON (f.c_id=c.c_id)")
			or die("Can not execute query");

			echo "<table style='margin-left:250px;'class='ui striped unstackable collapsing table'> \n";

	echo "<thead><th>Customer ID</th><th>First Name</th> <th>Last Name</th> <th>Review</th></thead><tbody>\n";


	while( $rows = mysqli_fetch_array( $join ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $c_id </td>";
		echo "<td> $first_name </td>";
		echo "<td> $last_name </td>";
		echo "<td> $review </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>
</body>
</html>