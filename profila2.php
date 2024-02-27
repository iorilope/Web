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
    <link rel="stylesheet" href="./css/profila.css">
    <link rel="stylesheet" href="./css/formdinamic.css">

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

        <section id="profila">
            <div id="new-taldea-info">
                <span></span>
                <h2>Profila editatu</h2>

        </section>
        <?php
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            $fid = isset($_POST['fid']) ? $_POST['fid'] : null;


            switch ($action) {
                case 'izenaaldatu':
                    ?>
                    <form method="POST" action="izena2.php">

                        Izen berria: <input type="text" name="izen_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'abizenaaldatu':
                    ?>
                    <form method="POST" action="abizena2.php">

                        Abizen berria: <input type="text" name="abizen_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'pasahitzaaldatu':
                    ?>
                    <form method="POST" action="pasahitza2.php">

                        Pasahitz berria: <input type="password" name="pasahitz_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'ezabatuarrunta':
                    ?>
                    <form method="POST" action="Ezabatu.php" id="deleteForm">

                        <button type="submit" onclick="return confirm('¿Seguro zaude ezabatu nahi duzula?')">Ezabatu</button>
                        <button type="button" onclick="ezabatuez()">Ezeztatu</button>
                    </form>
                    <?php
                    break;
                default:

                    break;
            }
        }
        ?>
</body>
<script>
    function ezabatubai() {
        var confirmacion = confirm("¿Seguro zaude ezabatu nahi duzula?");
        if (confirmacion) {
            document.getElementById('deleteForm').submit();
        }
    }

    function ezabatuez() {

        window.location.href = 'IndexAdmin.php';
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ScriptIT.js"></script>
<script src="./script.js"></script>

</html>