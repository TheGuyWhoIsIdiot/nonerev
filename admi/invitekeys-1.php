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

$limit = 10;

$page = isset($_GET["page"]) ? $_GET["page"] : 1;

$offset = ($page - 1) * $limit;

$totalpages = $pdo->prepare("SELECT COUNT(*) FROM invites");
$totalpages->execute();
$totalpages = $totalpages->fetchColumn();

$totalpages = ceil($totalpages / $limit);

$stmt = $pdo->prepare("SELECT * FROM invites ORDER BY id DESC LIMIT :limit OFFSET :offset");
$stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
$stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
$stmt->execute();

$invites = $stmt->fetchAll();

// generate the funny for funnies (invite keys)n imagine you ask this to codeium

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["generateKey"])) {
    $inviteKey = $userclass->admin_generateInviteKey();

    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM invites WHERE id = :id");
    $stmt->bindParam(":id", $_POST["inviteId"], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit;
}
?>

<?php echo PageBuilder::buildHeader(); ?>
<?php echo PageBuilder::buildAdminNavbar(); ?>

<div class="container">
    <h1 class="mt-3">Invite keys overview</h1>

    <form class="my-3" method="POST">
        <button type="submit" name="generateKey" class="btn btn-primary">Generate Key</button>
    </form>

    <div class="row">
        <?php foreach ($invites as $invite) : ?>
            <div class="user-search-item col col-12 bg-body-tertiary p-3 m-0 position-relative">
                <h4 class="mb-0">
                    <a href="/user?id=<?= $invite["createdBy"] ?>" class="text-black text-decoration-none">
                        <?= htmlspecialchars($userclass::getUser($invite["createdBy"])["username"]) ?>
                    </a>
                </h4>
                <p class="mb-0">
                    Invite Key: <?= htmlspecialchars($invite["inviteKey"]) ?>
                </p>
                <form method="post" class="mt-2">
                    <input type="hidden" name="inviteId" value="<?= $invite["id"] ?>">
                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete Invite</button>
                </form>
            </div>
        <?php endforeach; ?>

        <?php if (empty($invites)) : ?>
            <p>No invite keys have been generated!</p>
        <?php endif; ?>

        <nav aria-label="Page navigation" class="mt-3 d-flex justify-content-center">
            <ul class="pagination">
                <?php for ($i = 1; $i <= $totalpages; $i++) : ?>
                    <li class="page-item <?= $page == $i ? "active" : "" ?>">
                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>