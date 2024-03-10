<?php
if (isset($_GET['id']) && !file_exists($_GET['id'])) {
    header('Location: https://assetdelivery.roblox.com/v1/asset?id=' . $_GET['id']);
} else {
    if (isset($_GET['id']) && file_exists($_GET['id'])) {
        header('Location: ' . $_GET['id']);
    }
}
