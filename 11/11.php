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
                echo '<br><br><a href="10.php?addUser=">Dodawanie uzytkownika</a>';
            }
            
            else
            {
                if(isset($_GET['error'])) {echo $_GET['error'];}
                echo <<<ADDUSERFORM
                <br><h4>Dadanie uzytkownika<h4><br>
                <form action="addUser.php" method="post">
                    <input type="text" name="namee" placeholder="Podaj imie"><br><br>
                    <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
                    <input type="date" name="birthday" placeholder="data urodzenia"><br><br>
                    <input type="number" name="name" placeholder="Podaj wzrost"><br><br>
                    <input type="number" name="cityid" placeholder="Podaj miasto"><br><br>
                    <input type="submit" value="zatwierdz"><br><br>
                </form>
                ADDUSERFORM;
            }
        ?>
        
    </body>
</html>