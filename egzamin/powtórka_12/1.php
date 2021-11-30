<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Czytanie wartosci z tabeli</title>
        <style>
            table, tr, th, td
            {
                border: 1px solid gray;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <?php
            //---------------------------------------------------------------
            $connect = new mysqli("localhost", "root", "", "tbaza_1");
            //---------------------------------------------------------------
            $sql = "select * from `ksiazki`";
            $result = $connect->query($sql);
            //---------------------------------------------------------------
            echo '<table>';
                echo <<< naglowek
                <tr>
                    <td>ID</td>
                    <td>Nazwa</td>
                    <td>Autor</td>
                    <td>Cena</td>
                </tr>
                naglowek;
                //-------------------------------------
                while($wiersz = $result->fetch_assoc())
                {
                    echo <<< dane
                    <tr>
                        <td>$wiersz[ID_ksiazki]</td>
                        <td>$wiersz[Nazwa]</td>
                        <td>$wiersz[Autor]</td>
                        <td>$wiersz[Cena]</td>
                    </tr>
                    dane;
                }
            echo '</table>';
            //---------------------------------------------------------------
        ?>

        
        
    </body>
</html>