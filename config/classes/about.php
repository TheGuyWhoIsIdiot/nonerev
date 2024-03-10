<?php

class About
{
public static function changeBio($newBio)
    {
        global $pdo; // pedo??? OMG PHP FILES ARE P*EDO!!!
        

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$_SESSION["user"]["id"]]);
        $user = $stmt->fetch();

        $stmt = $pdo->prepare("UPDATE users SET about = ? WHERE id = ?");
        $stmt->execute([$newBio, $user["id"]]);
    }
}