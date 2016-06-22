<?php

include('connect.php');

$name = trim(htmlspecialchars($_POST['name']));
$about = trim(htmlspecialchars($_POST['about']));
$advantage = trim(htmlspecialchars($_POST['advantage']));
$competitors = trim(htmlspecialchars($_POST['competitors']));
$competitorsAdvantage = trim(htmlspecialchars($_POST['competitorsAdvantage']));
$client = trim(htmlspecialchars($_POST['client']));
$advertise = trim(htmlspecialchars($_POST['advertise']));
$service = trim(htmlspecialchars($_POST['service']));
$idea = trim(htmlspecialchars($_POST['idea']));
$help = trim(htmlspecialchars($_POST['help']));
$terms = trim(htmlspecialchars($_POST['terms']));
$budget = trim(htmlspecialchars($_POST['budget']));
$additions = trim(htmlspecialchars($_POST['additions']));
$contacts = trim(htmlspecialchars($_POST['contacts']));
$person = trim(htmlspecialchars($_POST['person']));

if($mysqli->query("INSERT INTO brief (name, about, advantage, competitors, competitorsAdvantage, client, advertise, service, idea, help, terms, budget, additions, contacts, person, date) VALUES ('".$name."', '".$about."', '".$advantage."', '".$competitors."', '".$competitorsAdvantage."', '".$client."', '".$advertise."', '".$service."', '".$idea."', '".$help."', '".$terms."', '".$budget."', '".$additions."', '".$contacts."', '".$person."', '".date('Y-m-d H:i:s')."')")) {
    $from = "Сайт airlab";
    $subject = "Новый бриф";
    $text = "Поступил новый бриф.";
    $to = "foster_andrew@tut.by";
    $email = "no-reply@airlab.by";

    $hash = md5(date('r', time()));

    $headers = "From: ".$from."\nReply-To: ".$email."\nMIME-Version: 1.0";
    $headers .= "\nContent-Type: multipart/mixed; boundary = \"PHP-mixed-".$hash."\"\n\n";

    $message = "--PHP-mixed-".$hash."\n";
    $message .= "Content-Type: text/html; charset=\"windows-1251\"\n";
    $message .= "Content-Transfer-Encoding: 8bit\n\n";
    $message .= $text."\n";
    $message .= "--PHP-mixed-".$hash."\n";

    if(@mail($to, $subject, $message, $headers)) {
        echo "a";
    } else {
        echo "b";
    }
} else {
    echo "b";
}