<?php

include('connect.php');

$briefResult = $mysqli->query("SELECT * FROM brief ORDER BY id DESC");
while($brief = $briefResult->fetch_assoc()) {
    echo "
        <div class='brief'>
        <span class='headerFont' id='briefHeader".$brief['id']."' onclick='showBrief(\"".$brief['id']."\")'"; if($brief['viewed'] == '0') {echo " style='color: #d53636;'";} echo ">Бриф № ".$brief['id']." от ".substr($brief['date'], 0, 10).", ".substr($brief['date'], 10)."</span>
        <br /><br />
        </div>
    ";
}