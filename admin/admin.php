<?php require_once '../registration/connect.php';?>
<?php session_start();?>
<?php
$login=$_POST["login"];
$password=$_POST["password"];

$sql = $pdo->prepare("SELECT id,login FROM users WHERE login=:login AND password=:password");
$sql->execute(array('login' =>$login, 'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
print_r($array);
if($array["id"]>0){
	$_SESSION['login']=$array["login"];
	header('Location:/admin.php');
}
else{
	header('Location:/login.php');
}