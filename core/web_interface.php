<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
</head>
<body>
<form method="post">
	<label for="login">login:</label>
	<input type="text" name="login">
	<label for="password">pwd:</label>
	<input type="text" name="password">
	<input type=submit value="auth"></form>
</body>
</html>
<?
echo "<hr>web loaded";
$login = "admin";
$password = "roflmao";
echo "<hr>";
echo "Вы ввели: ";
echo "login: ".$_POST['login'];
echo " | password: ".$_POST['password'];
echo "<hr>";
if ($_POST['login'] == $login && $_POST['password'] == $password ) { //авторизация
echo '<h1><font color=green><b>Авторизация успешна</b></font></h1>';
echo '<form method="post">';
echo '<label for="tel">tel.number</label>';
echo '<input type="text" name="tel">';
echo '<input type="submit" value="take">';
echo '</form>';
echo $_POST['tel'];
echo "<hr>";
echo "<b>  Логи бота</b>: ↓ <br><hr>";
}
?>