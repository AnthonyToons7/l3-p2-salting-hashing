<?php
require "./conn.php";
$user = $_POST["username"];
$pass = $_POST["password"];
$passRep = $_POST["repeatPass"];

$hash = password_hash($pass, PASSWORD_DEFAULT);
$salt = uniqid($hash);

$qry = "INSERT INTO gebruiker (Gebruikersnaam, Salting, Hash_wachtwoord) VALUES(?,?,?)";
$stmt = $mysqli->prepare($qry);
$stmt->bind_param("sss", $user, $salt, $hash);
$stmt->execute();
$stmt->close();
header("location: login.php");