<?php

session_start();

if(empty($_SESSION['userID'])) {
    header("Location: index.php");
}

include('../scripts/connect.php');

?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="../css/style.css" />

    <title>Панель администрирования | Студия дизайна AIRLAB</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../js/admin.js"></script>

</head>

<body>

<div id="adminBody">

    <?php
        $briefResult = $mysqli->query("SELECT * FROM brief ORDER BY id DESC");
        while($brief = $briefResult->fetch_assoc()) {
            echo "
                <div class='brief'>
                    <span class='headerFont' id='briefHeader".$brief['id']."' onclick='showBrief(\"".$brief['id']."\")'"; if($brief['viewed'] == '0') {echo " style='color: #d53636;'";} echo ">Бриф № ".$brief['id']." от ".substr($brief['date'], 0, 10).", ".substr($brief['date'], 10)."</span>
                    <br /><br />
                </div>
            ";
        }
    ?>

</div>

</body>

</html>
