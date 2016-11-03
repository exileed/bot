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
require 'db.php';
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

echo '<a href="images.php">GET_FILE_ID</a>';
?>
