<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średnia wieku</title>
  </head>
  <body>
      <?php
        if(!isset($_POST['amount']))
        {
        echo<<<L
          <form method="POST">
            <input type='number' name='amount' placeholder='Podaj ilosc osob'>
            <input type='submit' value='Prześlij'>
          </form>
        L;
        }

        if(isset($_POST['amount'])){
        echo<<<N
        <form method='POST'>
        N;

        for($i = 0; $i < $_POST['amount']; $i++)
         {
            echo<<<L
            <input type="number" name="age$i" placeholder="Podaj wiek osoby $i">
        L;

        }
        echo<<<L
        <input type="submit" name='age' value="Przeslij">
        </form>
        L;
        }
        
        if (isset($_POST['age'])) {
            $count=0;
            $avg=0;
            //print_r($_POST);
            foreach ($_POST as $key => $value) {
              if ($key != 'age') {
                  $avg+=$value;
                  $count++;
              }
              //echo "$key: $value<br>";
            }
            echo "Średni wiek : ".number_format($avg/$count, 2);
        }

       ?>
  </body>
</html>