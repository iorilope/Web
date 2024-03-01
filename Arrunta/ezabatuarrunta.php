<?php
session_start();
require '../connection.php';
include '../function.php';

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
    <link rel="stylesheet" href="../style.css">
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
                <a href="../logout.php">Saioa Itxi</a>

            </div class="mainMenu">
        </nav>
        <section id="profila">
            <div id="new-taldea-info">
                <span></span>
                <h2>Profila editatu</h2>

                <form method="POST" action="ezabatu2.php" id="deleteForm">
                    <button type="button" onclick="ezabatubai()">Ezabatu</button>
                    <button type="button" onclick="ezabatuez()">Ezeztatu</button>
                </form>
        </section>
</body>

<script>
    //Erabiltzailea ezabatu baino lehen ziur gauden galdetuko digu
    function ezabatubai() {
        var confirmacion = confirm("¿Seguro zaude ezabatu nahi duzula?");
        if (confirmacion) {
            document.getElementById('deleteForm').submit();
        }
    }

    function ezabatuez() {

        window.location.href = 'Index_Arrunta.php';
    }
</script>

</html>