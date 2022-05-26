<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('img/p6.jpg');">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<h1 style="margin-left: 490px; margin-top: 230px; font-weight: 700;" class="w3-container  w3-animate-top">Update Record</h1>

<?php

	$id = $_GET["id"];

	$uprice = $_GET["uprice"];

	$pprice = $_GET["pprice"];

?>

<form method=get action=update_result.php class="ui form" style="max-width: 300px; margin-left: 550px; ">



	<input type=hidden name="id" value='<?php echo $id; ?>'> <br>


	<p>
	Unit Price : <input type=text name="uprice" value='<?php echo $uprice; ?>'>

	</p>
	<p>

	Per pata Price: <input type=text name="pprice" value='<?php echo $pprice; ?>'>

	</p>

	<input type=submit value=Update>

</form>

</body>
</html>