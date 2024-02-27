<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/footermapa.css">

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
                <li><a
                        href="https://www.google.com/maps/place/Tolosaldea+Lanbide+Heziketako+Ikastetxe+Integratua/@43.1489944,-2.070771,17z/data=!3m1!4b1!4m6!3m5!1s0xd504b6900588037:0xbaa343d5f58fb872!8m2!3d43.1489905!4d-2.0681961!16s%2Fg%2F1z44bdkm5?entry=ttu"><span>Kokapena</span></a>
                </li>

            </ul>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2910.882606135166!2d-2.0707710233670387!3d43.14899438489461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd504b6900588037%3A0xbaa343d5f58fb872!2sTolosaldea%20Lanbide%20Heziketako%20Ikastetxe%20Integratua!5e0!3m2!1ses!2ses!4v1709019614006!5m2!1ses!2ses"
            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ScriptIT.js"></script>
    <script src="./script.js"></script>
</body>

</html>