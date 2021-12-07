<?php
    session_start();
    echo $_SESSION['login'].'<br>';
    echo session_id().'<br>';
    session_regenerate_id();
    echo session_id().'<br>';
?>