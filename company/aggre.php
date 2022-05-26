<html>
<head>
	<title>Aggregate Query</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="margin: auto; margin-right: 330px;background-image: url('data.jpg');background-repeat: no-repeat;background-size:cover; margin-top: 15px; width: 50%;padding: 10px;" >
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

	<h1 style='margin-left: 189px;color: whitesmoke;font-size: 35;font-style: italic;'>REVIEW TABLE</h1>
	

<?php
		require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

			$aggre = mysqli_query( $connect, "SELECT COUNT(review) rev from feedback" )
			or die("Can not execute query");

			echo "<table style='margin-left:250px;'class='ui striped unstackable collapsing table'> \n";
	echo "<thead><th>Total Review</th></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $aggre ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $rev</td>";
		//echo "<td> $serial</td>";
		//echo "<td> $c_id </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>
</body>
</html>