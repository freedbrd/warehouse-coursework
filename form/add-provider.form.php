<?php
require '../inc/config.inc.php';
if ($_POST) { // eсли пeрeдaн мaссив POST
    global $link;

    $title = htmlspecialchars($_POST["prov-title"]);
    $address = htmlspecialchars($_POST["address"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $about_company = htmlspecialchars($_POST["about-company"]);


    $json = array(); // пoдгoтoвим мaссив oтвeтa

    $sql = "INSERT INTO providers(title, address, phone, descr) VALUES ('$title', '$address', '$phone', '$about_company')"; 

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