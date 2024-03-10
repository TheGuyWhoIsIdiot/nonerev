<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/user.php';

$userid = isset($_GET["id"]) ? $_GET["id"] : 0;

$userclass = new User;
$user = $userclass::getUser($userid);

if ($user) {
    $title =  $user["username"] . "'s Profile";
} else {
    header("HTTP/1.1 404 Not Found");
    $title = "404 Not Found";
}


include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$gameclass = new Game;

$games = $gameclass::getGamesByUserId($userid);

?>

<?php echo PageBuilder::buildHeader(); ?>

    <div class="container mt-3 bg-white p-3 rounded">
      <h1>Error 404</h1>
      <p>Not Found</p>
    </div>

<?php echo PageBuilder::buildFooter(); ?>
