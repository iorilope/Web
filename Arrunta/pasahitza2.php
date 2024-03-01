<?php
session_start();
require '../Public/connection.php';

include '../Public/function.php';

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

                <a href="Index_Arrunta.php"><span>Hasiera</span></a>
                <a href="Taldeak.php"><span>Taldeak</span></a>
                <a href="piraguistak.php"><span>Piraguistak</span></a>
                <a href="Txapelketak.php"><span>Txapelketak</span></a>
                <a href="Klasifikazioa.php"><span>Klasifikazioa</span></a>
                <a href="../Public/logout.php">Saioa Itxi</a>

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

                $pasahitza = Garbitu($_POST['pasahitz_berria']);
                $email = $_SESSION["inputemail"];

                $Aldaketa = "UPDATE erabiltzailea set Pasahitza='$pasahitza' WHERE Email='$email'";

                if (mysqli_query($conn, $Aldaketa)) {
                    echo "<h2>Pasahitza eguneratu da</h2>";
                } else {
                    echo "Error: " . $Aldaketa . "<br>" . mysqli_error($conn);
                }
                ?>

        </section>
</body>

</html>