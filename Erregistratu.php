<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap"
            rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">

        <title>Urpera Kluba</title>

    </head>

    <header id="topHeader">

        <ul id="topInfo">
            <li>info@urpera.com</li>
        </ul>

        <nav>
            <span class="logo">Urpera</span>
            <div class="menu-btn-3" onclick="menuBtnFunction(this)">
                <span></span>
            </div>

            <div class="mainMenu">

                <a href="index.html"><span>Hasiera</span></a>
                <a href="Egutegia.html"><span>Egutegia</span></a>
                <a href="Login.php">Saioa hasi</a>

            </div class="mainMenu">
        </nav>
    </header>

    <section id="intro">
        <div id="intro-info">
            <div>

                <h1>Tolosako piraguismoko Urpera Kirol Elkartea</h1>
                <div id="intro-tag-btn">
                    <span></span>

                </div>
            </div>

            <form method="post" class="form" action="check_register.php">
                <div class="mb-3">

                    <label for="InputIzena" class="form-label">Izena</label>
                    <input type="text" required class="form-control" id="inputizena" name="fizena">


                </div>
                <div class="mb-3">

                    <label for="InputAbizena" class="form-label">Abizena</label>
                    <input type="text" required class="form-control" id="inputabizena" name="fabizena">


                </div>
                <div class="mb-3">

                <label for="InputEmail">Email:</label>
                <input type="text" required class="form-control" id="InputEmail" name="femail">


                </div>
                <div class="mb-3">

                    <label for="InputPassword1" class="form-label">Pasahitza</label>
                    <input type="password" required class="form-control" id="InputPassword" name="fpasahitza">

                </div>

                <div class="d-flex align-items-center">

                    <button type="submit" name="submit" class="btn btn-primary me-auto">Bidali</button>

                </div>
            </form>
        </div>

        <div id="development-img">

            <img src="images/5411421.jpg" alt="Urpera Kirol Elkartea" title="Urpera Kirol Elkartea" />

        </div>
    </section>

    <footer>
        <div>
            <span class="logo">Urpera</span>
        </div>

        <div class="col-3">
            <span class="footer-cat">Informazioa</span>
            <ul class="footer-cat-links">

                <li><a href=""><span>Terminoak eta Baldintzak</span></a></li>
                <li><a href=""><span>Kokapena</span></a></li>

            </ul>
        </div>

        <div id="address">
            <ul>
                <li>
                    <i class="far fa-building"></i>
                    <div>Tolosa<br />
                        Zumardi auzoa
                    </div>
                </li>

            </ul>
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ScriptIT.js"></script>
    <script src="./script.js"></script>
</body>

</html>