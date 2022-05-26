<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	  <title>Arogga For Search Medicine</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" type="image/x-icon" href="https://cdn2.arogga.com/assets/img/favicon.ico">

	  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link
	  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	  rel="stylesheet"
	  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	  crossorigin="anonymous">
      <script
	  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	  crossorigin="anonymous"></script>
  </head>

<body>
<!-- navbar start -->
<div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
	<a href="about.php"><img loading="lazy" class="img-fluid main__logo" src="https://cdn2.arogga.com/assets/img/logo-green-with-tagline.png" alt="arogga"></a>

	 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	 </button>
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		  <li class="nav-item">
			 <a class="nav-link active" aria-current="page" href="http://localhost/Final_Presentation/homepage/about.php">Home</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/medicine/mRead.php">Medicine</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/price/pRead.php">Price</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/store/sRead.php">Stores</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/upload/create_input.php">Upload</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/uses/uRead.php">Uses</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/company/read.php">Company</a>
		  </li><li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/customer/read.php">Customer</a>
		  </li><li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/disease/read.php">Disease</a>
		  </li><li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/location/read.php">Location</a>
		  </li><li class="nav-item">
			 <a class="nav-link" href="http://localhost/Final_Presentation/feedback/read.php">Feedback</a>
		  </li>
          <li class="nav-item">
             <a class="nav-link" href="registration/login.php">Login</a>
          </li>
		  
		</ul>
		<form class="d-flex" method="post" action="search/search.php">
			<input type="text" name="search_name" placeholder="Search by medicine name">
			<input type="submit" name="search" value="Search" class="btn btn-info">
		  <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-success" type="submit"><a href="search/search.php">Search</a></button> -->
		</form>

	 </div>
  </div>
</nav>
</div>
<!-- navbar end -->


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
	 <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
	 <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
	 <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
	 <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
	 <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
     <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
	 <div class="carousel-item active">
		<img src="img/h1.jfif" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
	 </div>
	 <div class="carousel-item">
		<img src="img/h2.jpg" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
	 </div>
	 <div class="carousel-item">
		<img src="img/h3.PNG" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
	 </div>
	 <div class="carousel-item">
		<img src="img/h4.png" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
	 </div>
     <div class="carousel-item">
        <img src="img/h5.PNG" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
     </div>
	 <div class="carousel-item">
		<img src="img/h6.jfif" alt="Cannot Load Image!" class="d-block" style="width:100%;height:70vh;">
	 </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
	 <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
	 <span class="carousel-control-next-icon"></span>
  </button>
</div>
<!-- card -->
<div class="col-md-2 col-sm-2 col-2 my-2" style="padding-left:10px !important;">
						  <a href="http://localhost/Final_Presentation/upload/imgup.php" style="text-decoration:none; color: #212529;">
								<div class="card ribbon__container">
									 <div class="card-body">
										  <img loading="lazy" src="https://cdn2.arogga.com/assets/img/order_medicine.png" alt="arogga" class="card-img-top">
										  <h4>Upload Prescription</h4>
									 </div>
								</div>
						  </a>
					 </div>

</body>
		  <section>
		  <div class="f-container" style="display: flex;justify-content: space-between;align-items: center;" >
				<div class="f-logo">
					<p>
					  Contact No: 021457894<br>
					  Email : arogga@ar.com.bd
					</p>
				</div>
				<div>
			     <i class="facebook messenger icon" style="font-size:40px;color: blue;"></i>
                 <i class="whatsapp square icon" style="font-size:40px;color:#20c997;"></i><br>
                  <i class="facebook square icon" style="font-size:40px;color:blue;"></i>
                  <i class="youtube icon" style="font-size:40px;color:red;"></i>

				</div>
		  </div>
		  <p style="font-size:20px;font-weight: bold;">Copyright © Arogga App Group </p>
		</section>

  

</html>
