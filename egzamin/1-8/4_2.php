<?php
    if(!empty($_GET['name']) && !empty($_GET['nationality']) && !empty($_GET['age']))
    {
        echo <<< L
        Imie : $_GET[name]<br>
        Narodowść : $_GET[nationality]<br>
        Wiek : $_GET[age]<br>
        L;

    }
    else
    {
        echo "wypełni wszystkie pola";
    }
?>