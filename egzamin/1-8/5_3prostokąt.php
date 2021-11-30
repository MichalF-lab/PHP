<!DOCTYPE html>
<html lang="pl">
    <head>
    </head>
    <body>
        <h3>Pole prostokątu<h3>
        <form method="post">
            <input type="text" name="sideA" placeholder = "Podaj bok A"><br|><br>
            <input type="text" name="sideB" placeholder = "Podaj bok B"><br|><br>
            
            <input type="submit" value="Oblicz">
        <form>
        <?php
        if(!empty($_POST['sideA']) && !empty($_POST['sideB'])){
            $area = ($_POST['sideA'] * $_POST['sideB']);
            $circuit = 2*$_POST['sideA'] * 2*$_POST['sideB'];
            echo <<< RESULT
            <hr>
            pole prostakątu wynosi $area <sup>2<sup><br>
            Obwód prostokątu wynosi $circuit
            RESULT;
        }
        ?>
    </body>
</html>