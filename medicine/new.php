<html>
<head>
	<title>Medicine Table</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 style='margin-left:250px;'>Price Table</h1>
	

<?php
		require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

			$join = mysqli_query( $connect, "SELECT p.m_id,p.u_price,p.p_price FROM medicine m JOIN price p ON(m.m_id=p.m_id) GROUP BY p.m_id" )
			or die("Can not execute query");

			echo "<table style='margin-left:250px;'class='ui celled unstackable collapsing table'> \n";
	echo "<thead><th>Medicine ID</th><th>Unit Price</th> <th>Total price</th></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $join ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $m_id </td>";
		echo "<td> $u_price </td>";
		echo "<td> $p_price </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";


?>
</body>
</html>