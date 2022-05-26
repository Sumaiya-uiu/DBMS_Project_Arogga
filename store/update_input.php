<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('imgs/s6.jpg');">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<h1 style="margin-left: 490px; margin-top: 230px; font-weight: 700;" class="w3-container  w3-animate-right">Update Record</h1>

<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$locid = $_GET["locid"];

	$mid = $_GET["mid"]

?>



<form method=get action=update_result.php class="ui form" style="max-width: 300px; margin-left: 550px; ">



	<input type=hidden name="id" value='<?php echo $id; ?>'> <br>



	Store Name: <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	Location ID: <input type=text name="locid" value='<?php echo $locid; ?>'>

	<p>

	<p>

	Medicine ID: <input type=text name="mid" value='<?php echo $mid; ?>'>

	<p>

	<input type=submit value=Update>

</form>
</body>
</html>