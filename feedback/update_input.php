<html>
<head>
	<title>Feedback Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
	<body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
		<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	


<?php

	$serial = $_GET["serial"];

	$id = $_GET["CID"];

	$review = $_GET["review"];

?>
<h1 style="color:orange;margin-left: 515px;">Update Record</h1>
<form class ="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=update_result.php>




	<span style="font-weight:700;">Serial:</span> <input type=text name=serial value='<?php echo $serial; ?>'> 

	<p>


	<span style="font-weight:700;">Customer ID:</span> <input type=text name="id" value='<?php echo $id; ?>'>

	<p>

	<span style="font-weight:700;">Review:</span> <input type=text name="review" value='<?php echo $review; ?>'>

	<p>

	<button style="color:orange;font-size: 15" class="ui white button">Update</button>
	<!-- <input type=submit value=Update> -->


</form>

</body>
</html>
