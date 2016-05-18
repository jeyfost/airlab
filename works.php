<?php
include ('scripts/connect.php');
?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="создание сайтов, дизайн, web дизайн, логотип, фирменный стиль, реклама, дизайн сайтов, айдентика, разработка сайта, pr, дизайн упаковки, лого, бренд, брендинг, брендбук, название, нейминг, копирайтинг">
    <meta name="description" content="Студия дизайна AIRLAB. Создание и сопровождение сайтов. Разработка фирменного стиля, брендирование, рекламные компании.">

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Работы | Студия дизайна AIRLAB</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logo.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/works.js"></script>

</head>

<body>

<div id="logo">
    <h1 id="logoType" onmouseover="logoShadow()" class="custom">airlab</h1>
</div>

<div id="menu">
    <ul>
        <li><a href="index.php" id="aMain">Главная</a></li>
        <li><a href="about.php" id="aStudio">Студия</a></li>
        <li><a href="contacts.php" id="aContacts">Контакты</a></li>
        <li><a href="blog.php" id="aBlog">Блог</a></li>
    </ul>
</div>

<a href="works.php"><div id="sectionName">Работы</div></a>

<div id="lb5" class="menuBracket">[</div>
<div id="rb5" class="menuBracket">]</div>
<div id="lb2" class="menuBracket">[</div>
<div id="rb2" class="menuBracket">]</div>
<div id="lb3" class="menuBracket">[</div>
<div id="rb3" class="menuBracket">]</div>
<div id="lb4" class="menuBracket">[</div>
<div id="rb4" class="menuBracket">]</div>

<div id="works">
    <?php

    if(empty($_REQUEST['id'])) {
        $worksResult = $mysqli->query("SELECT * FROM works ORDER BY id DESC");
        while($works = $worksResult->fetch_assoc()) {
            $typeResult = $mysqli->query("SELECT name FROM types WHERE id = '".$works['type']."'");
            $type = $typeResult->fetch_array(MYSQLI_NUM);

            echo "
            <a href='works.php?id=".$works['id']."'>
                <div class='work' id='workBlock".$works['id']."'>
                    <img src='img/works/previews/".$works['preview']."' id='workIMG".$works['id']."' style='width: 100%; height: 100%;' />
                    <div class='workOverlay' id='workOverlay".$works['id']."' onmouseover='overlay(\"1\", \"workOverlay".$works['id']."\", \"workOverlayText".$works['id']."\", \"workName".$works['id']."\", \"workType".$works['id']."\")' onmouseout='overlay(\"0\", \"workOverlay".$works['id']."\", \"workOverlayText".$works['id']."\", \"workName".$works['id']."\", \"workType".$works['id']."\")'>
                        <div class='workOverlayName' id='workOverlayText".$works['id']."'><span id='workName".$works['id']."' style='opacity: 0;'>".$works['name']."</span><br /><span id='workType".$works['id']."' style='font-size: 24px; font-weight: normal; opacity: 0;'>".$type[0]."</span></div>
                    </div>
                </div>
            </a>
        ";
        }

        echo "</div>";
    } else {
        $workResult = $mysqli->query("SELECT * FROM works WHERE id = '".htmlspecialchars($_REQUEST['id'])."'");
        if($workResult->num_rows == 0) {
            echo "<center><span style='font-size: 20px;'>К сожалению, такого проекта ещё не существует, но однажды мы обязательно его сделаем!</span><br /><br /><span style='font-size:  30px; color: #d53636;'>;)</span></center></div>";
        } else {
            $work = $workResult->fetch_assoc();

            echo "
                </div>

                <div id='workAbsolute'>
                    <div id='workBigContainer'>
                        <img src='img/works/big/".$work['big']."' id='workBigPhoto' />
                    </div>
                    <div style='clear: both;'></div>
                    <div id='workContent'>
                        <div style='position: relative; float: left; width: 50%; text-align: left;'>
                            <br />
                            <span class='headerFont'>".$work['header']."</span>
                            <br /><br />
                            <span style='font-style: italic; color: #5f5f5f;'>Задача: ".$work['goal']."</span>
                            <br /><br />
                            <span>".$work['description']."</span>
                        </div>
                        <div style='position: relative; float: right; width: 50%; text-align: right;'>
            ";

            if(!empty($work['address'])) {
                echo "<a href='http://".$work['address']."'><span class='headerFont'>".$work['address']."</span></a>";
            }

            echo "
                        </div>
                        <div style='clear: both;'></div>
                        ".$work['content']."
                    </div>
                    <div style='clear: both;'></div>
                    <div style='width: 100%;'>
                        <img src='img/system/up.png' id='upArrow' onclick='return up();' title='Вверх!' />
                    </div>
                </div>
            ";
        }
    }

    ?>
<div style="clear: both;"></div>

</body>

</html>
