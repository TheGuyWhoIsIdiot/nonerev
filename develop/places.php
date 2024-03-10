<?php
$title = "Develop";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';
$creatorId = $_SESSION["user"]["id"];
$db = mysqli_connect("mysql.ct8.pl", "m37272_real", "51+qGa%rl1dICA#ag]0ikfY3RBiDLN", "m37272_db");
  
if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$page = "places";
  
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  
  if (isset($_POST['changeGame']))
  {
    $query = "SELECT * FROM games WHERE creator_id = " . $creatorId . " AND id=" . $_GET['id'];
    $result = mysqli_query($db, $query);

    if ($game = mysqli_fetch_assoc($result)) {
      $query = "UPDATE `games` SET `title`='".htmlspecialchars($_POST['title'])."',`description`='".htmlspecialchars($_POST['desc'])."' WHERE creator_id = " . $creatorId . " AND id=" . $_GET['id'];
      $result = mysqli_query($db, $query);
    }
  } elseif (isset($_POST['deleteGame'])) {
    $query = "SELECT * FROM games WHERE creator_id = " . $creatorId . " AND id=" . $_GET['id'];
    $result = mysqli_query($db, $query);

    if ($game = mysqli_fetch_assoc($result)) {
     $query = "DELETE FROM `games` WHERE creator_id = " . $creatorId . " AND id=" . $_GET['id'];
     $result = mysqli_query($db, $query);
     die("Successfully deleted the place! You may go back now.");
    }
  } else {
    $query = "SELECT COUNT(*) as gamescount FROM games";
    $result = mysqli_query($db, $query);
    
    $gamescount = mysqli_fetch_assoc($result);
    $gamescount = $gamescount['gamescount'] + 1;
    
    $query = "INSERT INTO `games`(`id`, `creator_id`, `title`, `description`, `thumbnail`, `icon`, `ip`, `port`) VALUES ('$gamescount', '$creatorId', 'Baseplate', 'baseplate', '', '', '', '')";
    $result = mysqli_query($db, $query);
   }
}
?>

<?php echo PageBuilder::buildHeader(); ?>
<div class="container mt-5 p-3 bg-white rounded shadow">
    <h2>Develop</h2>
    <hr>
    <form method="POST">
       <button class="btn btn-primary"><a>Make a new game</a></button>
    </form>
    <div class="d-flex align-items-start">
        <?php
        include_once "sidebar.php";

  
  
  if (isset($_GET['id']))
   {
     $query = "SELECT * FROM games WHERE creator_id = " . $creatorId . " AND id=" . $_GET['id'];
$result = mysqli_query($db, $query);
if ($game = mysqli_fetch_assoc($result)) {
    echo '
    <form method="POST"><br>
        <div class="form-floating">
            <textarea class="form-control" name="title" placeholder="very epic place" id="floatingTextarea2" style="height: 100px">' . $game['title'] . '</textarea>
            <label for="floatingTextarea2">Game name</label>
        </div><br>
        <div class="form-floating">
            <textarea class="form-control" name="desc" placeholder="this is such a kewl gaem" id="floatingTextarea2" style="height: 100px">' . $game['description'] . '</textarea>
            <label for="floatingTextarea2">Description</label>
        </div><br>
        <input class="btn btn-success" name="changeGame" type="submit" value="Save Updates">
        <input class="btn btn-danger" name="deleteGame" type="submit" value="Delete Game">                                                                                                                 
    </form>
    ';
} else {
    echo 'Game not found or you are not the owner of it!';
}
 } else {
   $query = "SELECT * FROM games WHERE creator_id = " . $creatorId;
$result = mysqli_query($db, $query);
    while ($game = mysqli_fetch_assoc($result)) {
        echo '
        <div class="game-search-item p-3 m-0 position-relative" style="max-width: 180px;">
            <div data-testid="game-tile">
                <a class="game-card-link" href="/develop/places?id=' . $game["id"] . '">
                    <span class="d-block thumbnail-2d-container game-card-thumb-container rounded" style="width: fit-content; height: fit-content;">
                        <img class="rounded bg-secondary" src="' . ($game["icon"] !== "" ? $game["icon"] : "/img/DefaultPlaceIcon.jpg") . '" alt="' . htmlspecialchars($game["title"]) . '" width="150" height="150">
                    </span>
                    <div class="game-card-name game-name-title" title="' . htmlspecialchars($game["title"]) . '">' . htmlspecialchars($game["title"]) . '</div>
                    <div class="game-card-info" data-testid="game-tile-stats">
                        <span class="info-label"><i class="bi bi-hand-thumbs-up"></i></span>
                        <span class="info-label">--%</span>
                        <span class="info-label"><i class="bi bi-person"></i></span>
                        <span class="info-label">--</span>
                    </div>
                </a>
            </div>
        </div>';
    }
}
        ?>
    </div>
</div>

<?php echo PageBuilder::buildFooter(); ?>