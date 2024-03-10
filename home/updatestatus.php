<?php
$title = "Home";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}
  
if (isset($_POST['txtStatusMessage']))
{
  $current_time = date("Y-m-d H:i:s");
  $stmt = $pdo->prepare("INSERT INTO `feed`(`id`, `message`, `time`, `isGroup`) VALUES (?,?,?,?)");
  $stmt->execute([$_SESSION['user']['id'], $_POST['txtStatusMessage'], $current_time, false]);
  header('Content-Type: application/json');
  echo '{"success": true, "message": "Successfully sent message!"}';
}
?>

