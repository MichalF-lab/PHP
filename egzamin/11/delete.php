<?php
    require_once 'connect.php';

    if(!empty($_GET['id']))
    {
        echo "ok";
        $id = $_GET['id'];
        $sql ="DELETE FROM `user` WHERE `user`.`id` = $id";
        $conect->query($sql);
        if($conect->affected_rows > 0){
            header("location: 10.php?deleteUser=$id");
        }
        else
        {
            echo "nie usunieto";
        }
    }
    else
    {
        header('location: bazyTabelaDelete.php');
    }
?>