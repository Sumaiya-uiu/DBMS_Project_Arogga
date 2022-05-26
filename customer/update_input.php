<head>
	<title>Customer Update</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head> 
 <body style=" background-image: url('Q1.jpg');background-repeat: no-repeat;background-size:cover;" >
 	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
	



<?php

	$id = $_GET["id"];

	$fname = $_GET["fname"];

	$lname = $_GET["lname"];

	$email = $_GET["email"];

	$contact = $_GET["contact"];

	$age = $_GET["age"];

	$location = $_GET["location"];


?>



<h1 style="color:saddlebrown;margin-left: 510px;">Update Record</h1>

<form class ="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=update_result.php>


	<span style="font-weight:700;">ID:</span> <input type=text name="id" value='<?php echo $id; ?>'> <br>



	<span style="font-weight:700;">First Name:</span> <input type=text name="fname" value='<?php echo $fname; ?>'>

	<p>

	<span style="font-weight:700;">Last Name:</span> <input type=text name="lname" value='<?php echo $lname; ?>'>

	<p>
		<p>

	<span style="font-weight:700;">Email:</span> <input type=text name="email" value='<?php echo $email; ?>'>

	<p>
		<p>

	<span style="font-weight:700;">Contact:</span><input type=text name=contact value='<?php echo $contact; ?>'>

	<p>
		<p>

	<span style="font-weight:700;">Age:</span> <input type=text name=age value='<?php echo $age; ?>'>

	<p>
		<p>

	<span style="font-weight:700;">Location:</span> <input type=text name="location" value='<?php echo $location; ?>'>

	<p>

	
	<button style="color:saddlebrown;font-size: 15" class="ui white button">Update</button>
	<!-- <input type=submit value=Update> -->

</form>



</body>
</html>