<?php
echo "answers loadedd   <br>";
switch($message) {
//     //START OF THE GAME
//         case '[1]':
//             sendMessage($chat_id,"Не правильно",$msgid);
//     break;

//         case '[2]':
//             sendMessage($chat_id,"Угадал :happy:",$msgid);
//     break;
//         case '[3]':
//             sendMessage($chat_id,"Не правильно",$msgid);
//     break;
//         case '/game':
//             include 'commands/game/game_start.php';
//     break;
//     break;
//         case '[Хочу сыграть]':
//             include 'commands/game/game2.php';
//     break;
//         case '[Не хочу играть]':
//             include 'commands/game/game3.php';

//          case '[Я был не прав и иду нахуй]':
//             sendMessage($chat_id,"Хорошо что ты выбрал именно этот вариант. Иди нахуй",$msgid);
//     break;
//     break;
//         case '[закрыть меню]':
//             sendMessage($chat_id,"Закрываем меню");
//     break;
//         case '[Ты хуй]':
//             include 'commands/game/hyi.php';
//     break;
//     /// END OF THE GAME

//     //FIRST MESSAGE WHEN USER SAY /START
//         case '/start':
//             include 'commands/start/on_start.php';

//     // END OF THE /START
            
//         case '/help':
//             include 'commands/help.php'; 
//     break;
//         case '/location':
//             include 'commands/location.php'; 
//     break;
        case '/commands':
            include 'commands/commands.php';
    break;
        case '/bash':
            include 'commands/bash.php';
    break;
//         case '/sticker':
//             include 'commands/sticker.php';
//     break;
//         case '/kurs':
//             include 'commands/kurs.php';
//     break;
        case '/calendar':
            include 'commands/calendar.php';
    break;
        case '/sram':
            include 'commands/sram.php';
    break;
//         case '/pogoda':
//             include 'commands/pogoda.php';
//     break;
/*
* LE KOSTIL FIX CATCH WORDS in GROUP
* in tet-a-tet msg bot find command like /help
* in GROUP bot find command like /help@phphelperbot
*/
//         case '/game@phphelperbot':
//             include 'commands/game/game_start.php';
//     break;
//         case '/pogoda@phphelperbot':
//             include 'commands/pogoda.php';
//     break;
//         case '/help@phphelperbot':
//             include 'commands/help.php'; 
//     break;
//         case '/location@phphelperbot':
//             include 'commands/location.php'; 
//     break;
        case '/commands@phphelperbot':
            include 'commands/commands.php';
    break;
        case '/bash@phphelperbot':
            include 'commands/bash.php';
    break;
//         case '/sticker@phphelperbot':
//             include 'commands/sticker.php';
//     break;
//         case '/kurs@phphelperbot':
//             include 'commands/kurs.php';
//     break;
        case '/calendar@phphelperbot':
            include 'commands/calendar.php';
    break;
        case '/sram@phphelperbot':
            include 'commands/sram.php';
    break;
// case '/tits@phphelperbot':
//             include 'core/commands/tits/tits.php';
//     break;
  default:
            //include 'commands/default.php';
    break;
}
?>
