<?php
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
?>

<html>

<head>
    <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-navbar.png" style="max-height:25px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <i class="fa-solid fa-house" style="margin:0 7px;"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fa-solid fa-user" style="margin:0 7px;"></i>Info Personel
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-font-awesome" style="margin:0 7px;"></i>
                            Logbook
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Harian</a></li>
                            <li><a class="dropdown-item" href="#">Bulanan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Actual Dinas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa-solid fa-file" style="margin:0 7px;"></i>
                            Dokumen
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">LOCA</a></li>
                            <li><a class="dropdown-item" href="#">SOP</a></li>
                            <li><a class="dropdown-item" href="#">AIP</a></li>
                            <li><a class="dropdown-item" href="#">AIRAC</a></li>
                        </ul>
                    </li>
                </ul>
                <span class="navbar-text">
                    <div class="btn-group dropstart">

                        <img class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png"
                            style="max-height:25px; border: 1px solid black; border-radius:50px;">
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Info Personel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    </nav>

    <div class="row" style="margin:30px 20px;">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">PLB</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Palembang</h6>
                    <p class="card-text">
                        Incident : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tristique est non sollicitudin tincidunt. Donec ligula sapien, porta vitae dui non, consequat cursus nibh. In tincidunt urna elit, vel accumsan arcu dignissim commodo.
                    </p>
                    <ul>
                        <li>SPV - Agus Sulistiono</li>
                        <li>MO - Budi Cahyono</li>
                        <li>MO - Yuni Setiani</li>
                    </ul>
                    <!-- <a href="#" class="card-link">Card link</a> -->
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>