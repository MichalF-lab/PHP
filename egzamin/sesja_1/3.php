<!-- 3.php -->
<?php
    $_COOKIE['name'] = "adrian";//to nie jest jescze cookie
    # Co prawda istnieje już zmienna superglobalna $_COOKIE['name']
    /* Po refreshu cookie zniknie */
    setcookie('nazwa_ciasteczka','wartosc ciasteczka');
    echo $_COOKIE['nazwa_ciasteczka'];// zwroci 'wartosc ciasteczka'
    # Za pierwszym razem zwroci blad bo setcookie nie zdazy sie wykonac
    setcookie('nazwa','wartosc',time()+3600);//od teraz + 3600 sekund
    # Jeżeli nie damy funkcji time() sekundy beda dodane do daty 1.01.1970
    setcookie('nazwa','inna wartosc'); // ! W taki sposob modyfikujemy cookie
?>