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
        if(!empty($_POST['sideA']))
        {
            $area = ($_POST['sideA'] * $_POST['sideA']);
            $circuit = 2*$_POST['sideA'] * 2*$_POST['sideA'];
            echo <<< RESULT
            <hr>
            pole prostakątu wynosi $area <sup>2<sup><br>
            Obwód prostokątu wynosi $circuit
            RESULT;
        }
        ?>
    </body>
</html>