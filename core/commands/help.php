<?php
// Отправляем приветственный текст.
    $answer = array(); // Инициализируем пустой массив
    $answer[] = "Простенький автоответчик и отличный помощник: \n Список комманд: - [/commands] \n Бот <b>OpenSource</b> и постоянно обновляется, присылайте свои Pull Request <a href='https://github.com/kefzce/phptelegrambot'>GitHub</a> \n Author - @oneerror "; 
    $rand = mt_rand(0, count($answer) - 1);
    sendMessage($chat_id,$answer[$rand],$msgid);
?>