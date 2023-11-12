<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<form action="register.php" method="POST">
			Vorname: <input type="text" name="vorname"><br/>
			Nachname: <input type="text" name="nachname"><br/>
			E-Mail: <input type="email" name="email"><br/>
			Password: <input type="password" name="password"><br/>
			<input type="submit" value="register">
		</form>
		<form action="login.php" method="POST">
			E-mail oder Nachname: <input type="text" name="email_nachname"><br/>
			Password: <input type="password" name="password"><br/>
			<input type="submit" value="log in">
		</form>
	</body>
</html>