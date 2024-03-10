<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
if (!isset($_GET["username"])) die();
header("Content-Type: application/json");
$username = $_GET["username"];
$stmt = $pdo->prepare("SELECT * FROM users WHERE username=:username");
$stmt->bindParam(":username", $username);
$stmt->execute();
if ($stmt->rowCount() >= 1)
  die(json_encode(["success" => true]));
die(json_encode(["success" => false]));
?>

