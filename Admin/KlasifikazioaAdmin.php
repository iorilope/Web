<?php
session_start();
require '../Public/connection.php';

$KlasifikazioaQuery = $conn->prepare("SELECT txapelketa.*,modalitatea.Mota, parte_hartu.Denbora AS ParteHartuDenbora, taldea.Izena AS TaldeaIzena
                                    FROM txapelketa
                                    LEFT JOIN modalitatea ON txapelketa.Modalitatea_ID_M = modalitatea.ID_M
                                    LEFT JOIN parte_hartu ON txapelketa.ID_T = parte_hartu.Txapelketa_ID_T
                                    LEFT JOIN taldea ON parte_hartu.Taldea_Kodea = taldea.Kodea");
$KlasifikazioaQuery->execute();
$Klasifikazioak = $KlasifikazioaQuery->fetchAll();

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
                <a href="erabiltzaileak.php"><span>Erabiltzaileak</span></a>
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=piraguismo"
                    target="_blank"><span>DBKS</span></a>
                <a href="../Public/logout.php">Saioa Itxi</a>

            </div class="mainMenu">
        </nav>

        <section id="Txapelketak">
            <div id="new-taldea-info">
                <span></span>
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th align="center">Izena</th>
                            <th>Kokapena</th>
                            <th>Data Hasi</th>
                            <th>Data Bukatu</th>
                            <th>Zailtasun Maila</th>
                            <th>Denbora</th>
                            <th>Mota</th>
                            <th>Talde Izena</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($Klasifikazioak as $index => $klasifikazioa): ?>
                            <tr>
                                <td align="center">
                                    <?php echo $klasifikazioa["Izena"] ?>
                                </td>
                                <td>
                                    <?php echo $klasifikazioa["Kokapena"] ?>
                                </td>
                                <td>
                                    <?php echo $klasifikazioa["Data_Hasi"] ?>
                                </td>
                                <td>
                                    <?php echo $klasifikazioa["Data_Bukatu"] ?>
                                </td>
                                <td>
                                    <?php echo $klasifikazioa["Zailtasun_Maila"] ?>
                                </td>
                                <td>
                                    <?php echo $klasifikazioa["ParteHartuDenbora"] ?>

                                </td>
                                <td>
                                    <?php echo $klasifikazioa["Mota"] ?>

                                </td>
                                <td>
                                    <?php echo $klasifikazioa["TaldeaIzena"] ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </section>

</body>


</html>