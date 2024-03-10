<?php

class PageBuilder
{

    public static array $pageConfig =
    [
        "title" => "a",
        "og:site_name" => SITE_CONFIG["site"]["name"],
        "og:url" => "http://r3x.ct8.pl/",
        "og:description" => "An old roblox revival that goes for the win.",
        "og:image" => "http://r3x.ct8.pl/img/nonelogo.png",
        "containerWidth" => "w-100",
        "includeNav" => true
    ];

    public static function buildHeader()
    {
        global $maintenance;
        global $maintenanceKey;

        ob_start();

?>



        <!DOCTYPE html>
        <html lang="en" data-bs-theme="light">

        <head>
            <link rel="stylesheet" href="/styles.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel='shortcut icon' type='image/x-icon' href='/img/favicon.ico' />
            <title><?= self::$pageConfig["title"] ?></title>
            <meta name="theme-color" content="#eb4034">
            <meta property="og:title" content="<?= self::$pageConfig["title"] ?>">
            <meta property="og:site_name" content="<?= self::$pageConfig["og:site_name"] ?>">
            <meta property="og:url" content="<?= self::$pageConfig["og:url"] ?>">
            <meta property="og:description" content="<?= self::$pageConfig["og:description"] ?>">
            <meta property="og:type" content="Website">
            <meta property="og:image" content="<?= self::$pageConfig["og:image"] ?>">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>

        <body>
            <nav class="position-sticky top-0 navbar navbar-expand-lg z-1" aria-label="Main navigation">
                <div class="container-fluid">
                    <button onclick="toggleSidebar()" class="border-0 rounded sidebar-toggle-btn mx-3" type="button">
                        <i class="bi bi-list"></i>
                    </button>
                    <a class="navbar-brand" href="/home"><img src="/img/noneRevSmall.png" alt="site logo" height="30px"></a>
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#idfkoptionsfornav" aria-controls="idfkoptionsfornav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="idfkoptionsfornav">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/games">Games</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/catalog">Catalog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/develop/">Create</a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link" href="/upgrades/nonebux">Nonebux</a>
                            </li>
                        </ul>
                        <form method="get" action="/search" class="search-form d-flex my-2 my-lg-0 position-relative">
                            <input class="form-control me-sm-2" type="search" value="<?= isset($_GET["q"]) ? $_GET["q"] : "" ?>" name="q" placeholder="Search" aria-autocomplete="off" autocomplete="off">
                            <ul class="dropdown-menu w-100 position-absolute top-100 p-0 m-0 overflow-hidden" role="menu">
                            </ul>
                        </form>
                        <script>
                            // jquery cuz its kewl
                            $(".search-form input").on("keyup", function() {
                                let q = $(this).val();
                                $.ajax({
                                    type: "GET",
                                    url: "/api/search/searchSuggestions",
                                    data: {
                                        q: q
                                    },
                                    success: function(data) {
                                        $(".search-form .dropdown-menu").addClass("show");
                                        $(".search-form .dropdown-menu").html("");
                                        $(".search-form .dropdown-menu").html(data);
                                    }
                                });
                                if (q.length == 0) {
                                    $(".search-form .dropdown-menu").removeClass("show");
                                    $(".search-form .dropdown-menu").html("");
                                }
                            });
                        </script>
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <?php if ($maintenance && $_SESSION["passcode"] === $maintenanceKey) {
                                ob_start();

                            ?>

                                <form method="post">
                                    <li class="nav-item">
                                        <button type="submit" class="nav-link" name="leaveMbypass">
                                            Leave maintenance bypass
                                        </button>
                                    </li>
                                </form>

                            <?php
                                echo ob_get_clean();
                            } ?>
                            <?php if (isset($_SESSION["user"])) : ?>
                                <li class="nav-item">
                                <a class="nav-link"><?= $_SESSION["user"]["currency"] ?> Nonebux <i class="bi bi-currency-dollar"></i></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-gear-fill"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <?php if ($_SESSION["user"]["admin"] > 0) : ?>
                                            <li>
                                                <a class="dropdown-item" href="/admi/">Admin</a>
                                            </li>
                                        <?php endif; ?>
                                        <li><a class="dropdown-item" href="/my/settings">Settings</a></li>
                                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                                    </ul>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/signup">Sign Up</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

<div class="sidebar position-fixed bg-white text-dark h-100 z-3 d-none p-4">
    <div class="d-flex align-items-center mb-4">
        <img src="/img/pending.png" alt="Profile Picture" class="rounded-circle me-3" style="width: 60px; height: 60px;">
        <div>
            <h4 class="mb-1"><?= $_SESSION["user"]["username"] ?></h4>
            <p class="small">Online</p>
        </div>
    </div>
    <ul class="list-unstyled">
        <li>
            <a href="/home" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-house-door"></i></span> Home
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-people"></i></span> Groups
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-person"></i></span> Friends
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-journal-text"></i></span> Trades
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-chat-left-dots"></i></span> Blog
            </a>
        </li>
        <li>
            <a href="#" class="d-flex align-items-center text-decoration-none text-dark mb-3">
                <span class="me-3"><i class="bi bi-chat-dots"></i></span> Chat
            </a>
        </li>
    </ul>
    <button class="btn btn-primary btn-lg btn-block">Upgrade Now</button>
</div>

            <script defer>
                function toggleSidebar() {
                    $(".sidebar").toggleClass("d-none");
                }

            </script>

            <?php if (isset($_SESSION["user"])) : ?>
                <?php if ($_SESSION["user"]["email"] == "") : ?>
                    <div class="container-fluid bg-warning-subtle w-100 text-center p-2 m-0">
                    To ensure you don't lose access, kindly associate an email with your account. - with <i class="bi bi-heart"></i> None Staff
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        <?php
        return ob_get_clean();
    }

    public static function buildFooter()
    {
        ob_start();
        ?>
            <script defer>
                setInterval(() => {
                    $.ajax({
                        type: "GET",
                        url: "/api/presence/register",
                    });

                }, 1000);
            </script>

        </body>

        </html>
    <?php return ob_get_clean();
    }

    public static function buildAdminNavbar()
    {
        ob_start();
    ?>

        <nav class="navbar navbar-expand-lg" aria-label="Admin navigation bar">
            <div class="container">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminCollapseId" aria-controls="adminCollapseId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="adminCollapseId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/admi/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Moderation
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/admi/moderation">Moderation</a></li>
                                <li><a class="dropdown-item" href="/admi/viewmoderation">View moderation</a></li>
                                <li><a class="dropdown-item" href="/admi/invitekeys">Invite keys generation</a></li>
                                <li><a class="dropdown-item" href="/admi/logs">Admin Logs</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<?php
        return ob_get_clean();
    }
}


