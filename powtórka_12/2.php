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
                        <td><a href="2.php?id=$wiersz[ID_ksiazki]">usuń</a></td>
                    </tr>
                    dane;
                }
            echo '</table>';
            //---------------------------------------------------------------
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $sql = "DELETE FROM `ksiazki` WHERE `ksiazki`.`ID_ksiazki` = $id";
                $result = $conect->query($sql);
                header('location: 2.php');
            }
            //----------------------------------------------------------------
            echo '<br><br>';
            echo <<< USER
            <form method="POST">
                <input type="text" name="nazwa" placeholder="podaj nazwe"><br><br>
                <input type="text" name="autor" placeholder="podaj autora"><br><br>
                <input type="cena" name="cena" placeholder="podaj cene"><br><br>
                <input type="submit" value="wprowadz">
            </form>
            USER;
            //----------------------------------------------------------------
            if(isset($_POST['nazwa']))
            {

                $sql = "INSERT INTO `ksiazki` VALUES (NULL,'$_POST[nazwa]','$_POST[autor]','$_POST[cena]')";
                $result = $conect->query($sql);
                header('refresh: 1;');
            }
            //----------------------------------------------------------------
        ?>
    </body>
</html>