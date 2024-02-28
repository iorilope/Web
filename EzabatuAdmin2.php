<?php
session_start();
require 'connection.php';
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
                <a href="erabiltzaileak.php"><span>Erabiltzaileak</span></a>
                <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=piraguismo" target="_blank"><span>DBKS</span></a>
                <a href="logout.php">Saioa Itxi</a>

            </div class="mainMenu">
        </nav>

        <section id="profila">
            <div id="new-taldea-info">
                <span></span>
                <h2></h2>

                <?php
                /*MySQL*/
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "piraguismo";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                //Lortu erabiltzailearen id-a
                $id = $_POST['fid'];

                //Erabiltzailea ezabatu
                $Aldaketa = "delete from  erabiltzailea WHERE Id='$id'";

                if (mysqli_query($conn, $Aldaketa)) {
                    echo "<h2>Erabiltzailea kendu da</h2>";

                    header('location:indexAdmin.html');
                } else {
                    echo "Error: " . $Aldaketa . "<br>" . mysqli_error($conn);
                }
                ?>

        </section>
</body>

</html>