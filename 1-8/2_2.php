<?php
if(!empty ($_POST['nazwisko']))
{
    if($_POST['rasa'] == 'murzyn')
    {
        echo "Wypierdalaj";
    }

    if($_POST['rasa'] == "ujdzie")
    {
        header('location: 2_2_1.php');
    }
    if($_POST['rasa'] == "git")
    {
        echo <<< GIT
            Witaj biały człowieku o imieniu $_POST[imie]
            cieszymy się że jesteś biały
    GIT;
    }
}
else
{
    ?>
        <script>history.back()</script>
    <?php
}
?>