<?php
include 'connect.php';

$id = $_GET['updateid'];
$q ="SELECT * FROM laps WHERE id ='$id'";
  
$r = mysqli_query($con,$q);
$row = mysqli_fetch_assoc($r);

 $uname =$row['name'];  
 $uemail =$row['email'];

if(isset($_POST['update'])){
    $name =$_POST['name'];
    $email =$_POST['email'];

     $query ="UPDATE laps set name ='$name',email ='$email'
   WHERE id ='$id'";

$run =mysqli_query($con,$query);
if($run){
    echo 'data updated';
}
}else{
    echo 'data not updated';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Form</title>
    <style>
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        form {
            background: white;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-weight: 700;
            color: #333;
            text-align: center;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.5);
        }
        input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #007BFF;
            border: none;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Responsive adjustments */
        @media (max-width: 480px) {
            form {
                padding: 25px 20px;
            }
            input[type="submit"] {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <form action="#" method="POST">
        <h1>Update Form</h1>
        <input type="text" placeholder="Update your name" name="name" value="<?php echo $uname ?>" />
        <input type="email" placeholder="Update your email" name="email" value="<?php echo $uemail ?>" />
        <input type="submit" value="Update" name="update" >
    </form>
</body>
</html>
