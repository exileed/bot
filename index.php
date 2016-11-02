<?php
////////////////////////////////////
require 'core/functions.php';     //
require 'core/settings.php';      //
require 'core/answers.php';       //
require 'core/catch.php';         //
////////////////////////////////////


/*
* По дефолту используется parse_mode=HTML, изменить на Markdown можно в core/functions.php
* Все настройки и переменные бота заключены в файл core/settings.php
* База ответов бота находится по адресу core/answers.php - формата switch case (используется в *      основном для вызова комманд (commands папка))
* Файл core/catch.php содержит множественное вхождение слов, на которые отвечает бот формата        * preg_match_all
* Web_interface используется для логирование поступающих запросов к боту и вывода на экран.
* libs/Botan.php выключен по умолчанию в settings.php
* libs/simple_html_dom.php в данных момент не используется.
*/



/*
* Trying catch sticker and puts some log into the file
* $file = 'logs/log.txt'
* Log Example:
* name:username:date:sticker
* f4rt~:@oneerror:05:42:46:file_id
*/
//  if ($sticker) {
// 	sendMessage($chat_id,"ID message: ".$msgid. " Nickname : ".$first_name."username: ".$username." date:".date('H:i:s',$date)." Я вижу ты отправил стикер... <b>не надо</b> так ",$msgid);
// 	$file = 'logs/log.txt';
// // Открываем файл для получения существующего содержимого
// $current = file_get_contents($file);
// // Добавляем нового человека в файл
// $current .= $first_name.$firstname2.$date."\n";
// // Пишем содержимое обратно в файл
// file_put_contents($file, $current);
// }

echo "<hr><b> All files loaded correctly, SemsGood !!! </b></hr><br>";
echo '<img src="https://static-cdn.jtvnw.net/emoticons/v1/64138/3.0">';
echo '<a href="/web">Web form</a>'
?>