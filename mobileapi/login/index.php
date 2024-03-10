<?php
$userInfo = [
    'UserName' => "gino",
    'RobuxBalance' => 0,
    'TicketsBalance' => 0,
    'IsAnyBuildersClubMember' => "0",
    'ThumbnailUrl' => '/Game/Tools/Avatar.ashx?userId=11',
    'UserID' => 1
];



$response = [
    "Status" => "OK",
    "UserInfo" => $userInfo
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
