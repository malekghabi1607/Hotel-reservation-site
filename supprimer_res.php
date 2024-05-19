<?php
    $id = $_GET['id'];

    $tab_info = file("reservations.txt");

    foreach ($tab_info as $indice => $info_resa) 
    {
        $infos = explode("|", $info_resa);

        if ($infos[0] == $id) 
        {
            unset($tab_info[$indice]);
            break;
        }
    }

    file_put_contents("reservations.txt", implode("", $tab_info));

    include 'reservations.php';
?>