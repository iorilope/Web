
<?php
function Garbitu($datuak) {
    $datuak = trim($datuak); 
    $datuak = stripslashes($datuak); 
    $datuak = htmlspecialchars($datuak); 
    return $datuak;
}
?>