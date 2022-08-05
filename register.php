<?php 
session_start();
if($_SESSION['user']){
	header('Location: profile.php');
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
	
<!-- форма регистрации  -->

<form action="vendor/signup.php" method="post" enctype="multipart/form-data" > 
	<label>ФИО</label>
	<input type="text" name="full_name" placeholder= "Введите свое полное имя">
    <label>Логин</label>
	<input type="text" name="login" placeholder= "Введите свой логин">
    <label>email</label>
	<input type="email" name="email" placeholder= "Введите адрес своей почты">
    <label>Изображение профиля</label>
	<input type="file" name="avatar">
	<label>Пароль</label>
	<input type="password" name="password" placeholder= "Введите пароль">
    <label>Подтвердите пароль</label>
    <input type="password" name="password_confirm" placeholder= "Подтвердите пароль">
	<button type="submit">Войти</button>
	<p>У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a></p>
        <?php
         if($_SESSION['message']){
           echo '<P class="msg"> '. $_SESSION['message'] .' </p>';
         }
         unset($_SESSION['message']);
         ?>
</form>


</body>
</html>