<?php
session_start();
require 'connection.php';
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/tablestyle.css">

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
                <a href="ProfilArrunta.php"><span>Erabiltzaileak</span></a>
                <a href="logout.php">Saioa Itxi</a>

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
                <li><a href=""><span>Kokapena</span></a></li>

            </ul>
        </div>
        <div id="address">
            <ul>
                <li>

                    <i class="far fa-building"></i>
                    <div>Tolosa<br />
                        Zumardi auzoa</div>

                </li>
            </ul>
        </div>

    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ScriptIT.js"></script>
<script src="./script.js"></script>

</html>