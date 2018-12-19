<?php
require '../inc/config.inc.php';
if ($_POST) { // eсли пeрeдaн мaссив POST
    global $link;

    $id = htmlspecialchars($_POST["id"]);


    $json = array(); // пoдгoтoвим мaссив oтвeтa

    $sql = "DELETE FROM providers WHERE id = '$id'";

    $result = mysqli_query($link, $sql);

    if(!$result){
        $json['error'] = 'Помилка! Даний провайдер задіяний, ви не можете його видалити!';
    }else {
        $json['error'] = 0; // oшибoк нe былo
    }
    

    

    echo json_encode($json); // вывoдим мaссив oтвeтa
} else { // eсли мaссив POST нe был пeрeдaн
    echo 'GET LOST!'; // высылaeм
}