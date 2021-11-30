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
            require_once 'connect.php';
            $sql = "select * from `user`";

            $result = $conect->query($sql);

            if(isset($_GET['deleteUser']))
            {
                echo  "usunieto uzytkownika o id: $_GET[deleteUser] <hr>";
            }

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
                        <td><a href="delete.php?id=$wiersz[id]">usuń</a></td>
                    <tr>
                ROW;
            }
            echo "</table>";

            if(!isset($_GET['addUser']))
            {
                echo '<br><br><a href="10.adduser/php">Dodawanie uzytkownika</a>';
            }
            else
            {
                echo <<<ADDUSERFORM
                <br><h4>Dadanie uzytkownika<h4><br>
                ADDUSERFORM;
            }
        ?>
    <form action="index.html" method="podt">
            <input type="text" name="name" placeholder="Podaj liczba"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="birthday" placeholder="data urodzenia"><br><br>
            <input type="number" name="name" placeholder="Podaj wzrost"><br><br>
    </form>
        
    </body>
</html>