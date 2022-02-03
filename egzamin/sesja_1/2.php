<!-- 2.php -->
<?php
    session_start(); // tutaj też musimy uruchomić sesje
    echo $_SESSION['login'].'<br>';
    echo session_id().'<br>';
    session_regenerate_id();
    echo session_id().'<br>';
?>
<a href="3.php">strona 3</a>