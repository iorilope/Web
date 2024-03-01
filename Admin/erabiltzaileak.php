<?php
session_start();
require '../Public/connection.php';

//Erabiltzaile guztiak hartu administratzaileak izan ezik
$erabiltzaileakQuery = $conn->prepare("SELECT * from erabiltzailea where Mota <> 'Admin'");
$erabiltzaileakQuery->execute();
$erabiltzaileak = $erabiltzaileakQuery->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="../Public/style.css">
    <link rel="stylesheet" href="../css/tablestyle.css">
    <link rel="stylesheet" href="../css/profila.css">

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
                            <th>Abizena</th>
                            <th>Id</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Datu baseko erabiltzaile guztiak erakutsi administratzaileak ezik -->
                        <?php foreach ($erabiltzaileak as $index => $erabiltzaile): ?>
                            <tr>
                                <td align="center">
                                    <?php echo $erabiltzaile["Izena"] ?>
                                </td>
                                <td>
                                    <?php echo $erabiltzaile["Abizena"] ?>
                                </td>
                                <td>
                                    <?php echo $erabiltzaile["Id"] ?>
                                </td>
                                <td>
                                    <?php echo $erabiltzaile["Email"] ?>
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
                <form action="erabiltzaileak2.php" method="post">
                    <div class="Menu">
                        Erabiltzailearen id-a: <input type="text" name="fid"><br>
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