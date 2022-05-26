<html>
<head>
	<title>Upload...</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body style="background-image:url('imgp/p6.jpg'); background-repeat: no-repeat; background-size:cover;background-position: center; height: 50%;">
	<a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>


<h1 style="margin-left: 450px; margin-top: 50px; font-weight: 500;">Create Record for Upload</h1>

	<form action="index.php" method="post" enctype="multipart/form-data">
		<label for="ser">Serial:</label>
		<input type="text" name="serial" id="ser"><br><br>
		<label for="id">Customer ID:</label>
		<input type="text" name="cust_id" id="id"><br><br>
		<label for="pres">Prescription:</label>
		<input type="file" name="prescription" id="pres"><br><br>
		<input type="submit" name="submit" value="submit">

		
	</form>

</body>
</html>