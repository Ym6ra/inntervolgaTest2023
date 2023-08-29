<div style="display:flex">
<div><h1>Задание №3 CRUD</h2>
<?php 
$text = <<<TXT
<p class="big">
	Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
	<img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
	<span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
	<i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>
TXT;
$val= false;
function cutString(string $str, $val){
    $strWithoutTags = strip_tags($str);
    $words = array_slice(explode(" ", $strWithoutTags), 27);
    $textPreCut = strstr($str, $words[0], true);
    $textAfterCut = strstr($str, $words[0]);
    if (!$val){
    echo $textPreCut;
    echo '...';
    echo '<form method="post">
    <input type="submit" name="button1"
            class="button" value="Читать далее" />
</form>';
    }else{
    echo $textPreCut;
    echo $textAfterCut;
    echo '<form method="post">  
    <input type="submit" name="button2"
            class="button" value="Меньше" />
</form>';
    }
}
if(array_key_exists('button1', $_POST)) {
    cutString($text,!$val);
}
else if(array_key_exists('button2', $_POST)) {
    cutString($text,$val);
}
else if(array_key_exists('button3', $_POST)) {
    cutString($text,$val);
}
?>
<form method="post" id="1">
    <input type="submit" name="button3"
            class="button" value="Показать статью"/>
</form>
</div>
<div>
    <?php $code = highlight_string(file_get_contents(__FILE__));?>
</div></div>