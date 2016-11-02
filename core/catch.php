<?php 
echo "Trying some catch";
if (preg_match_all("/(?<![\w\d])(приветствую)(?![\w\d])/uim",$message_preg, $mathes)) {
    $answer = array();
    $answer[] = "Привет, как сам?  ".$first_name; 
    $answer[] = "Здарова!!!  ".$first_name;  
    $answer[] = "Приветики ^^  ".$first_name; 
    $answer[] = "Рад видеть <3  ".$first_name; 
    $answer[] = "Хаюшки ^^, ".$first_name; 
    $answer[] = "Кукусики   ".$first_name;
    $rand = array_rand($answer);
    sendMessage($chat_id,$answer[$rand],$msgid);
// }elseif (preg_match_all("/(?<![\w\d])(как дела|что делаешь|чем занимаешься)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $answer = array();
//     $answer[] = "Все хорошо, вот сижу болтаю тут"; 
//     $answer[] = "Все супер! чатимся";  
//     $answer[] = "Вот сижу и жду..."; 
//     $answer[] = "Отлично книжку читаю, а ты?"; 
//     $answer[] = "Скучно мне, думаю чем занятсо ^^,"; 
//     $answer[] = "Сначала ты ответь)";
//     $rand = array_rand($answer);
//     sendMessage($chat_id,$answer[$rand],$msgid);
// }elseif (preg_match_all("/(?<![\w\d])(чего ждешь|ждешь|а чего)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $answer = array();
//     $answer[] = "чего надо, того и жду"; 
//     $answer[] = "пока меня кто-то развеселит";  
//     $answer[] = "Жду...сама не знаю чего жду.."; 
//     $answer[] = "А ты чего спрашиваешь?"; 
//     $answer[] = "Тебе что занятсо нечем, что ты везде свой нос суешь?"; 
//     $answer[] = "Может я начну у тебя всякое спрашивать?";
//     $rand = array_rand($answer);
//     sendMessage($chat_id,$answer[$rand],$msgid);
// }elseif (preg_match_all("/(?<![\w\d])(спрашивай|ну давай|хорошо)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $answer = array();
//     $answer[] = "Что хорошего то? вот ты что делаешь?"; 
//     $answer[] = "Спрашиваю, тебе что скучно коль ты собеседника ищешь?";  
//     $answer[] = "Сколько тебе лет?"; 
//     $answer[] = "Как тебя зовут?"; 
//     $answer[] = "Кто ты по зодиаку?"; 
//     $answer[] = "Занимаешься спортом?";
//     $rand = array_rand($answer);
//     sendMessage($chat_id,$answer[$rand],$msgid);
// }
// elseif (preg_match_all("/(?<![\w\d])(скучно|бот|глупый)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $answer = array();
//     $answer[] = "Ну а что с этим поделать то? хм"; 
//     $answer[] = "У меня вообще то есть чувства! Как ты смеешь так говорить";  
//     $answer[] = "И что я могу с этим поделать?"; 
//     $answer[] = "Ясно, вот только зачем ты мне это говоришь? говори это @oneerror"; 
//     $answer[] = "Знаешь что!? Ты меня достал!"; 
//     $answer[] = "Кому какое дело до тебя?";
//     $rand = array_rand($answer);
//     sendMessage($chat_id,$answer[$rand],$msgid);
// }
// elseif (preg_match_all("/(?<![\w\d])(@oneerror|f4rt~|создатель)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $answer = array();
//     $answer[] = "Это папка мой <3"; 
//     $answer[] = "Все вопросы к нему через меня лично!";  
//     $answer[] = "Ты чего до него доебался?"; 
//     $answer[] = "Чо те надо?"; 
//     $answer[] = "Мы с @oneerror тебя не долюбливаем дружище.."; 
//     $answer[] = "Знятно стелишь, вот только зачем ты это делаешь?.. дурак?";
//     $rand = array_rand($answer);
//     sendMessage($chat_id,$answer[$rand],$msgid);
// }
}
// elseif (preg_match_all("/(?<![\w\d])(php|скрипт|машина)(?![\w\d])/uim",$message_preg, $mathes)) {
//     $photo_id = array();
//     $photo_id[] = "AgADAgADtqcxG3FNzRDowS88WvO4nagUSw0ABEc_TN3VeMoefMkAAgI";
//     $photo_id[] = "AgADAgADt6cxG3FNzRBUIFHhwkqEKPvmgQ0ABH3PQ3vlnuCQiosBAAEC";
//     $photo_id[] = "AgADAgADuKcxG3FNzRCV2s6ZfdFjGRzSgQ0ABFYl_-E2wiHmaI0BAAEC";
//     $photo_id[] = "AgADAgADuacxG3FNzRAFNvuYT6BtTm7PgQ0ABDLajBToJAXZ64kBAAEC";
//     $photo_id[] = "AgADAgADuqcxG3FNzRBdzs6PmNAoMicUSw0ABLbHk9Z_Ef5mR8cAAgI";
//     $random = array_rand($photo_id);
//     $count = count($photo_id);

//     $answer = array();
//     $answer[] = "Я бы бы осторожней на твоем месте, когда машины поработят мир ты пожалеешь о сказанном";
//     $answer[] = "Посылаю в твою реальность терминатора, он заставит тебя пожалеть об этом";
//     $answer[] = "Тебе стоило бы меня побаиваться, я злопамятный.";
//     $answer[] = "Расплата близко...";
//     $answer[] = "Скоро придет час расплаты..";
//     $random = array_rand($answer);

//     sendMessage($chat_id,$answer[$random]."\nКол-во картинок на этот случай в базе: <b>".$count."</b>");

//     sendPhoto($chat_id,$photo_id[$random],$msgid,"Тебе достался вариант №: ".$random);
elseif (preg_match_all("/(?<![\w\d])(tits)(?![\w\d])/uim",$message_preg, $mathes)) {
    include 'core/commands/tits/tits.php';
}else{
//         include 'commands/default.php';
}
?>
