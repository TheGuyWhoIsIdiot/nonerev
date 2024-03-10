<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
require_once("filter.php");

ProfanityFilter::loadBadWords("blockedusername.txt");

header("Content-Type: application/json");
if (!isset($_GET["username"])) die();
$username = $_GET["username"];
if (!ProfanityFilter::IsAppropriateForSignup($username))
    die(json_encode(["data" => 2]));
if (strlen($username) < 3 || strlen($username) > 20)
    die(json_encode(["data" => 2]));
$stmt = $pdo->prepare("SELECT * FROM users WHERE username=:username");
$stmt->bindParam(":username", $username);
$stmt->execute();
if ($stmt->rowCount() >= 1)
    die(json_encode(["data" => 1]));
die(json_encode(["data" => 0]));


