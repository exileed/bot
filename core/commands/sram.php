<?php
$rand = rand(1, 170); 
$sram_pars = file_get_contents('http://sramu.net/index_'.$rand.'.html'); 
preg_match_all('/><p>(.*?)<\/p><\/td><\/tr><tr>/', $sram_pars, $sram); 
$i = rand(0, count($sram[1]) - 1); 
$sram = iconv('windows-1251','utf-8',$sram[1][$i]); 
$text = $sram; 
    sendMessage($chat_id,$text,$msgid);
    ?>