<!DOCTYPE html>
<?php
session_start();
require 'connection.php';

// Taldeak KONTSULTATU
$taldekodeQuery = $conn->prepare("SELECT DISTINCT Taldea_Kodea FROM piraguista");
$taldekodeQuery->execute();
$taldekodeResult = $taldekodeQuery->fetchAll(PDO::FETCH_COLUMN);

// Piraguistak KONTSULTATU
$piraguistakQuery = $conn->prepare("SELECT piraguista.*, taldea.Izena as TaldeIzena
                                    FROM piraguista
                                    INNER JOIN taldea  ON piraguista.Taldea_Kodea = taldea.Kodea");
$piraguistakQuery->execute();
$piraguistak = $piraguistakQuery->fetchAll();

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
                <?php echo ($_SESSION["inputemail"]) ? $_SESSION["inputemail"] : "Ez da saioa hasi"; ?>
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
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=piraguismo"><span>DBKS</span></a>
                <a href="logout.php">Saioa Itxi</a>

            </div class="mainMenu">
        </nav>

        <section id="Taldeak">
            <div id="new-taldea-info">
                <span></span>
                <table class="styled-table">

                    <thead>
                        <tr>
                            <th align="center">Izena</th>
                            <th>Abizena</th>
                            <th>Generoa</th>
                            <th>Txapelketa Kantitatea</th>
                            <th>Taldea</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($piraguistak as $index => $piraguista): ?>
                            <tr>
                                <td align="center">
                                    <?php echo $piraguista["Izena"] ?>
                                </td>
                                <td>
                                    <?php echo $piraguista["Abizena"] ?>
                                </td>
                                <td>
                                    <?php echo $piraguista["Generoa"] ?>
                                </td>
                                <td>
                                    <?php echo $piraguista["Txapelketa_kantitatea"] ?>
                                </td>
                                <td>
                                    <?php echo $piraguista["TaldeIzena"] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ScriptIT.js"></script>
<script src="./script.js"></script>

</html>