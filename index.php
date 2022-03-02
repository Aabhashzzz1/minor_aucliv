<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

session_start();

if(isset($_SESSION['user_id'])){
    header("location:userhome.php");
}

if(empty($_SESSION['user_id'])){
    header("location:home.php");
}











?>
</body>
</html>
