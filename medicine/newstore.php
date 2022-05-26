<html>
<head>
	<title>Medicine Table</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	<h1 style='margin-left:250px;'>No of Store available for Medicine</h1>
	

<?php
		require_once('db_connect.php');
			$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");

		// $join = mysqli_query( $connect, "SELECT p.m_id,p.u_price,p.p_price FROM medicine m JOIN price p ON(m.m_id=p.m_id)" )
			$aggre= mysqli_query($connect,"SELECT COUNT(s.id) AS id ,s.m_id ,m.name  FROM medicine m JOIN store s ON(m.m_id=s.m_id) WHERE m.m_id=s.m_id GROUP BY s.m_id")
			
			or die("Can not execute query");


			echo "<table style='margin-left:250px;'class='ui celled unstackable collapsing table'> \n";
	echo "<thead><th>No of Store</th><th>Medicine ID</th> <th>Medicine Name</th></thead><tbody>\n";

	while( $rows = mysqli_fetch_array( $aggre ) ) {

		extract( $rows );
		echo "<tr>";
		echo "<td> $id </td>";
		echo "<td> $m_id </td>";
		echo "<td> $name </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

	

?>
</body>
</html>