<?php
require "./conn.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$user = $_POST["username"];
$pass = trim($_POST["password"]);

$qry = "SELECT Gebruikersnaam, Hash_wachtwoord FROM gebruiker WHERE Gebruikersnaam = ?";
$stmt = $mysqli->prepare($qry);
$stmt->bind_param("s", $user);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$checkPass = password_verify($pass, $row["Hash_wachtwoord"]);
echo '<pre>';
var_dump($pass);
var_dump($row["Hash_wachtwoord"]);
if($checkPass){
    $_SESSION["loggedIn"] = $row["Gebruikersnaam"];
    header("location: page.php");
}

$stmt->close();
$mysqli->close();