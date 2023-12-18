<?php
require "connect.php";

$login = $_POST["login"];
$password = $_POST["password"];

$main="SELECT login FROM users WHERE login='$login'";
$row=$pdo->query($main);
$user=$row->fetch(PDO::FETCH_ASSOC);

if(!empty($user["login"])){
	echo "Такой login уже существует";
}
else{
$sql="INSERT INTO users(login,password) VALUES(?,?)";
$query=$pdo->prepare($sql);
$query->execute([$login,$password]);
echo "Администратор зарегистрирован";
}