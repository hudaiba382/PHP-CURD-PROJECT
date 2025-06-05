<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method = "POST">
        <input type="email" placeholder = "enter your email" name = "email">

        <input type="password" placeholder = "enter your password" name = "pass">
        <input type="submit" value = "login" name = "login">

    </form>
    <?php
    include "connect.php";
    if(isset($_POST['login'])){
        $email =$_POST['email'];
        $pass =$_POST['pass'];
 

    }
    ?>
</body>
</html>