<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>oof Inc Bobbleheads</title>
</head>

<body>
    <!-- dummy div -->
    <div id="emToPx" style="height:0;width:0;outline:none;border:none;padding:none;margin:none;box-sizing:content-box;">
    </div>

    <!-- modal popup for form -->
    <div class="modal fade" id="formComplete" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="modal-title" id="formCompleteLabel">Formulär inskickat</h4>
                </div>
                <div class="modal-body">
                    Du är nu uppskriven på våran email lista. Vid eventuella produktsläpp kommer vi meddela dig via
                    mail.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- modal popup for gdpr info -->
    <div class="modal fade" id="gdprInfo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <h4 class="modal-title" id="gdprInfoLabel">Info om GDPR</h4>
                </div>
                <div class="modal-body">
                    Genom att skicka in detta formulär godkänner du att oof Inc lagrar ditt persondata i upp till 12
                    månader i syfta att informera dig vid eventuella produktsläpp.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- page wrapper -->
    <div id="wrapper" class="w-100 h-100">

        <!-- sidebar wrapper -->
        <div id="sidebar-wrapper" class="h-100 position-fixed">
            <ul class="sidebar-nav border-right border-dark">
                <li class="sidebar-brand container navbox m-auto w-100 d-flex align-items-center font-weight-bold">
                    <h5 class="m-0"><u>Navigering</u></h5>
                </li>
                <li class="nav-item container navbox m-auto w-100 d-flex align-items-center p-0">
                    <a class="nav-link w-100 h-100 font-weight-bold d-flex align-items-center" onclick="gotoTag('#start')">
                        <object class="nav-icon mr-2" type="image/svg+xml" data="assets/icons/house.svg"></object>
                        Start
                    </a>
                </li>
                <li class="nav-item container navbox m-auto w-100 d-flex align-items-center p-0">
                    <a class="nav-link w-100 h-100 font-weight-bold d-flex align-items-center" onclick="gotoTag('#info')">
                        <object class="nav-icon mr-2" type="image/svg+xml" data="assets/icons/info-square.svg"></object>
                        Info
                    </a>
                </li>
                <li class="nav-item container navbox m-auto w-100 d-flex align-items-center p-0">
                    <a class="nav-link w-100 h-100 font-weight-bold d-flex align-items-center" onclick="gotoTag('#gallery')">
                        <object class="nav-icon mr-2" type="image/svg+xml" data="assets/icons/card-image.svg"></object>
                        Galleri
                    </a>
                </li>
                <li class="nav-item container navbox m-auto w-100 d-flex align-items-center p-0">
                    <a class="nav-link w-100 h-100 font-weight-bold d-flex align-items-center" onclick="gotoTag('#form')">
                        <object class="nav-icon mr-2" type="image/svg+xml" data="assets/icons/journal-text.svg"></object>
                        Intresseanmälan
                    </a>
                </li>
            </ul>
        </div>

        <!-- main content wrapper -->
        <div id="page-content-wrapper" class="w-100 h-100 position-fixed">
            <div class="container-fluid w-100 h-100 p-0 position-absolute">

                <!-- top navbar -->
                <div class="nav-container w-100 position-fixed">
                    <nav class="navbar navbox m-auto w-100 border-bottom border-dark d-flex align-items-center justify-content-between">
                        <a href="#menu-toggle" id="menu-toggle" class="navbar-brand">
                            <object class="nav-icon" type="image/svg+xml" data="assets/icons/list.svg"></object>
                        </a>
                        <p class="m-0 font-weight-bold">oof Inc</p>
                        <img class="logo" src="assets/icons/oof.svg" alt="logo" />
                    </nav>
                </div>

                <!-- hidden backdrop tag -->
                <div class="backdrop w-100 h-100 position-fixed"></div>

                <!-- main content -->
                <main class="content container">
                    <section id="start">
                        <h1 class="text-center font-weight-bold"><u>oof Inc bobbles</u></h1>
                        <h4 class="text-center"></h4>
                        <img class="container w-80" src="assets/imgs/start.png" alt="" />
                    </section>

                    <hr />

                    <section id="info">
                        <h2 class="text-center font-weight-bold"><u>Om oss</u></h2>
                        <p>
                            <button type="button" onclick="goto('#form')" class="btn w-100" style="background: #B5D99C;">
                                <!-- double arrow down -->
                                Intresseanmäl dig nu!
                                <!-- double arrow down -->
                            </button>
                        </p>
                    </section>

                    <hr />

                    <section id="gallery">
                        <div class="content">
                            <h3 class="text-center font-weight-bold"><u>Bildgalleri</u></h3>
                            <div id="gallery-carousel" class="carousel slide container" data-ride="carousel">
                                <!-- fix to only desktop -->
                                <ol class="carousel-indicators">
                                    <li data-target="#gallery-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#gallery-carousel" data-slide-to="1"></li>
                                    <li data-target="#gallery-carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner text-center">
                                    <div class="carousel-item active">
                                        <img class="img-fluid gal-img" src="assets/imgs/carousel1.png" alt="placeholder1" />
                                        <div class="carousel-caption d-none d-md-block">
                                            <!-- caption for desktop view -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid gal-img" src="assets/imgs/carousel2.png" alt="placeholder2" />
                                        <div class="carousel-caption d-none d-md-block">
                                            <!-- caption for desktop view -->
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid gal-img" src="assets/imgs/carousel3.png" alt="placeholder3" />
                                        <div class="carousel-caption d-none d-md-block">
                                            <!-- caption for desktop view -->
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#gallery-carousel" role="button" data-slide="prev">
                                    <!-- replace with svg for better color control -->
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#gallery-carousel" role="button" data-slide="next">
                                    <!-- replace with svg for better color control -->
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                    </section>

                    <hr />

                    <section id="form">
                        <div class="container">
                            <h3 class="text-center font-weight-bold"><u>Intresseanmälan</u></h3>
                            <p>Anmäl dig till våran email-lista för att få uppdateringar om våra produkter!</p>
                            <form method="POST" action="/">
                                @csrf
                                <div class="form-group">
                                    <!-- <label class="font-weight-bold" for="inputEmail">Mailadress</label> -->
                                    <input type="email" class="form-control align-middle font-weight-light" id="inputEmail" placeholder="Mailadress" name="email" required />
                                    <small id="emailHelp" class="form-text"></small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check d-flex justify-content-between align-items-center">
                                        <input class="form-check-input" type="checkbox" id="gdprCheck" required />
                                        <label class="form-check-label" for="gdprCheck">
                                            Jag godkänner att oof Inc hanterar mitt data i enlighet med GDPR
                                        </label>
                                        <button type="button" class="btn p-0 m-0" data-toggle="modal" data-target="#gdprInfo">
                                            <object class="form-icon" type="image/svg+xml" data="assets/icons/info-circle.svg"></object>
                                        </button>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Skicka</button>
                                <!-- <button type="button" data-toggle="modal" data-target="#formComplete"
                                    class="btn btn-primary w-100">Skicka</button> -->
                            </form>
                        </div>
                        <div class="container text-center pt-3">
                            <small>Vill du bli borttagen från listan? <a href="/removal">Klicka här</a></small>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>


    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>