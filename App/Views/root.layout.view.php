<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fitness Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link href="semestralka03/index1.css" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"
            integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="semestralka03/App/script.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="?c=home">Fitness Academy</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kurzy
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="?c=home&a=poleDance">Pole Dance</a></li>
                        <li><a class="dropdown-item" href="?c=home&a=aerialHoop">Aerial Hoop</a></li>
                        <li><a class="dropdown-item" href="?c=home&a=aerialSilk">Aerial Silk</a></li>
                        <li><a class="dropdown-item" href="?c=home&a=flexiYoga">Flexi Joga</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=trenerky">Trenerky</a>
                </li>
                <?php if (\App\Models\User::isLogged()) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=course&a=lekcie">Lekcie</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home&a=kontakt">Kontakt</a>
                </li>
            </ul>
            <?php if (\App\Models\User::isLogged()) { ?>
                <ul class="navbar-nav ml-auto">
                    <?php if (\App\Models\User::isUser()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=User&a=calendar">
                                <img class="conto" src="semestralka03/calendar.png" alt="Calendar">
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (\App\Models\User::isTrainer()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=User&a=calendarTrener">
                                <img class="conto" src="semestralka03/calendar.png" alt="Calendar">
                            </a>
                        </li>
                    <?php } ?>
                    <?php if (\App\Models\User::isAdministrator()) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?c=User&a=admin">
                                <img class="conto" src="semestralka03/person.png" alt="Person">
                            </a>
                        </li>
                    <?php } ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            <img class="conto" src="semestralka03/setting.png" alt="Settings">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?c=Auth&a=changePasswordForm">Zmeniť heslo</a></li>
                            <li><a class="dropdown-item" href="?c=User&a=deactivate">Deaktivovať účet</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?c=User&a=logout">
                            <img class="conto" src="semestralka03/opendoor.png" alt="Log out">
                        </a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="?c=Auth&a=loginForm">
                            <img class="conto" alt="Log in" src="semestralka03/login.png">
                        </a>
                    </li>
                </ul>
            <?php } ?>
            <button class="mode" onclick="setMode()">
                <i class="bi bi-brightness-high-fill"></i>
            </button>
        </div>
    </div>
</nav>

<div class="page-container">

        <?= $contentHTML ?>
    </div>
</div>
    <div class="pata">
        <a class="navigacia" href="https://www.instagram.com/poledancezilina/">
            <img class="icons" alt="Instagram" src="semestralka/instagramIcon.png">
        </a>
        <a class="navigacia" href="https://www.facebook.com/profile.php?id=100063614198890">
            <img class="icons" alt="Facebook" src="semestralka/facebookIcon.png">
        </a>
    </div>

</body>
</html>

