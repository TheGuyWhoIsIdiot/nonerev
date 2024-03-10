<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userclass = new User();

    $inviteKey = $userclass->generateInviteKey();

    if ($inviteKey == "uneligible") {
        header("HTTP/1.1 403 Forbidden");
        echo "You have already generated an invite key in the last 12 hours.";
        exit;
    }

    exit($inviteKey);
}
