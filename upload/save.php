<pre>
<?php

require_once('db_connect.php');

                    $connect = mysqli_connect( HOST, USER, PASS, DB )

                        or die("Can not connect");

 $pro = $_FILES['profile'];
 
 // echo $name = $pro['name'];
 // echo '<br>';
 // echo $type = $pro['type'];
 // echo '<br>';
 // echo $tmp_name = $pro['tmp_name'];
 // echo '<br>';

 // $size = $pro['size'];

 // echo floor($size/1000). "KB" ;
 $name = $pro['name'];
 $type = $pro['type'];
 $tmp_name = $pro['tmp_name'];
 $cid = $_POST["cust_id"];


 if(!empty($name))
 {
 	$loc = 'dataimg/';
 	if(move_uploaded_file($tmp_name,$loc.$name))
 	{
 		echo "File upload successful<br>";
 		$path = $loc.$name;
 		$q = "INSERT INTO upload VALUES (NULL,'$cid','$path')";
 		$query = mysqli_query($connect,$q);
 		echo "<h1>$cid<br><br><br></h1>";
 		echo "<img src='$path' width='300' height:'350'><br>";
 	}
 	else
 	{
 		echo "Failed!!";
 	}
 }
 else
 {
 	echo "File not found";
 }

 echo "<br><a href='create_input.php'>Want to add more data?</a>";

?>



</pre>