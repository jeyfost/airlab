<?php

session_start();

include('../scripts/connect.php');

if(!empty($_SESSION['userID'])) {
    header("Location: admin.php");
}

?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css" />

    <title>Вход в панель администрирования | Студия дизайна AIRLAB</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../js/admin.js"></script>

</head>

<body>

<div id="enter">
    <form id="enterForm" method="post" autocomplete="off">
        <label for="loginInput">Логин</label>
        <br />
        <input type="text" id="loginInput" name="loginInput" autocomplete="off" />
        <br /><br />
        <label for="passwordInput">Пароль</label>
        <br />
        <input type="password" id="passwordInput" name="passwordInput" autocomplete="off" />
        <br /><br />
        <center><span id='enterSubmit' class='briefTextStyle'>Войти</span></center>
    </form>
</div>

</body>

</html>