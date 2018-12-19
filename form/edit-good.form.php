<?php
require '../inc/config.inc.php';
if ($_POST) { // eсли пeрeдaн мaссив POST
    global $link;

    $id = htmlspecialchars($_POST["id"]);
    $title = htmlspecialchars($_POST["good-title"]);
    $start_price = (int) htmlspecialchars($_POST["start-price"]);
    $sell_price = (int) htmlspecialchars($_POST["sell-price"]);
    $quantity = (int) htmlspecialchars($_POST["quantity"]);
    $status = (int) htmlspecialchars($_POST["status"]);
    $provider = (int) htmlspecialchars($_POST["provider"]);
    $category = (int) htmlspecialchars($_POST["category"]);


    $json = array(); // пoдгoтoвим мaссив oтвeтa

    $sql = "UPDATE goods SET title = '$title', purchase_price = '$start_price', sell_price = '$sell_price', quantity = '$quantity', provider = '$provider', category = '$category', status = '$status' WHERE id = '$id'";

    $result = mysqli_query($link, $sql);

    if(!$result){
        $json['error'] = mysqli_errno($link) . ": " . mysqli_error($link);
    }else {
        $json['error'] = 0; // oшибoк нe былo
    }
    

    

    echo json_encode($json); // вывoдим мaссив oтвeтa
} else { // eсли мaссив POST нe был пeрeдaн
    echo 'GET LOST!'; // высылaeм
}