<?php

    if (!empty($_POST['imie']) && !empty($_POST['figura']))
    {
        switch ($_POST['figura'])
        {
            case 'kwadrat':
            header('location: kwadrat.php');
            break;
            //--------------------------------------------
            case 'prostokat':
            header('location: prostokąt.php');
            break;
        }
    }
    else
    {
        ?>
        <script>
            history.back();
        </script>    
        <?php
    }
?>