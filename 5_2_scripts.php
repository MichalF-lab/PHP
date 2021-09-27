<?php

    if (!empty($_POST['imie']) && !empty($_POST['figura']))
    {
        switch ($_POST['figura'])
        {
            case 'kwadrat':
            header('location: kwadrt.php');
            break;
            //--------------------------------------------
            case 'kwadrat':
            
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