<meta charest="utf-8">
<?php
    echo "dzien-miesiac-rok".date('d-m-Y').'r.<br>';
    echo date('m-d-y').'r.,<br>';
    echo date('d-M-y').'r.<br>';
    echo date('d-F-Y').'r.<br>';

    setlocale(LC_ALL, 'PL');
    echo strftime('%d %B %Y').'<br>';

    echo date('G:i:s').'<br>';
?>

<script>
    setTimeout(() => {
        //window.location.reload();
    }, 1000);
</script>

<?php
    echo date('H:i:s').'<br>'; // na kartkówke
    echo date('H:i:sa').'<br>';

    $data = getdate();

    print_r($data);
    echo '<br>';

    // rok przestęny

    echo date("L");
    // 0  - rok nie jest przestępny

    // mktime

    $today = mktime(0,0,0, date("m"), date("d"), date("Y"));

    echo $today.'<br>';
    // lata od 1 stycznia 1970
    $x=$today/(60*60*24*365);

    echo (int)$x.'<br>';

    $last  = mktime(0,0,0, date("m"), date("d"), date("Y") -1);
    $x=$last/(60*60*24*365);
    echo (int)$x.'<br>';
?>