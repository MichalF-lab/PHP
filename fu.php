<?php
    if(!empty($_GET['name']) && !empty($_GET['nationality']) && !empty($_GET['wiek']))
    {
        echo <<< L
        Imie : $_GET[name]<br>
        Imie : $_GET[name]<br>
        Imie : $_GET[name]<br>
        L;

    }
    else
    {
        echo "wypełni wszystkie pola";
    }
?>