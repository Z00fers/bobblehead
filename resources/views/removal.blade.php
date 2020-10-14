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

    <!-- page wrapper -->
    <div id="wrapper" class="w-100 h-100">

        <!-- main content wrapper -->
        <div id="page-content-wrapper" class="w-100 h-100 position-fixed">
            <div class="container-fluid w-100 h-100 p-0 position-absolute">

                <!-- top navbar -->
                <div class="nav-container w-100 position-fixed">
                    <nav class="navbar navbox m-auto w-100 border-bottom border-dark d-flex align-items-center justify-content-between">
                        <a class="navbar-brand">
                            <object class="nav-icon" type="image/svg+xml" data="assets/icons/list.svg"></object>
                        </a>
                        <p class="m-0 font-weight-bold"><a href="/">oof Inc</a></p>
                        <img class="logo" src="assets/icons/oof.svg" alt="logo" />
                    </nav>
                </div>
                <div style="width: 100%; margin-top: 4.5em;" class="pb-2"></div>
                <section id="form">
                    <div class="container">
                        <form method="POST" action="/removal">
                            @csrf
                            @method('delete')
                            <p>För att bli borttagen ur vårat system vänligen skriv in din mailadress nedan.</p>
                            <div class="form-group">
                                <!-- <label class="font-weight-bold" for="inputEmail">Mailadress</label> -->
                                <input type="email" class="form-control align-middle font-weight-light" id="inputEmail" placeholder="Mailadress" name="email" required />
                                <small id="emailHelp" class="form-text"></small>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Ta bort</button>
                        </form>
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