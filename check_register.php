<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $izena = $_POST["fizena"];
    $pasahitza = $_POST["fpasahitza"];
    $abizena = $_POST["fabizena"];
    $email = $_POST["femail"];

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

    $query = "INSERT INTO erabiltzailea (Izena, Abizena, Email, Pasahitza, Mota) VALUES ('$izena', '$abizena', '$email', '$pasahitza', 'Arrunta')";

    if ($conn->query($query)) {
        echo "<h2>Erabiltzaile berria sortu da</h2>";
        header("Location: index.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>