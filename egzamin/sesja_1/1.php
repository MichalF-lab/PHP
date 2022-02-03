<?php
    session_start(); // Inicjalizacja mechaizmu sesji
    // Bez tego po refreshu zmienna sesja zniknie
    $_SESSION['login'] = "admin";
    unset($_SESSION['login']);// Usuwa zmienna
    session_destroy();// Usuwa wszystkiezmienne sesji
?>
<a href="2.php">strona 2</a>