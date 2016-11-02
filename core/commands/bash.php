<?php
//получаем html код страницы http://bash.im/best
$bash_text = file_get_contents("http://bash.im/best");
//объявляем маску парсинга
$pattern = '|<div class="text">(.+?)<\/div>|is'; 
//убираем тег <br>
$bash_text=str_replace("<br>","",$bash_text); 
//вытаскиваем сами цитаты по маске
preg_match_all($pattern, $bash_text, $out); 
//вводное сообщение
sendMessage($chat_id, 'Лучшая цитата с баша');
$ranom = rand(1,8);
//отправляем сообщение c первой цитатой 
sendMessage($chat_id, iconv ('windows-1251', 'utf-8', $out[1][$ranom]),$msgid);
//очищаем массив
unset($out);

?>