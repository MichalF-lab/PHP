<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Lotnisko</title>
    </head>
    <body>
        <h3>Witamy na lotnisku</h3>
        <?php
         if(!isset($_POST['km'])){
        echo <<< L
        <form method="POST">
            <input type="number" name="km" value="ile_km"?><br><br>
            <input type="checkbox" name="zwierze"> Czy zabierasz ze sobą zwierze?<br><br>
            <h6>Rodzaj Zniżki</h6>
            <input type="radio" name="znizka" value="brak">Brak<br><br>
            <input type="radio" name="znizka" value="student">uczniowska<br><br>
            <input type="radio" name="znizka" value="lgbt">LGBT<br><br>
            <input type="submit" value="zatwierdz">
        </form>
        L;}

        if(isset($_POST['km']))
        {
            $suma = $_POST['km'] * 0.3;
            if(isset($_POST['zwierze']))
            {
                $suma += 40;
            }
            if($_POST['znizka'] == "lgbt")
            {
                $suma *= 2;
            }
            if($_POST['znizka'] == "student")
            {
                $suma *= 0.75;
            }
            echo "Cena za bilet $suma";

            ?>
            <br><br>
            <button onclick=fu()>Wróć</button>
            <script>
                function fu()
                {
                    history.back();
                }
            </script>
            <?php
        }
        ?>
    </body>
</html>