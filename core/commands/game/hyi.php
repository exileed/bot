<?php
            $keyboard = array(array("[Я был не прав и иду нахуй]","[Я был не прав и иду нахуй]","[Я был не прав и иду нахуй]"));
   $resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true);
   $reply = json_encode($resp);
   $msg = "Даже не знаю что тут добавить";
   $url = $GLOBALS[api]."/sendmessage?chat_id=".$chat_id."&text=".$msg."&reply_markup=".$reply;
    file_get_contents($url);
?>