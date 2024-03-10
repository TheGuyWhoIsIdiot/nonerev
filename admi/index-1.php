<?php
$title = "Admin Panel";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

$userclass = new User;

$adminlevel = 0;

if (isset($_SESSION["user"])) {
    $user = $userclass::getUser($_SESSION["user"]["id"]);
    $adminlevel = $user["admin"];

    if ($adminlevel < 1) {
        header("Location: /");
        exit;
    }
} else {
    header("Location: /");
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>
<?php echo PageBuilder::buildAdminNavbar(); ?>

<div class="container">
    <h1 class="mt-3">Admin Panel</h1>

    <a href="moderation" class="btn btn-primary">Moderation Actions</a>
    <a href="viewmoderation" class="btn btn-primary">Moderation Actions overview</a>
    <a href="invitekeys" class="btn btn-primary">Manage invite keys</a>
</div>

<?php echo PageBuilder::buildFooter(); ?>

