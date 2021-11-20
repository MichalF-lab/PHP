<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h3>Dane użytkownika</h3>
    <form>
        <input type="text" name="name" placeholder="imie"><br><br>
        <input type="text" name="surname" placeholder="nazwisko"><br><br>
        <input type="submit" value="wypełni wzytskie dane"><br><br>
    </form>
    <?php
    if(!empty($_GET['name']) && !empty($_GET['name']))
    {
        echo "Wypełnij wszystkie dane";
    }
    else
    {

        echo <<< L
        <br>
        Imie i nazwisko : $_GET[name] , $_GET[surname]
        L;
    }
    
    ?>
    
    </body>
</html>