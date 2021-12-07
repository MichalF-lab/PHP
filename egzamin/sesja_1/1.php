<?php
    session_start();
    $_SESSION['login'] = "admin";
    //unset($_SESSION['login']); Usuwa zmienna
    //session_destroy(); Usuwa wszystkiezmienne sesji
?>
<a href="2.php">strona 2</a>