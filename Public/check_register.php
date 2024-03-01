<?php
session_start();
include "function.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Formulariotikan erregistroko datuak pasa
    $izena = Garbitu($_POST["fizena"]);
    $pasahitza = Garbitu($_POST["fpasahitza"]);
    $abizena = Garbitu($_POST["fabizena"]);
    $email = Garbitu($_POST["femail"]);

    require 'connection.php';

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

    //Formulariotikan pasatako datuak erabiltzaile gisa sartu
    $query = "INSERT INTO erabiltzailea (Izena, Abizena, Email, Pasahitza, Mota) VALUES ('$izena', '$abizena', '$email', '$pasahitza', 'Arrunta')";

    if ($conn->query($query)) {
        echo "<h2>Erabiltzaile berria sortu da</h2>";
        header("Location: index.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>