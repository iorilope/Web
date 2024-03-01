<?php
session_start();
require '../Public/connection.php';
include '../Public/function.php';

$id = Garbitu($_POST['fid']);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Urpera Piraguismoa</title>
    <link rel="stylesheet" href="../Public/style.css">
    <link rel="stylesheet" href="../css/tablestyle.css">
    <link rel="stylesheet" href="../css/formdinamic.css">

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

        <section id="profila">
            <div id="new-taldea-info">
                <span></span>
                <h2>Profila editatu</h2>

        </section>
        <?php
        if (isset($_POST['action'])) {
            $action = $_POST['action'];
            $fid = isset($_POST['fid']) ? $_POST['fid'] : null;

            // Pasatutako Id-a eta aukeratutako botoiaren arabera gauza bat edo bestea eguneratuko dugu
            switch ($action) {
                case 'izenaaldatu':
                    ?>
                    <form method="POST" action="izenaadmin2.php">
                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
                        Izen berria: <input type="text" name="izen_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'abizenaaldatu':
                    ?>
                    <form method="POST" action="abizenaadmin2.php">
                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
                        Abizen berria: <input type="text" name="abizen_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'pasahitzaaldatu':
                    ?>
                    <form method="POST" action="pasahitzaadmin2.php">
                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
                        Pasahitz berria: <input type="password" name="pasahitz_berria"><br>
                        <input type="submit" />
                    </form>
                    <?php
                    break;
                case 'ezabatuarrunta':
                    ?>
                    <form method="POST" action="EzabatuAdmin2.php" id="deleteForm">
                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
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
    //Skript honen bidez pop up bat ikusiko dugu ziur gauden ezabatzeko galdetuz
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


</html>