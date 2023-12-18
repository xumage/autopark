<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Администратор</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<div class="reg-page">

<form class="reg-form" action="../admin/admin.php" method="post">
			<div class="registration-title">Вход в административную панель</div>
			<label>
				Логин
				<input type="text" name="login" id="login" name="login">
			</label>
			<label>
				Пароль
				<input type="password" name="password" id="password" name="password">
			</label>
			<input class="btn btn-primary" type="submit" id="reg-btn" value="Войти">
			
		</form>

	</div>

</body>
</html>