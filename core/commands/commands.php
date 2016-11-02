<?php
// Отправляем приветственный текст.
    $answer = array(); // Инициализируем пустой массив
    $answer[] = $first_name." Список моих комманд: [/start],[/game],[/pogoda],[/location],[/bash],[/sram],[/kurs],[/sticker],[/calendar]"; 
    $rand = mt_rand(0, count($answer) - 1);
    sendMessage($chat_id,$answer[$rand],$msgid);
    ?>