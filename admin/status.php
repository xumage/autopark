<?php session_start();?>
<?php require_once '../registration/connect.php';?>




<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Администраторская панель</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	
	
	<div class="reg-page">
		
		<div style="font-size: 40px; color: #fff; text-align: center; padding-top: 50px;">
			Редактирование статуса
		</div>

		<a style="display: block; text-align: center; margin-top: 50px; color: #fff; font-size: 25px;" href="/admin/status.php">Изменить статус</a>

		<?php
		$sql=$pdo->prepare("SELECT * FROM e200");
		$sql->execute();
		$res=$sql->fetch(PDO::FETCH_OBJ);
		?>

		<form action="/admin/status.php" method="post">

		<select value="<?php echo $res->availability ?>" name="availability">
			<option value="Есть в наличии">Есть в наличии</option>
			<option value="Нет в наличии">Нет в наличии</option>
		</select>


			<!-- <input type="text" name="availability" value="<?#php echo $res->availability ?>"> -->
			<input type="submit" value="Сохранить">
		</form>

		<?php
		$availability=$_POST["availability"];
		$row="UPDATE e200 SET availability=:availability";
		$query=$pdo->prepare($row);
		$query->execute(["availability"=>$availability]);
		?>

</div>
	
</body>
</html>