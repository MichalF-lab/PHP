<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>połaczenia z baza danych</title>
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
            $conect = new mysqli("localhost", "root", "", "4dg1_baza1");
            $sql = "select * from `user`";

            $result = $conect->query($sql);

            echo "<table>";
            echo <<< TABLE
                <tr>
                    <td>ID</td>
                    <td>Imie</td>
                    <td>Nazwisko</td>
                    <td>Urodziny</td>    
                <tr>
            TABLE;
            while($wiersz = $result->fetch_assoc())
            {
                echo <<< ROW
                    <tr>
                        <td> $wiersz[id] </td>
                        <td> $wiersz[name] </td>
                        <td> $wiersz[surname] </td>
                        <td> $wiersz[birthday] </td>
                    <tr>
                ROW;
            }
            echo "</table>";
        ?>
    </body>
</html>