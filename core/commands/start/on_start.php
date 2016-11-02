<?php
            $keyboard = array(array("/help","/commands","[закрыть меню]"));
   $resp = array("keyboard" => $keyboard,"resize_keyboard" => true,"one_time_keyboard" => true);
   $reply = json_encode($resp);
   $msg = "Привет! я рад тебя видеть <3";
   $url = $GLOBALS[api]."/sendmessage?chat_id=".$chat_id."&text=".$msg."&reply_markup=".$reply;
    file_get_contents($url);
?>