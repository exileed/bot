<?php
            $keyboard = array(array("[1]","[2]","[3]"));
   $resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true);
   $reply = json_encode($resp);
   $msg = "Ну что ж давай сыграем, коль не боишься, я загадал число от 1 до 3, угадаешь?";
   $url = $GLOBALS[api]."/sendmessage?chat_id=".$chat_id."&text=".$msg."&reply_markup=".$reply;
    file_get_contents($url);
?>