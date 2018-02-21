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
    <link rel="stylesheet" type="text/css" href="js/lightview/css/lightview/lightview.css" />

    <title>Работы | Студия дизайна AIRLAB</title>

    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/lightview/js/lightview/lightview.js"></script>
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
                        <br /><br />
                        <div style='width: 100%; text-align: center; margin-top: 30px;'>
                            <span style='font-size: 18px; color: #5f5f5f;'>Понравилась работа? Есть желание заказать проект?</span>
                            <br /><br />
                            <a id='briefText' class='briefTextStyle' href='#brief'>Заполнить бриф</a>
                            <br /><br />
                            <span id='successBrief'>Спасибо за отправку брифа! Мы скоро вам ответим.</span>
                            <br />
                            <span id='cancelBrief'>Нет, не хочу заполнять</span>
                        </div>
                        <div id='brief'>
                            <form id='briefForm' method='post' action='scripts/sendBrief.php'>
                                <label for='nameInput'>Ваше название</label>
                                <br />
                                <label class='labelDescription'>если оно существует</label>
                                <br />
                                <textarea id='nameInput' name='name' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='aboutInput'>О компании *</label>
                                <br />
                                <label class='labelDescription'>расскажите кратко, чем вы занимаетесь, что продаёте или какие услуги оказываете</label>
                                <br />
                                <textarea id='aboutInput' name='about' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='advantageInput'>В чём уникальность вашего продутка и (или) компании? *</label>
                                <br />
                                <label class='labelDescription'>расскажите о ваших преимуществах над конкурентами или преимуществах вашего товара</label>
                                <br />
                                <textarea id='advantageInput' name='advantage' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='competitorsInput'>Ваши конкуренты</label>
                                <br />
                                <label class='labelDescription'>прямые конкуренты по рынку, косвенные и компании вашего сегмента (добавьте ссылки на их сайты, если они существуют)</label>
                                <br />
                                <textarea id='competitorsInput' name='competitors' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='competitorsAdvantageInput'>Чем конкуренты вас превосходят?</label>
                                <br />
                                <label class='labelDescription'>расскажите о тех моментах в работе, которые, как вам кажется, уступают вашим конкурентам</label>
                                <br />
                                <textarea id='competitorsAdvantageInput' name='competitorsAdvantage' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='clientInput'>Кто ваш клиент?</label>
                                <br />
                                <label class='labelDescription'>опишите вашего идеального клиента (кто он, его пол, сколько ему лет, чем занимается, сколько зарабатывает и так далее)</label>
                                <br />
                                <textarea id='clientInput' name='client' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='advertiseInput'>Рекламируете ли вы себя?</label>
                                <br />
                                <label class='labelDescription'>если да, то опишите, каким образом: реклама в интернете, медийная сфера, уличная реклама, печатная продукция или любые иные способы продвижения</label>
                                <br />
                                <textarea id='advertiseInput' name='advertise' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='serviceInput'>Что мы можем сделать для вас? *</label>
                                <br />
                                <label class='labelDescription'>например, &laquo;создать сайт&raquo;, &laquo;разработать дизайн-макет сайта&raquo;, &laquo;разработать концепцию бренда&raquo; и так далее. вариантов может быть несколько</label>
                                <br />
                                <textarea id='serviceInput' name='service' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='ideaInput'>Какую идею вы хотите донести до клиента?</label>
                                <br />
                                <label class='labelDescription'>например, рассказать о конкретном преимуществе вашего товара и (или) услуге</label>
                                <br />
                                <textarea id='ideaInput' name='idea' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='helpInput'>Как это поможет вашей компании?</label>
                                <br />
                                <label class='labelDescription'>что предположительно должно измениться после запуска нашего проекта?</label>
                                <br />
                                <textarea id='helpInput' name='help' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='termsInput'>Какими сроками вы располагаете?</label>
                                <br />
                                <label class='labelDescription'>помните, что сроки влияют на стоимость работы</label>
                                <br />
                                <textarea id='termsInput' name='terms' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='budgetInput'>Каким бюджетом вы располагаете?</label>
                                <br />
                                <label class='labelDescription'>напишите объективную для вас стоимость планируемых работ</label>
                                <br />
                                <textarea id='budgetInput' name='budget' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='additionsInput'>Дополнительная информация</label>
                                <br />
                                <label class='labelDescription'>если в анкете нет чего-то важного для вас, расскажите об этом</label>
                                <br />
                                <textarea id='additionsInput' name='additions' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='contactsInput'>Контактная информация *</label>
                                <br />
                                <label class='labelDescription'>обязательно оставьте свой email и номер телефона, иначе мы не сможем связаться с вами</label>
                                <br />
                                <textarea id='contactsInput' name='contacts' onkeydown='textAreaHeight(this)'></textarea>
                                <br /><br />
                                <label for='personInput'>Контактное лицо *</label>
                                <br />
                                <label class='labelDescription'>напишите имя человека, с которым мы будем общаться</label>
                                <br />
                                <textarea id='personInput' name='person' onkeydown='textAreaHeight(this)'></textarea>
                                <center>
                                <br /><br />
                                <label class='labelDescription'>Обратите внимание, что поля, помеченные символом &laquo;*&raquo; обязательны к заполнению.</label>
                                <br /><br />
                                <label>И, напоследок, не забывайте <a href='img/system/work.jpg' class='lightview' data-lightview-options='skin: \"light\"'><span id='backLinkText'>об этой прописной истине</span></a> ;)</label>
                                <br /><br />
                                <span id='briefError'></span>
                                <br />
                                <div style='width: 100%; height: 40px;'></div>
                                <span id='briefSend' class='briefTextStyle'>Отправить бриф</span>
                                </center>
                            </form>
                        </div>
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