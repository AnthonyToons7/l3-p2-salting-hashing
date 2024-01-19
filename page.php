<?php 
    session_start();
    if(!$_SESSION["loggedIn"]){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>You're logged in, <?= $_SESSION["loggedIn"] ?></h1>
    <a href="./logout.php">Logout</a>
</body>
</html>