<?php
// napisz kalkulator, wybór działania select option
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
  </head>
  <body>
    <form method="post" style="display: inline;">
      <input type="number" step="0.01" name="liczba1" placeholder="wpisz liczbę...">
      <select name="działanie">
        <option name="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" step="0.01" name="liczba2" placeholder="wpisz liczbę...">
      <input type="submit" value="=">
    </form>
    <?php
      if (!empty($_POST['liczba1']) && !empty($_POST['liczba2'])) {
        if ($_POST['działanie']=="+"){
          $x = $_POST['liczba1']+$_POST['liczba2'];
          echo "$x";
        }
        if ($_POST['działanie']=="-"){
        echo $_POST['liczba1']-$_POST['liczba2'];
          
        }
        if ($_POST['działanie']=="*"){
          $x = $_POST['liczba1']*$_POST['liczba2'];
          echo "$x";
        }
        if ($_POST['działanie']=="/"){
          $x = $_POST['liczba1']/$_POST['liczba2'];
          echo "$x";
        }
      }
      else{
        echo "wpisz wszystkie liczby";
      }
    ?>
  </body>
</html>