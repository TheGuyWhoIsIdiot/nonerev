<?php
header('Content-Type: application/json');

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/main.php";

$array = array( // json by cozmo, put into an array by codeium, edited
    "jobId" => "testing123",
    "status" => 2,
    "joinScriptUrl" => "http://www.n16.ct8.pl/Game/Join.ashx",
    "authenticationUrl" => "https://n16.ct8.pl/Login/Negotiate.ashx",
    "authenticationTicket" => "fr",
    "message" => "success"
);

exit(json_encode($array));


// JSON BY COZMO :D (TYSM! NO PROBLEM!). REMOVE THIS EPIC CREDITS AND YOURE DEAD MEAT

//{"jobId":"testing123","status":2,"joinScriptUrl":"http://www.r3x.ct8.pl/Game/Join.ashx","authenticationUrl":"https://r3x.ct8.pl/Login/Negotiate.ashx","authenticationTicket": "real","message":"success"}