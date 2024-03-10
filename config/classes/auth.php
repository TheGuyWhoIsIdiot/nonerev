<?php

class Auth
{
    public static function login($username, $password)
    {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = array(
                "id" => $user["id"],
                "username" => $user["username"],
            );

            $token = self::createToken($user);

            setcookie("token", $token["token"], $token["expires"]);

            return true;
        } else {
            return false;
        }
    }

    public static function register($username, $password)
    {
        global $pdo;

        $username = trim($username);
        
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT)]);

        return true;
    }

    public static function logout()
    {
        unset($_SESSION["user"]);

        if (isset($_COOKIE["token"])) {
            self::deleteToken($_COOKIE["token"]);
            setcookie("token", "", time() - 3600);
        }

        return true;
    }

    public static function createToken($user)
    {
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO tokens (user_id, token, expires) VALUES (?, ?, ?)");
        $stmt->execute([$user["id"], bin2hex(random_bytes(32)), time() + (60 * 60 * 24 * 7)]);


        $stmt = $pdo->prepare("SELECT * FROM tokens WHERE id = ?");
        $stmt->execute([$pdo->lastInsertId()]);

        return $stmt->fetch();
    }

    public static function deleteToken($token)
    {
        global $pdo;

        $stmt = $pdo->prepare("DELETE FROM tokens WHERE token = ?");
        $stmt->execute([$token]);

        return true;
    }

    public static function validateToken($token)
    {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM tokens WHERE token = ?");
        $stmt->execute([$token]);
        $token = $stmt->fetch();

        if ($token) {
            return $token;
        } else {
            return false;
        }

    }

    public static function loginWithToken($token)
    {
        global $pdo;

        $token = self::validateToken($token);
        if ($token) {

            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
            $stmt->execute([$token["user_id"]]);

            $user = $stmt->fetch();


            $_SESSION["user"] = array(
                "id" => $user["id"],
                "username" => $user["username"],
                "admin" => $user["admin"],
                "currency" => $user["currency"],
                "tix" => $user["tix"],
                "email" => $user["email"],
            );
            return true;
        } else {
            return false;
        }
    }

    public static function changePassword($newPassword)
    {
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$_SESSION["user"]["id"]]);
        $user = $stmt->fetch();

        $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        $stmt->execute([$newPassword, $user["id"]]);
    }
}
