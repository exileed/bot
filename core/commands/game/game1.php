<?php
            $keyboard = array(array("[Хочу сыграть]","[Не хочу играть]","[Ты хуй]"));
   $resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true);
   $reply = json_encode($resp);
   $msg = "Хочешь сыграть со мной в игру?";
   $url = $GLOBALS[api]."/sendmessage?chat_id=".$chat_id."&text=".$msg."&reply_markup=".$reply;
    file_get_contents($url);
?>