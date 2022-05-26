<html>
<head>
	<title>Location Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
	<body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
		<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	


<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$postal = $_GET["postal"];

?>



<h1 style="color:green;front-size: 233;margin-left: 515px;">Update Record</h1>

<form class ="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=update_result.php>




<form method=get action=update_result.php>



	 <span style="font-weight:700;">ID:</span> <input type=text name=id value='<?php echo $id; ?>'> 

<p>

	 <span style="font-weight:700;">Name:</span> <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	 <span style="font-weight:700;">Postal Code</span> <input type=text name="postal" value='<?php echo $postal; ?>'>

	<p>

	<button style="color:green;font-size: 15;" class="ui white button">Update</button>
	<!-- <input type=submit value=Update> -->

</form>



</body>
</html>
