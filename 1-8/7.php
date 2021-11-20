<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>połaczenia z baza danych</title>
    </head>
    <body>
        <?php
            $conect = new mysqli("localhost", "root", "", "4dg1_baza1");
            $sql = "select * from `user`";

            $result = $conect->query($sql);

            //print_r($result);

            /*while($wiersz = $result->fetch_assoc())
            {
                print_r($wiersz);
                echo'<br>';
            }*/

            while($wiersz = $result->fetch_assoc())
            {
                echo <<< ROW
                    Imie: $wiersz[name]<br>
                    Nazwisko: $wiersz[surrname]<br>
                    Urodziny: $wiersz[birghtday]<br>
                ROW;
            }
        ?>
    </body>
</html>