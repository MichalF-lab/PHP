<!DOCTYPE html>
<html lang="pl">
    <head>
    </head>
    <body>  
        <h3>Pole kwadratu<h3>
        <form method="post">
            <input type="text" name="sideA" placeholder = "Podaj bok A"><br|><br>
            <input type="submit" value="Oblicz">
        <form>
        <?php
        if(!empty($_POST['sideA'])){
            $sideA = str_replace(',','.' ,$_POST['sideA']);
            $area=pow($_POST['sideA'],2);
            $circuit = 4*$_POST['sideA'];
            echo <<< RESULT
            <hr>
            pole kwadratu wynosi $area <sup>2<sup><br>
            Obwód kwadratu wynosi $circuit
            RESULT;
        }
        ?>
    </body>
</html>