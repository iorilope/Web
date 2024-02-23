<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="style.css">
    <?php 

     require 'connection.php';?>
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
<ul id="topInfo">

    <li>info@urpera.com</li>

</ul>

<nav>
<span class="logo">Erabiltzailea:  <?php echo ($_SESSION["inputemail"]) ? $_SESSION["inputemail"] : "Ez da saioa hasi"; ?></span>
    <div class="menu-btn-3" onclick="menuBtnFunction(this)">
        <span></span>
    </div>

    <div class="mainMenu">

        <a href="indexAdmin.php"><span>Hasiera</span></a>
        <a href="Egutegia.html"><span>Egutegia</span></a>
        <a href="Login.php">Saioa hasi</a>

    </div class="mainMenu">
</nav>
</header>

<?php






?>
</body>
</html>