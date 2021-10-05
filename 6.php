<!DOCTYPE html>
<html>
    <body>
        <?php
            if(!isset($_POST['person']))
            {
                echo <<< FORM
                <h3>ilosc osób w rodzinie</h3>
                <form method="POST">
                <input type='number' name='person' placeholder='podaj ilość osób'><br><br>
                <input type="submit">
                </form>
    
                FORM;
            }
        ?>
        <?php
            if(!empty($_POST['person']))
            {
                echo <<< FORM
                <h3>ilosc osób w rodzinie</h3>
                <form method="POST">
                FORM;
                    $count = $_POST['person'];
                    for($i=0; $i <$count; $i++)
                    {
                        echo "<input type='number' name='person$i' placeholder='podaj ilość osób'><br><br>";
                    }
                echo <<< FORM
                    
                <input type="submit" name="buttonAVG">
                </form>
    
                FORM;
            }
            if(!isset($_POST['buttonAVG']))
            {
                $avg=0;
                $count =0;
                foreach ($_POST as $key => $value)
                {
                    if($avg != 'buttonAVG')
                    {
                    $avg += $value;
                    $count++;
                    }
                }
                echo "Średni wiek" .$avg/$count."<br>";
            }

        ?>
    </body>
</html>