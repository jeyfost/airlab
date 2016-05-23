<?php

include('connect.php');

$briefResult = $mysqli->query("SELECT * FROM brief WHERE id = '".$_POST['id']."'");
$brief = $briefResult->fetch_assoc();

if($brief['viewed'] == '0') {
    $mysqli->query("UPDATE brief SET viewed = '1' WHERE id = '".$_POST['id']."'");
}

echo "
    <div id='closeBrief'>
        <span id='backLinkText' onclick='closeBrief()'>Закрыть</span>
    </div>

    <form id='adminBrief'>
        <label for='nameInput'>Ваше название</label>
        <br />
        <label class='labelDescription'>если оно существует</label>
        <br />
        <textarea id='nameInput' name='name' onkeydown='textAreaHeight(this)' readonly>".$brief['name']."</textarea>
        <br /><br />
        <label for='aboutInput'>О компании *</label>
        <br />
        <label class='labelDescription'>расскажите кратко, чем вы занимаетесь, что продаёте или какие услуги оказываете</label>
        <br />
        <textarea id='aboutInput' name='about' onkeydown='textAreaHeight(this)' readonly>".$brief['about']."</textarea>
        <br /><br />
        <label for='advantageInput'>В чём уникальность вашего продутка и (или) компании? *</label>
        <br />
        <label class='labelDescription'>расскажите о ваших преимуществах над конкурентами или преимуществах вашего товара</label>
        <br />
        <textarea id='advantageInput' name='advantage' onkeydown='textAreaHeight(this)' readonly>".$brief['advantage']."</textarea>
        <br /><br />
        <label for='competitorsInput'>Ваши конкуренты</label>
        <br />
        <label class='labelDescription'>прямые конкуренты по рынку, косвенные и компании вашего сегмента (добавьте ссылки на их сайты, если они существуют)</label>
        <br />
        <textarea id='competitorsInput' name='competitors' onkeydown='textAreaHeight(this)' readonly>".$brief['competitors']."</textarea>
        <br /><br />
        <label for='competitorsAdvantageInput'>Чем конкуренты вас превосходят?</label>
        <br />
        <label class='labelDescription'>расскажите о тех моментах в работе, которые, как вам кажется, уступают вашим конкурентам</label>
        <br />
        <textarea id='competitorsAdvantageInput' name='competitorsAdvantage' onkeydown='textAreaHeight(this)' readonly>".$brief['competitorsAdvantage']."</textarea>
        <br /><br />
        <label for='clientInput'>Кто ваш клиент?</label>
        <br />
        <label class='labelDescription'>опишите вашего идеального клиента (кто он, его пол, сколько ему лет, чем занимается, сколько зарабатывает и так далее)</label>
        <br />
        <textarea id='clientInput' name='client' onkeydown='textAreaHeight(this)' readonly>".$brief['client']."</textarea>
        <br /><br />
        <label for='advertiseInput'>Рекламируете ли вы себя?</label>
        <br />
        <label class='labelDescription'>если да, то опишите, каким образом: реклама в интернете, медийная сфера, уличная реклама, печатная продукция или любые иные способы продвижения</label>
        <br />
        <textarea id='advertiseInput' name='advertise' onkeydown='textAreaHeight(this)' readonly>".$brief['advertise']."</textarea>
        <br /><br />
        <label for='serviceInput'>Что мы можем сделать для вас? *</label>
        <br />
        <label class='labelDescription'>например, &laquo;создать сайт&raquo;, &laquo;разработать дизайн-макет сайта&raquo;, &laquo;разработать концепцию бренда&raquo; и так далее. вариантов может быть несколько</label>
        <br />
        <textarea id='serviceInput' name='service' onkeydown='textAreaHeight(this)' readonly>".$brief['service']."</textarea>
        <br /><br />
        <label for='ideaInput'>Какую идею вы хотите донести до клиента?</label>
        <br />
        <label class='labelDescription'>например, рассказать о конкретном преимуществе вашего товара и (или) услуге</label>
        <br />
        <textarea id='ideaInput' name='idea' onkeydown='textAreaHeight(this)' readonly>".$brief['idea']."</textarea>
        <br /><br />
        <label for='helpInput'>Как это поможет вашей компании?</label>
        <br />
        <label class='labelDescription'>что предположительно должно измениться после запуска нашего проекта?</label>
        <br />
        <textarea id='helpInput' name='help' onkeydown='textAreaHeight(this)' readonly>".$brief['help']."</textarea>
        <br /><br />
        <label for='termsInput'>Какими сроками вы располагаете?</label>
        <br />
        <label class='labelDescription'>помните, что сроки влияют на стоимость работы</label>
        <br />
        <textarea id='termsInput' name='terms' onkeydown='textAreaHeight(this)' readonly>".$brief['terms']."</textarea>
        <br /><br />
        <label for='budgetInput'>Каким бюджетом вы располагаете?</label>
        <br />
        <label class='labelDescription'>напишите объективную для вас стоимость планируемых работ</label>
        <br />
        <textarea id='budgetInput' name='budget' onkeydown='textAreaHeight(this)' readonly>".$brief['budget']."</textarea>
        <br /><br />
        <label for='additionsInput'>Дополнительная информация</label>
        <br />
        <label class='labelDescription'>если в анкете нет чего-то важного для вас, расскажите об этом</label>
        <br />
        <textarea id='additionsInput' name='additions' onkeydown='textAreaHeight(this)' readonly>".$brief['additions']."</textarea>
        <br /><br />
        <label for='contactsInput'>Контактная информация *</label>
        <br />
        <label class='labelDescription'>обязательно оставьте свой email и номер телефона, иначе мы не сможем связаться с вами</label>
        <br />
        <textarea id='contactsInput' name='contacts' onkeydown='textAreaHeight(this)' readonly>".$brief['contacts']."</textarea>
        <br /><br />
        <label for='personInput'>Контактное лицо *</label>
        <br />
        <label class='labelDescription'>напишите имя человека, с которым мы будем общаться</label>
        <br />
        <textarea id='personInput' name='person' onkeydown='textAreaHeight(this)' readonly>".$brief['person']."</textarea>
    </form>
";