<?php
// Отправляем приветственный текст.
    $curr = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5'));
        $resp = 'В ПриватБанке сейчас так: ' . $curr[0]->ccy . ' ' . $curr[0]->buy . ', ' . $curr[1]->ccy . ' ' . $curr[1]->buy . ', ' . $curr[2]->ccy . ' ' . $curr[2]->buy . ', ';
    sendMessage($chat_id,$resp,$msgid);
    ?>