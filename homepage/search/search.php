<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title></title>
            </head>

        <body style="font-size: 30px;">
            <a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
        
      
        <?php
		$search_value=$_POST["search_name"];
		require_once('db_connect.php');

               $connect = mysqli_connect( HOST, USER, PASS, DB )

                   or die("Can not connect");
		if($connect->connect_error){
    	echo 'Connection Faild: '.$connect->connect_error;
    	}
    	else{
        $sql="select * from medicine where name like '%$search_value%' or m_id like '%$search_value%' ";

        $res=$connect->query($sql);
        echo '<h1>These are available</h1>';

         while($row=$res->fetch_assoc()){
            echo '<br>';
            echo 'Medicine name: '.$row["name"];
            echo '<br>';
            echo 'Medicine ID:  '.$row["m_id"];
            echo '<br>';
            echo '<br>';
            }    

        }
		?>

    </body>
</html>
