<?php
    require_once 'connect.php';
    if(!empty($_POST))
    {
        foreach($_POST as $key)
        {
            if(empty($key) || $key='') header('location: 10.php?error=Wypelni wszystkiepola');
            exit();

        }
    }

    $sql="INSERT INTO 'user' ('id', 'city_ID', 'name', 'surname', 'birthday', height', 'cityid')
    values (NULL ,'$_POST[cityid]','$_POST[name]','$_POST[surname]',$_POST[birthday]','$_POST[height]')";

    $connect->query($sql);

    
?>