<?php
    //---------------------------------------------------------------
    $conect = new mysqli("localhost", "root", "", "tbaza_1");
    //---------------------------------------------------------------
    //$sql = "select * from `ksiazki`";
    $id = $_GET['id'];
    $sql = "DELETE FROM `ksiazki` WHERE `ksiazki`.`ID_ksiazki` = $id";
    $result = $conect->query($sql);
    //---------------------------------------------------------------
    header('location: 2.php')
?>