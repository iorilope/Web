<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="../Public/style.css">
    <?php

    require '../Public/connection.php'; ?>
</head>

<body>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap"
            rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/footermapa.css">
        <title>Urpera Kluba</title>

    </head>

    <header id="topHeader">


        <nav>
            <span class="logo">Erabiltzailea:
                <?php echo ($_SESSION["inputemail"]) ? $_SESSION["inputemail"] : "Not logged in"; ?>
            </span>
            <div class="menu-btn-3" onclick="menuBtnFunction(this)">
                <span></span>
            </div>

            <div class="mainMenu">

                <a href="IndexAdmin.php"><span>Hasiera</span></a>
                <a href="TaldeakAdmin.php"><span>Taldeak</span></a>
                <a href="piraguistakAdmin.php"><span>Piraguistak</span></a>
                <a href="TxapelketakAdmin.php"><span>Txapelketak</span></a>
                <a href="KlasifikazioaAdmin.php"><span>Klasifikazioa</span></a>
                <a href="erabiltzaileak.php"><span>Erabiltzaileak</span></a>
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=piraguismo"
                    target="_blank"><span>DBKS</span></a>
                <a href="../Public/logout.php">Saioa Itxi</a>

            </div class="mainMenu">
        </nav>
    </header>

    <section id="intro">
        <div id="intro-info">
            <div>
                <h1>Tolosako piraguismoko Urpera Kirol Elkartea</h1>
                <div id="intro-tag-btn">
                    <span></span>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=infourpera@gmail.com" target="_blank"
                        class="brand-btn">Kontaktuan Jarri</a>
                </div>
            </div>
        </div>

        <div id="development-img">
            <img src="../images/5411421.jpg" alt="Urpera Kirol Elkartea" title="Urpera Kirol Elkartea" />
        </div>
    </section>

    <section id="success-story">
        <h1 class="sec-heading">Gure historia</h1>

        <div class="slider">
            <div class="col-6 slide-text">
                <div>

                    <h2>Urpera</h2>
                    <p>
                        Urpera Piraguismo Elkartea: Historia
                        Urpera Piraguismo Elkartea 2005ean sortu zen piraguismoa maite zuen lagun talde baten
                        eskutik. Hasieratik, klubak
                        kirol hau Gasteizen eta inguruetan sustatzea izan du helburu, baita urarekiko eta
                        naturarekiko grina sustatzea ere.
                        Urte hauetan zehar, Urpera Piraguismo Elkarteak hazkunde nabarmena izan du, bere jarduera
                        eskaintza zabalduz eta
                        eskualdeko erreferentziazko klub bezala sendotuz.
                        Klubaren historiako mugarri garrantzitsu batzuk:

                    </p>

                    <p>
                        2005: Piraguismoa maite zuen lagun talde batek kluba sortu zuen.
                        2008: Klubak lehiaketa ofizial batean lehen aldiz parte hartu zuen.
                        2010: Piraguismoko lehen txapelketaren antolaketa Gasteizen.
                        2012: Haurrentzako piraguismo-eskola sortu zen.
                        2015: Klubeko piraguen flota handitzea.
                        2018: Klubaren egoitza berriaren inaugurazioa.
                        2020: Klubaren 15. urteurrenaren ospakizuna.

                    </p>

                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=infourpera@gmail.com" target="_blank"
                        class="brand-btn">Kontaktuan Jarri</a>
                </div>
            </div>

            <div class="col-6 slide-img">
                <img src="../images/kayak-mujer-kayak-chicas-remando-agua.jpg" />
            </div>

        </div>
    </section>
    <section id="revenue" class="brand-logos">

        <h1 class="sec-heading">Azken albisteak</h1>
        <div>

            <a><img src="../images/logo_PIBA_400x400.png" alt="Badajoz Kluba" title="Jokalari berria">
                <p>Badajozeko klubak Christian Romero jokalaria lortu du azken txapelketarako</p>
            </a>
            <a><img src="../images/Logo-Talak-N.webp" alt="Talak Kluba" title="Talak Irabazi">
                <p>Teresa Portelak seigarren domina lortu du Europako Txapelketa batean</p>
            </a>
            <a><img src="../images/tinywow_Club-Getxo-Kayaka_48270549.png" alt="Getxoko Kluba" title="Notizia onak">
                <p> Espainian piraguismoarentzako errendimendu handiko zentro berri bat eraiki da. </p>
            </a>
            <a><img src="../images/logo_web_astorres2x.png" alt="Astorres Kluba" title="Espainiako Selekzioa">
                <p>Amador Barranco Espainiako selekzioan jokatzen egongo da hurrengo hilabetean</p>
            </a>
            <a><img src="../images/cropped-CabeceraWeb2.jpg" alt="Cordobako Kluba" title="Piragua berriak">
                <p>Piragua mota berri bat garatzen da, arinagoa eta erresistenteagoa.Hurrengo hilabetean ikusiko dugu.
                </p>
            </a>
            <a><img src="../images/descarga.jfif" alt="Aranjuezeko Kluba" title="Vr entrenamendua">
                <p>Piraguistentzako entrenamendu-sistema birtual bat ezartzen da.</p>
            </a>
            <a><img src="../images/Logo-2017-oxio-web.jpg" alt="Oxio Kluba" title="ONG ekin lanean">
                <p>Piraguistak GKE baterako dirua biltzeko mobilizatzen dira.</p>
            </a>
            <a><img src="../images/logoRURALSPORT-png.png" alt="Desgaituak" title="Pertsona desgaituak">
                <p>Piraguismo-programa bat sortu da desgaitasuna duten pertsonentzat.</p>
            </a>
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


    </footer>


</body>

</html>