<?php

include ('scripts/connect.php');

if(!empty($_REQUEST['id'])) {
    $noteResult = $mysqli->query("SELECT * FROM blog WHERE id = '".$_REQUEST['id']."'");
    if($noteResult->num_rows == 0) {
        header("Location: blog.php");
    } else {
        $note = $noteResult->fetch_assoc();
    }
}

?>

<!doctype html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="создание сайтов, дизайн, web дизайн, логотип, фирменный стиль, реклама, дизайн сайтов, айдентика, разработка сайта, pr, дизайн упаковки, лого, бренд, брендинг, брендбук, название, нейминг, копирайтинг">
    <meta name="description" content="Студия дизайна AIRLAB. Создание и сопровождение сайтов. Разработка фирменного стиля, брендирование, рекламные компании.">

    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>О студии | Студия дизайна AIRLAB</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logo.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/blog.js"></script>

</head>

<body>

<div id="logo">
    <h1 id="logoType" onmouseover="logoShadow()" class="custom">airlab</h1>
</div>

<div id="menu">
    <ul>
        <li><a href="index.php" id="aMain">Главная</a></li>
        <li><a href="works.php" id="aWorksB">Работы</a></li>
        <li><a href="about.php" id="aStudioB">Студия</a></li>
        <li><a href="contacts.php" id="aContactsB">Контакты</a></li>
    </ul>
</div>

<a href="blog.php"><div id="sectionName">Блог</div></a>

<div id="lb5" class="menuBracket">[</div>
<div id="rb5" class="menuBracket">]</div>
<div id="lb7" class="menuBracket">[</div>
<div id="rb7" class="menuBracket">]</div>
<div id="lb8" class="menuBracket">[</div>
<div id="rb8" class="menuBracket">]</div>
<div id="lb9" class="menuBracket">[</div>
<div id="rb9" class="menuBracket">]</div>

<div id="blogContent">
    <?php

    if(empty($_REQUEST['id'])) {
        $blogResult = $mysqli->query("SELECT * FROM blog ORDER BY id");
        while($blog = $blogResult->fetch_assoc()) {
            echo "
            <a href='blog.php?id=".$blog['id']."'>
                <div class='blogNote'>
                    <div class='blogDate'>".substr($blog['date'], 8, 2).".".substr($blog['date'], 5, 2).".".substr($blog['date'], 0, 4)."</div>
                    <div class='blogHeading'><span onmouseover='showDescription(\"1\", \"blogDescription".$blog['id']."\")' onmouseout='showDescription(\"0\", \"blogDescription".$blog['id']."\")'>".$blog['heading']."</span></div>
                    <div class='blogDescription' id='blogDescription".$blog['id']."'>".$blog['description']."</div>
                    <div style='clear: both;'></div>
                </div>
            </a>
        ";
        }
    } else {
        echo "
            <div class='blogNote'>
                <div class='blogDate'>".substr($note['date'], 8, 2).".".substr($note['date'], 5, 2).".".substr($note['date'], 0, 4)."</div>
                    <div class='blogHeading'>".$note['heading']."</div>
            </div>
            <div style='clear: both;'></div>
            <div class='blogNote' style='font-size: 16px;'>".$note['text']."</div>
            <div class='blogNote'>
                <img src='img/system/up.png' id='upArrow' onclick='return up();' title='Вверх!' />
                <div id='backLink'><a href='blog.php'><span id='backLinkText'>Назад к списку постов</span></a></div>
            </div>
        ";
    }

    ?>
    <div style="clear: both;"></div>
</div>

</body>

</html>