<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('img/m5.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

<h1 style="margin-left: 490px; margin-top: 100px; font-weight: 700;" class="w3-container  w3-animate-bottom">Update Medicine Record</h1>


<?php
	$serial=$_GET["serial"];
	$mid = $_GET["mid"];
    $age = $_GET["age"];
    $dosage = $_GET["dosage"];
    $ppata = $_GET["ppata"];

?>



<form method=get action=update_result.php class="ui form" style="max-width: 300px; margin-left: 550px; ">



	<p>
		<input type=hidden name="serial" value='<?php echo $serial; ?>'> <br>
	</p>

	<input type=hidden name="mid" value='<?php echo $mid; ?>'> <br>
    <p>

	Age: <input type=text name="age" value='<?php echo $age; ?>'>

	</p>
	
	<p>

	Dosage: <input type=text name="dosage" value='<?php echo $dosage; ?>'>

	</p>
	<p>

	Per Pata: <input type=text name="pata" value='<?php echo $ppata; ?>'>

	</p>

	<button type="submit" class="positive ui button">Update</button>

</form>