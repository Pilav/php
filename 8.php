<?php
	if (isset($_POST['login']) and isset($_POST['password'])){
		$login = $_POST['login'];
		$password = $_POST['password'];
		$db = mysql_connect("localhost", "root", "root");
		if (!$db) exit(mysql_error());
		if (!mysql_select_db("Account", $db)) exit(mysql_error());
		$query = mysql_query("SELECT password FROM accounts WHERE login='$login'");
		if (!$query) exit(mysql_error());
		list($hash) = mysql_fetch_row($query);
		if ($hash == md5($password)) echo "<h1>Добро пожаловать!</h1>";
		else echo "<h1>Неверный пароль!</h1>";
	}
?>
<html>
<!--
Ctrl+Alt+T вызов терминала 

mysql -h localhost -u root -p

CREATE DATABASE Account;

USE Account;

CREATE TABLE accounts (number TINYINT NOT NULL auto_increment, name TEXT NOT NULL, login TEXT NOT NULL, password TEXT NOT NULL, PRIMARY KEY (number));

Ctrl+Alt+T вызов еще одной копии терминала

echo -n "dujle12vtczwtd" | md5sum

Скопировать md5-хэш в запрос ниже

INSERT INTO accounts (name, login, password) VALUES ('Vasya', 'root', '63e3666fdde0e24d028033fc0e8c5f4f');

SELECT * FROM accounts;

quit
-->
	<body bgcolor="#999999">
		<form method="POST" action="8.php">
			<p>Логин:&nbsp;<input type="text" name="login" size="10"></input></p>			
			<p>Пароль:&nbsp;<input type="text" name="password" size="10"></input></p>
			<p><input type="submit" value="Submit"></input></p>
		</form>
	</body>
</html>
