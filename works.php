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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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

<div id="sectionName">Работы</div>

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

    $worksResult = $mysqli->query("SELECT * FROM works ORDER BY id DESC");
    while($works = $worksResult->fetch_assoc()) {
        echo "
            <div class='work' id='workBlock".$works['id']."'><img src='img/works/previews/".$works['preview']."' id='workIMG".$works['id']."' style='width: 100%;' onload='resizeWork(\"workBlock".$works['id']."\", \"workIMG".$works['id']."\")' /></div>
        ";
    }

    ?>
</div>
<div style="clear: both;"></div>

</body>

</html>
