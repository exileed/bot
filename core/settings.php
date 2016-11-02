<?
echo "Settings loadedd  <br>";
// include 'Botan.php'; //disabled
error_reporting(E_ALL);
date_default_timezone_set('Europe/Moscow');
$access_token = '281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM';
$api = 'https://api.telegram.org/bot' . $access_token;
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$msgid = $output['message']['message_id'];
$date = $output['message']['date'];
$message = $output['message']['text'];
$message_preg = $output['message']['text'];
$sticker = $output['message']['sticker'];
$username =$output['message']['chat']['username'];
$botusername = '@phphelperbot';
$botusername2 = 'phphelperbot';
$emoji = array(
  'preload' => json_decode('"\uD83D\uDE03"'), // Улыбочка.
  'weather' => array(
    'clear' => json_decode('"\u2600"'), // Солнце.
    'clouds' => json_decode('"\u2601"'), // Облака.
    'rain' => json_decode('"\u2614"'), // Дождь.
    'snow' => json_decode('"\u2744"'), // Снег.
  ),
);
?>