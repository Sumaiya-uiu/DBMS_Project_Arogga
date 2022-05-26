<html>
<head>
	<title>Company Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
	<body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
		<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	

?>



<h1 style="color:Blue;margin-left: 515px;">Update Record</h1>



<form class ="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=update_result.php>



    <span style="font-weight:700;">ID:</span> <input type=text name="id" value='<?php echo $id; ?>'> <br>



	 <span style="font-weight:700;">Name:</span> <input type=text name="name" value='<?php echo $name; ?>'> <br>

	<br>
	<button style="color:white;font-size: 15" class="ui blue button">Update</button>
	<!-- <input type=submit value=Update> -->

</form>

</body>
</html>

