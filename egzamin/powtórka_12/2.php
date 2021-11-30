<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Usuwanie wartosci z tabeli</title>
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
            $conect = new mysqli("localhost", "root", "", "tbaza_1");
            //---------------------------------------------------------------
            $sql = "select * from `ksiazki`";
            $result = $conect->query($sql);
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
                        <td><a href="2.php?idd=$wiersz[ID_ksiazki]">usuń</a></td>
                    </tr>
                    dane;
                }
            echo '</table>';
            //-----------------------Usuwanie-------------------------------
            if(isset($_GET['idd']))
            {
                $id = $_GET['idd'];
                $sql = "DELETE FROM `ksiazki` WHERE `ksiazki`.`ID_ksiazki` = $id";
                $result = $conect->query($sql);
                header('location: 2.php');
            }
            //------------------------Dodawanie-------------------------------
            echo '<br><br><strong>Dodawanie<strong><br>';
            echo <<< USER
            <form method="POST">
                <input type="text" name="nazwa" placeholder="podaj nazwe"><br><br>
                <input type="text" name="autor" placeholder="podaj autora"><br><br>
                <input type="cena" name="cena" placeholder="podaj cene"><br><br>
                <input type="submit" value="wprowadz">
            </form>
            USER;
            //----------------------------------------------------------------
            if(!empty($_POST))
            {

                $sql = "INSERT INTO `ksiazki` VALUES (NULL,'$_POST[nazwa]','$_POST[autor]','$_POST[cena]')";
                $result = $conect->query($sql);
                header('refresh: 1;');
            }
            //----------------------Aktualizowanie-------------------------------
            echo '<br><br><strong>Aktualizowanie<strong><br>';
            echo <<< USER
            <form method="GET">
                <input type="number" name="id" placeholder="Id użytkownika"><br><br>
                <input type="text" name="nazwa" placeholder="podaj nazwe"><br><br>
                <input type="text" name="autor" placeholder="podaj autora"><br><br>
                <input type="cena" name="cena" placeholder="podaj cene"><br><br>
                <input type="submit" value="wprowadz">
            </form>
            USER;
            //----------------------------------------------------------------
            if(isset($_GET['id']))
            {
                $sql = "UPDATE `ksiazki`
                SET Nazwa = '$_GET[nazwa]', Autor = '$_GET[autor]', Cena = '$_GET[cena]' 
                WHERE '$_GET[id]' = ID_ksiazki";
                $result = $conect->query($sql);
                header('location: 2.php');
            }
            //---------------------Wyszukiwanie-------------------------------
            echo '<br><br><strong>Wyszukiwanie<strong><br>';
            echo <<< USER
            <form method="GET">
                <select name="szukana">
                    <option value="ID_ksiazki">id</option>
                    <option value="Nazwa">nazwa</option>
                    <option value="Autor">autor</option>
                    <option value="Cena">cena</option>
                </select><br><br>
                <input type="text" name="wartosc" placeholder="podaj warosc"><br><br>
                <input type="submit"><br><br>
            </form>
            USER;
            //----------------------------------------------------------------
            if(isset($_GET['szukana']))
            {
                $sql = "SELECT * FROM `ksiazki` WHERE $_GET[szukana] = '$_GET[wartosc]'";
                $result = $conect->query($sql);
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
                        <td><a href="2.php?idd=$wiersz[ID_ksiazki]">usuń</a></td>
                    </tr>
                    dane;
                }
            echo '</table>';
            }

        ?>

    </body>
</html>