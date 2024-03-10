<?php

// sorry we need another config file, we need to import some shit seperately haha so funny

define(
    "SITE_CONFIG",
    [
        "database" =>
        [
            "host" => "mysql.ct8.pl",
            "schema" => "m37272_db",
            "username" => "m37272_real",
            "password" => "51+qGa%rl1dICA#ag]0ikfY3RBiDLN"
        ],

        "site" =>
        [
            "name" => "NoneRev",
            "name_secondary" => "NoneRev",
            "currencyName" => "Nonebux"
        ],

        "captcha" => // unused, might be used in the future
        [
            "siteKey" => "undefined",
            "privateKey" => "undefined"
        ]
    ]
);

// database connection (PDO, cuz it kewl)

try {
    $pdo = new PDO('mysql:host=' . SITE_CONFIG["database"]["host"] . ';dbname=' . SITE_CONFIG["database"]["schema"], SITE_CONFIG["database"]["username"], SITE_CONFIG["database"]["password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Uh oh! It seems like we threw too much milk into our servers. They're made of potatos obviously! message: " . $e->getMessage()); // oh no moment when this happens
}