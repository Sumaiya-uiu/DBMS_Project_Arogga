<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('uimg/u4.jpg');">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<h1 style="margin-left: 480px; margin-top: 50px; font-weight: 700;" class="w3-container  w3-animate-left">Update Record</h1>

<?php

	$id = $_GET["id"];

	$age = $_GET["age"];

	$dose = $_GET["dose"];

	$muse = $_GET["muse"];

	$seff = $_GET["seff"];



?>
<form method=get action=update_result.php class="ui form" style="max-width: 300px; margin-left: 500px; ">



	ID :<input type=text name=id value='<?php echo $id; ?>'> <br>



	Age: <input type=text name="age" value='<?php echo $age; ?>'>

	<p>

	Dose: <input type=text name="dose" value='<?php echo $dose; ?>'>

	<p>

	<p>

	Medicine Uses: <input type=text name="muse" value='<?php echo $muse; ?>'>

	<p>

	<p>

	Side effects: <input type=text name="seff" value='<?php echo $seff; ?>'>

	<p>

	<button style="font-family: arial; font-size: 20px;" type="submit" class="positive ui button">UPDATE</button>

</form>

</body>
</html>