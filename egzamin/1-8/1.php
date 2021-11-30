<?php
echo "ZSK<br>";
echo "ZSK<br>";
$name="janusz";
// nie dziala
echo "Imie $name";
// dziaa
echo 'Imie $name';
$całkowiata=10;
$bin=0b1011;
$oct=011;
$hex=0x11;
//.konkatenacja
//,interpolacja

$x = 10.5;
echo gettype($x);

echo $bin;
//logiczne
$prawda=true;
$false = false;
echo $false; // nic nie wyswietla
echo $false; // nic nie wyswietla
echo $prawda; // wyswietla 1


//składnia herdoc
echo <<< L
    <hr> // "linia w poziomie"
    Imie: $name <br>
L;
//nowdoc
echo <<< 'L'
    <hr> // "linia w poziomie"
    Imie: $name <br>
L;

echo "nazwa \$name";

?>