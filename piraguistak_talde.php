<!DOCTYPE html>
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
<span class="logo">Erabiltzailea:  <?php echo ($_SESSION["inputemail"]) ? $_SESSION["inputemail"] : "Not logged in"; ?></span>
    <div class="menu-btn-3" onclick="menuBtnFunction(this)">
        <span></span>
    </div>

    <div class="mainMenu">

        <a href="Index_Arrunta.php"><span>Hasiera</span></a>
        <a href="Egutegia.html"><span>Egutegia</span></a>
        <a href="Taldeak.php"><span>Taldeak</span></a>
        <a href="Txapelketak.php"><span>Txapelketak</span></a>
        <a href="Klasifikazioa.php"><span>Klasifikazioa</span></a>
        <a href="logout.php"><span>Saioa itxi</span></a>
        <a href="Login.php">Saioa hasi</a>

    </div class="mainMenu">
</nav>
    
</body>
</html>