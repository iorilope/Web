<?php
session_start();
require 'connection.php';

$txapelketakQuery = $conn->prepare("SELECT txapelketa.*, modalitatea.Mota
                                    FROM txapelketa
                                    INNER JOIN modalitatea  ON txapelketa.Modalitatea_ID_M = modalitatea.ID_M");
$txapelketakQuery->execute();
$txapelketak = $txapelketakQuery->fetchAll();

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

                <a href="Index_Arrunta.php"><span>Hasiera</span></a>
                <a href="Egutegia.html"><span>Egutegia</span></a>
                <a href="Taldeak.php"><span>Taldeak</span></a>
                <a href="piraguistak.php"><span>Piraguistak</span></a>
                <a href="Txapelketak.php"><span>Txapelketak</span></a>
                <a href="Klasifikazioa.php"><span>Klasifikazioa</span></a>
                <a href="ProfilArrunta.php"><span>Profila</span></a>
                <a href="logout.php">Saioa Itxi</a>

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
                            <th>Modalitatea</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($txapelketak as $index => $txapelketa): ?>
                            <tr>
                                <td align="center">
                                    <?php echo $txapelketa["Izena"] ?>
                                </td>
                                <td>
                                    <?php echo $txapelketa["Kokapena"] ?>
                                </td>
                                <td>
                                    <?php echo $txapelketa["Data_Hasi"] ?>
                                </td>
                                <td>
                                    <?php echo $txapelketa["Data_Bukatu"] ?>
                                </td>
                                <td>
                                    <?php echo $txapelketa["Zailtasun_Maila"] ?>
                                </td>
                                <td>
                                    <?php echo $txapelketa["Mota"] ?>
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