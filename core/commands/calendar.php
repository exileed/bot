<?php
$rss = simplexml_load_file("http://www.calend.ru/img/export/calend.rss");
 
foreach ($rss->channel->item as $item) {
    echo iconv("UTF-8", "Windows-1251", $item->title)."<br />";
}
    sendMessage($chat_id,$item->title,$msgid);
?>