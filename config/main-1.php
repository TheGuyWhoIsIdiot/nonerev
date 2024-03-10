<?php
// the magic that makes nonerev work... oh my..
// again, do not mess with anything here otherwise the site fucking dies, unless u know what your doing

// TODO List:
// Replace the maintenance variable with a dynamic one.
// Add captcha cause it's useful for registering.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION["passcode"])) {
    $_SESSION["passcode"] = "";
}

// variables

$maintenance = false;
$maintenanceKey = "limcraft69";

require_once "config.php";


// import page builder, new technique to build pages, makes development MUCH MUCH easier.
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/PageBuilder.php';

// import all the classes
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/auth.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/user.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/game.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/classes/about.php';

// define session variables from token
if (isset($_COOKIE["token"])) {
    $token = $_COOKIE["token"];

    $auth = new Auth;
    if ($auth->validateToken($token)) {
        $auth->loginWithToken($token);
    }
}


if ($maintenance) {
    PageBuilder::$pageConfig["title"] = "NoneRev"; // were under maintenance sorry
} else {
    if (isset($title)) {
        PageBuilder::$pageConfig["title"] = "NoneRev - " . $title; // nonerev with page name
    } else {
        PageBuilder::$pageConfig["title"] = "NoneRev"; // nonerev with no page name (kinda sad)
    }
}


// maintenance code

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["passcode"])) {
    $_SESSION["passcode"] = $_POST["passcode"];
    header("Location: ".$_SERVER["REQUEST_URI"]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["leaveMbypass"])) {
    $_SESSION["passcode"] = "";
    header("Location: ".$_SERVER["REQUEST_URI"]);
    exit;
}

if ($maintenance && $_SESSION["passcode"] !== $maintenanceKey) {
    ob_start();

?>
    <?php echo PageBuilder::buildHeader(); ?>

    <div class='maintenance rounded shadow p-4'>
        <img src='/img/nonelogo.png' alt='site logo' height="200px">
        <h1>Woah! Hang on!</h1>
        <h3>We are making NoneRev better for you.</h3>

        <form class="input-group" method="post">
            <input type="text" class="form-control" name="passcode" />
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

    <?php echo PageBuilder::buildFooter(); ?>
<?php

    echo ob_get_clean();
    ob_end_flush();
    exit();
}




// for banned users
if (isset($_SESSION["user"])) {
    $userclass = new User;
    if ($userclass::getUser($_SESSION["user"]["id"])["ongoing_action_id"] > 0 && !str_contains($_SERVER["REQUEST_URI"], "/not-approved")) {
        header("Location: /not-approved");
        exit;
    }
}
