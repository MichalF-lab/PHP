<?php

    if (!empty($_POST['imie']) && !empty($_POST['figura']))
    {
        switch ($_POST['figura'])
        {
            case 'kwadrat':
                header('location: 5_3kwadrat.php');
            break;
            //--------------------------------------------
            case 'prostokat':
                header('location: 5_3prostokąt.php');
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