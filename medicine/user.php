<html>
<head>
	<title>Dosage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 style="margin-left: 250px; margin-top: 30px;">Dosage Wise Medcine name Table</h1>

<?php
require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");
		$subquery = mysqli_query( $connect, "SELECT name,dosage FROM medicine WHERE dosage IN (SELECT  dose FROM uses Group by dose) ORDER BY dosage DESC" )
		or die("Can not execute query");

	echo "<table style='margin-left:250px;'class='ui celled unstackable collapsing table'> \n";
	echo "<thead><th>Medicine name</th><th>Dosage</th></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $subquery ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $name</td>";
		echo "<td> $dosage </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";
?>
</body>
</html>