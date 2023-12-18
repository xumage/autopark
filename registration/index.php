<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Регистрация</title>
	<link rel="stylesheet" href="../css/style.css">
	<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script defer src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body style="background-color: #00a8e9">
	
	<div class="reg-page">

		<form class="reg-form" action="reg.php" method="post">
			<div class="registration-title">Регистрация</div>
			<label>
				Логин
				<input type="text" name="login" id="login" required>
			</label>
			<label>
				Пароль
				<input type="password" name="password" id="password" required>
			</label>
			<input class="reg-btn" type="submit" id="reg-btn" value="Зарегистрироваться">
			
			<a href="login.php" style="color: #fff; font-size: 25px";>Войти</a>

		</form>

			<div id="mes"></div>

	</div>


	<script>

		$(Document).on('click','#reg-btn',function(e){
			e.preventDefault();
		
			var login=$('#login').val();
			var password=$('#password').val();
				$ajax({
					url: 'reg.php',
					data:{'login':login, 'password':password},
					dataType: "html",
					method: "post",
					success:function(data){
						$('#mes').html(data);
					},
				});
		});
		
	</script>


</body>
</html>