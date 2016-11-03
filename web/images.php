<?php
require 'db.php';
echo "<b>Результат работы бота</b>: ↓ <br><hr>";
ini_set('default_charset', 'UTF-8'); // кодировка
$token = "bot281890161:AAEmjZSV_5_-P9qwwfJCEMcjX66qPdTt6NM";
echo "Получить file_id c фотографий в папке /web/images/";
?>
<form method="post">
	<input type=submit name=submit value=GET_FILE_ID>
	<input type=submit name=refresh value=REFRESH>
	<input type=submit name=delete value=DELETE_IMAGES_FROM_FOLDER>
</form>
<?php
// echo "<hr>";
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
// echp "<hr>";
echo "В папке web/images :<b>".count(scandir('/web/images/'))."</b> файлов";
$dir = "images/";
$exclude = array( ".","..","error_log","_notes" );
if (is_dir($dir)) {
    $files = scandir($dir);
    foreach($files as $file){
        if(!in_array($file,$exclude)){
            echo '<details><img src="' . $dir . $file . '" /></details>';
        }
    }
}
$dir    = '/app/web/images/';
$files1 = scandir($dir);
function Scan($code){
	echo "<pre>";
	print_r($code);
	echo "</pre>";
}
// Scan($files1);
echo "<hr>";
if ($_POST['submit']) {
	foreach ($files1 as $file) {
// echo "result file_id from array<br>";
$bot_url    = "https://api.telegram.org/".$token;
$url        = $bot_url . "/sendPhoto?chat_id=276712063";
$post_fields = array(
	'photo'   => new CURLFile(realpath("/app/web/images/".$file)),
);

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type:multipart/form-data"
));
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
 $output = curl_exec($ch);
 $output = json_decode($output, true);
foreach ($output['result'] as $key => $value) {
	echo $value[0]['file_id'].'<br>';
}
}
}
if ($_POST['refresh']) {
	header("Location: /web/images.php");
}
if ($_POST['delete']) {
if (file_exists('./images'))
foreach (glob('./images/*') as $file)
unlink($file);
header("Location: /web/images.php");
}
echo "<hr>";
?>
<form method=post>
	<label for="login">Login:</label>
	<input type=text name="login"><br>
	<label for=email>Email:</label>
	<input type=text name=email><br>
	<label for="password">Password:</label>
	<input type=password name=password><br>
	<input type=submit name=submit value="reg">
</form>
<?php
echo $_POST['login'];
echo $_POST['password'];
if (isset($_POST['submit'])) {
	if (R::count('users',"WHERE login = ?",array($_POST['login']))) {
		die("Пользоватесь с таким логином уже зарегистрирован");
	}
$user =	R::dispense('users');
$user->login = $_POST['login'];
$user->email = $_POST['email'];
$user->password = $_POST['password'];
$user->reg_date = date('H:i:s',time());
R::store($user);
}else{
	die('Не удалось регнутсо');
}

?>