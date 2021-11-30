<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Wycieczki</title>
    </head>
    <body>
        <form action="2_1.php" method="GET">
            <h3>Dostępne kraje</h3>
            <input type="submit" value="szukaj">            
        </form>

        <br><br><br>
        
        <form action="2_2.php" method="POST">
            <h3>Dawaj Kurwo dane</h3>
            <input type="text" name = "imie" placeholder="Podaj imie"><br><br>
            <input type="text" name = "nazwisko" placeholder="Podaj nazwisko"><br><br>
            <input type="radio" name="rasa" value="git">biały<br><br>
            <input type="radio" name="rasa" value="ujdzie">azjata <br><br>
            <input type="radio" name="rasa" value="murzyn">małpa<br><br>
            <input type="submit" value ="wyslij">
        </form>
    </body>
</html>