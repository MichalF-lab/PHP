<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="1.php?wybor">Pokaz i aktualizuj dane</a><br>
        <a href="1.php?dodaj">Dodaj gnoja</a><br>
        <?php
            //error_reporting(0);
            $connect = new mysqli("localhost","root","","studenci");
            if(isset($_GET['wybor']))
            {
                $sql = "SELECT * FROM studenci";
                $result = $connect->query($sql);
                echo '<table>';
                echo '<tr><th>id</th><th>imie</th><th>nazwisko</th><th>obywatelstwo</th></tr>';
                while($wiersz = $result->fetch_assoc())
                {
                    echo <<< L
                        <tr>
                            <td>$wiersz[id_person]</td>
                            <td>$wiersz[Imie]</td>
                            <td>$wiersz[nazwisko]</td>
                            <td>$wiersz[id_obywatelstwa]</td>
                            <td><a href=1.php?id_ak=$wiersz[id_person]>Aktualizuj</a></td>
                        </tr>
                    L;
                }
                echo '</table>';
            }
            if(isset($_GET['id_ak']))
            {
                $sql = "SELECT * FROM studenci where $_GET[id_ak] = id_person";
                $result = $connect->query($sql);
                while($wiersz = $result->fetch_assoc())
                {
                echo <<< L
                <form method="POST">
                    <span>Id gnoja: $_GET[id_ak]</span>
                    Podaj Imie <input type=text name=imie value="$wiersz[Imie]">
                    Podaj Nazwiko <input type=text name=nazwisko value="$wiersz[nazwisko]">
                    Podaj wiek <input type=number name=obyw value="$wiersz[id_obywatelstwa]">
                    <input type="submit" value="Wyślij">
                </form>
                L;
                }
            }
            if(!empty($_POST))
            {
                $sql = "UPDATE `studenci` SET `Imie`='$_POST[imie]',`nazwisko`='$_POST[nazwisko]',`id_obywatelstwa`='$_POST[obyw]' WHERE $_GET[id_ak] = id_person";
                $connect->query($sql);
                echo 'zaktualizowano użytkownika';
            }
            

            if(isset($_GET['dodaj']))
            {
                {
                    echo <<< L
                    <form method="GET">
                        Podaj Imie <input type=text name=imie>
                        Podaj Nazwiko <input type=text name=nazwisko>
                        Podaj obywatelstow <input type=number name=obyw>
                        <input type="submit" value="Wyslij">
                    </form>
                    L;
                }
            }
            if(isset($_GET['obyw']))
            {
                $sql = "INSERT INTO `studenci` VALUES ('NULL','$_GET[imie]','$_GET[nazwisko]',$_GET[obyw])";
                $connect->query($sql);
                echo 'dodano użytkownika';
            }
        ?>

    </body>
</html>