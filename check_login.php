<?php
session_start();
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener las credenciales del formulario
    $email = $_POST["inputemail"];
    $password = $_POST["inpuPassword"];

    require 'connection.php';

    // Consulta para verificar las credenciales en la base de datos
    $query = "SELECT * FROM erabiltzailea WHERE Email='$email' AND Pasahitza='$password'";
    $result = $conn->query($query);

  
    // Verificar el resultado de la consulta
    if ($result->rowCount() > 0) {
        // Usuario autenticado correctamente
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $userType = $row["Mota"];
        $_SESSION["inputemail"] = $email;
        if ($userType == "Admin") {
            // Usuario Admin
            // Puedes redirigir a la página de administrador o realizar otras acciones
            header("Location: indexAdmin.php");
        } elseif ($userType == "Arrunta") {
            // Usuario Arrunta
            // Puedes redirigir a la página de usuario normal o realizar otras acciones
            header("Location: Index_Arrunta.php");
        } else {
            // Tipo de usuario desconocido
            echo "Erabiltzaile mota ezezaguna";
        }
    } else {
        // Credenciales incorrectas
        echo "Datuak gaizki sartu dituzu";
    }

    // Cerrar la conexión a la base de datos
    
}
?>