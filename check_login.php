<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["inputemail"];
    $password = $_POST["inpuPassword"];

    require 'connection.php';


    //Konprobatu sartutako Email-a eta pasahitza datubasean dauden
    $query = "SELECT * FROM erabiltzailea WHERE Email='$email' AND Pasahitza='$password'";
    $result = $conn->query($query);



    //Erabiltzaile motaren arabera erabiltzaileak index desberdin bat ikusiko du
    if ($result->rowCount() > 0) {

        $row = $result->fetch(PDO::FETCH_ASSOC);
        $userType = $row["Mota"];
        $_SESSION["inputemail"] = $email;
        if ($userType == "Admin") {

            header("Location: indexAdmin.php");
        } elseif ($userType == "Arrunta") {

            header("Location: Index_Arrunta.php");
        } else {
            
            echo "Erabiltzaile mota ezezaguna";
        }
    } else {

        echo "Datuak gaizki sartu dituzu";
    }
}
?>