<html>
<head>
	<title>Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background-image:url('imgs/s2.jpg'); background-repeat: no-repeat; background-size:cover;height: 650px;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>

	<h1 style="margin-left: 500px;  font-weight: 700; margin-top: 100px;" class="w3-container  w3-animate-right">Create Record for Store</h1>




<form method=get action=create_result.php class="ui form" style="max-width: 300px; margin-left: 550px; ">

	<p style="font-size: 20px;">
	Store ID: <input type=text name="SID"> <br>
	</p>
	<p style="font-size: 20px;">

	Store Name: <input type=text name="SNAME"> <br>

	</p>
	<p style="font-size: 20px;">

	Location ID: <input type=text name="LID"> <br>

	</p>
	<p style="font-size: 20px;">

	Medicine ID: <input type=text name="MID"> <br>

	</p>


	<button style="font-family: arial; font-size: 20px;"type="submit" class="positive ui button">ADD Store</button>

</form>
</body>
</html>