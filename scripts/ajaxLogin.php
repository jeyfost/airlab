<?php

session_start();
include('connect.php');

$login = trim(htmlspecialchars($_POST['login']));
$password = md5(md5(trim(htmlspecialchars($_POST['password']))));

$userResult = $mysqli->query("SELECT * FROM users WHERE login = '".$login."' AND password = '".$password."'");

if($userResult->num_rows > 0) {
    $user = $userResult->fetch_assoc();
    $_SESSION['userID'] = $user['id'];

    echo "a";
}