
<?php
function Garbitu($datos) {
    $datos = trim($datos); // Eliminar espacios en blanco antes y después de los datos
    $datos = stripslashes($datos); // Eliminar barras invertidas
    $datos = htmlspecialchars($datos); // Convertir caracteres especiales en entidades HTML
    return $datos;
}
?>