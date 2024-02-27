<?php
session_start();
require 'connection.php';

$inputEmail = filter_var($_SESSION["inputemail"], FILTER_SANITIZE_EMAIL);

$profilakquery = $conn->prepare("SELECT * FROM erabiltzailea WHERE Email = :inputEmail");
$profilakquery->bindParam(':inputEmail', $inputEmail, PDO::PARAM_STR);
$profilakquery->execute();
$profilakresult = $profilakquery->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/tablestyle.css">
    <link rel="stylesheet" href="./css/profila.css">

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
                            <th>Abizena</th>
                            <th>Id</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($profilakresult as $index => $profila): ?>
                            <tr>
                                <td align="center">
                                    <?php echo $profila["Izena"] ?>
                                </td>
                                <td>
                                    <?php echo $profila["Abizena"] ?>
                                </td>
                                <td>
                                    <?php echo $profila["Id"] ?>
                                </td>
                                <td>
                                    <?php echo $profila["Email"] ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </section>
        <section id="profila">
            <div id="new-taldea-info">
                <span></span>
                <h2>Profila editatu</h2>
                <form action="profila2.php" method="post">
                    <div class="Menu">
                    </div>

                    <button type="submit" name="action" value="izenaaldatu" class="btn">Izena aldatu</button>
                    <button type="submit" name="action" value="abizenaaldatu" class="btn">Abizena aldatu</button>
                    <button type="submit" name="action" value="pasahitzaaldatu" class="btn">Pasahitza aldatu</button>
                    <button type="submit" name="action" value="ezabatuarrunta" class="btn">Erabiltzailea
                        ezabatu</button>
                </form>
        </section>


</body>

</html>