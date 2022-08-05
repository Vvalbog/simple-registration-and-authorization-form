<?php 
session_start();
if(!$_SESSION['user']){
	header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация и авторизация</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
<!-- профиль  -->

<form> 
	<img src="<?= $_SESSION['user']['avatar']?>" width="200" style="text-align: center" alt="">
	<h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
	<a href="#"> <?= $_SESSION['user']['email']?></a>
	<a href="vendor/logout.php" class="logout">Выход</a>
</form>


</body>
</html>