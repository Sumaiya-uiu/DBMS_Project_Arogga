<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
    <title></title>
</head>
<body>
    <a href="http://localhost/Final_Presentation/homepage/home.php">..Back</a>
    <div>
        <h1 style="margin-left:30px;align-items: center;">Upload Result</h1><br>
        <table style='margin-left:200px;'class='ui celled unstackable collapsing table'>
            <thead>
                <th>Serial</th>
                <th>Customer ID</th>
                <th>Prescription</th>
            </thead>
            <tbody>
                
                <?php

                    require_once('db_connect.php');

                    $connect = mysqli_connect( HOST, USER, PASS, DB )

                        or die("Can not connect");

                        if(isset($_POST['submit']))
                        {
                            $serial=$_POST["serial"];
                            $cid = $_POST["cust_id"];
                            $file= $_FILES['prescription'];

                           // print_r($cid);
                            echo "<br>";
                            //print_r($file);

                            $filename = $file['name'];
                            // print_r($filename);
                            $fileerror = $file['error'];
                            $filetmp = $file['tmp_name'];
                            $fileext = explode('.',$filename);//name string theke extension pawar jonne
                            $filecheck = strtolower(end($fileext));//string er end part pabe and lower case kore dibe

                            $fileextstored = array('png','jpg','jpeg');


                            if(in_array($filecheck,$fileextstored))
                            {
                                $destinationfile = 'dataimg/'.$filename;
                                move_uploaded_file($filetmp, $destinationfile);

                                $q = "INSERT INTO upload VALUES (NULL,'$cid','$destinationfile')";
                                $query = mysqli_query($connect,$q);
                            


                                $displayquery = "SELECT * FROM upload";
                                $querydisplay = mysqli_query($connect,$displayquery);

                                // $row = mysqli_num_rows($querydisplay);
                                while($result = mysqli_fetch_array($querydisplay))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $result['serial']; ?></td>
                                        <td><?php echo $result['c_id']; ?></td>
                                        <td><img src="<?php echo $result['prescription']; ?>" height="100px" width="100px"></td>
                                    </tr>

                                    <?php
                                }
                            }
                           
                            else{
                                echo "Extension is not matching";
                            }
                        }
                ?>



            </tbody>
        </table>
    </div>
</body>
</html>