<?php
session_start();
require '../Public/connection.php';
//Taldeak KONTSULTATU
$taldeak = $conn->prepare("select Izena, Herria from taldea");
$taldeak->execute();
$taldeak = $taldeak->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="../Public/style.css">
    <link rel="stylesheet" href="../css/tablestyle.css">


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

    <section id="Taldeak">
        <div id="new-taldea-info">
            <span></span>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th align="center">Izena</th>
                        <th>Herria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($taldeak as $index => $taldea): ?>
                        <tr>
                            <td align="center">
                                <?php echo $taldea["Izena"] ?>
                            </td>
                            <td>
                                <?php echo $taldea["Herria"] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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