<?php
$title = "Develop";
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("Location: /");
    exit;
}

$page = "audio";

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    

    // Check if file already exists
    if (file_exists($target_file)) {
        $error = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 10000000) {
        $error = "only 10MB";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "ogg" && $imageFileType != "mp3") {
        $error = "nice try lol";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $error = "Sorry, your file was not uploaded (Invalid file).";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $success = "Your Audio " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded successfully.";
        } else {
            $error = "Sorry, there was an error uploading your file, Try again later.";
        }
    }
    if ($error !== "") {
        header("Location: /develop/audio?error=" . $error);
    }
    if ($success !== "") {
        header("Location: /develop/audio?error=" . $error);
    }
}

?>

<?php echo PageBuilder::buildHeader(); ?>

<div class="container mt-5 p-3 bg-white rounded shadow">
    <h2>Develop</h2>
    <hr>
    <div class="d-flex align-items-start">
        <?php include_once "sidebar.php" ?>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: none;
            }

            h2 {
                margin-bottom: 15px;
                color: #333333;
            }

            hr {
                border: none;
                border-top: 1px solid #eeeeee;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .upload-form {
                margin-top: 10px;
            }

            input[type="file"] {
                display: none;
            }

            input[type="file"]::-webkit-file-upload-button {
                display: none;
            }

            .custom-upload-btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
        </style>
        <div class="container mt-5 p-3">
            <?php if (isset($_GET["error"]) && !empty($_GET["error"])) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?= htmlspecialchars($_GET["error"]) ?></p>
                </div>
            <?php } ?>
            <?php if (isset($_GET["success"]) && !empty($_GET["success"])) { ?>
                <div class="alert alert-success" role="alert">
                    <p><?= htmlspecialchars($_GET["error"]) ?></p>
                </div>
            <?php } ?>
            <h2>Upload Audios</h2>
            <hr>
            <form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
                <label for="fileToUpload" class="custom-upload-btn">Select Audio to Upload (12MB Limit)</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input class="btn btn-success" type="submit" value="Upload" name="submit">
            </form>
        </div>

    </div>
</div>
<?php echo PageBuilder::buildFooter(); ?> 