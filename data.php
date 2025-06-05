<?php
include "connect.php";
// if(isset($_POST['submit'])){



$name =$_POST['name'];
$email=$_POST['email'];
$image =$_FILES['image']['name'];

    move_uploaded_file($_FILES['image']['tmp_name'],"C:/pio/htdocs/video/media/".$image);

    $query ="INSERT INTO LAPS(name,email,image)
    VALUES('$name','$email','$image')"; 
   $run= mysqli_query($con,$query);
    if($run){
        header('location:display.php');

    }else{
        echo 'data not inserted';
    }
            
// }


?>