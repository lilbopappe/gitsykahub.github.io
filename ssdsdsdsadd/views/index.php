<?php
session_start();
?>
<?php require("../php/connect.php");?>
<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<body>

    <?php include("particles/guest/guest_header.php"); ?>
    <?php include("particles/welcome_section.php"); ?>

    <section class="contacts">
			<div class="container">
				<h2 class="title">Регистрация</h2>
				<form class="contacts-form" enctype="multipart/form-data" action="../php/registration.php" method="post" >
                    
					<label >Имя</label>
					<input type="hidden" name="UserAdmin" class="contacts-form-field" value = "<?= $_SESSION['user']['UserAdmin'] ?>" required>
					<input type="text" name="UserName" placeholder="Имя" class="contacts-form-field">
					<label >Фамилия</label>
                    <input type="text" name="UserSurname" placeholder="Фамилия" class="contacts-form-field">
					<label >Отчество</label>
                    <input type="text" name="UserMiddleName" placeholder="Отчество" class="contacts-form-field">
					<label >Логин</label>
					<input type="text" name="UserLogin" placeholder="Логин" class="contacts-form-field">
					<label >Пароль</label>
					<input type="password" name="UserPassword" placeholder="Password" class="contacts-form-field">
                    <label >Подтвердите пароль</label>
					<input type="password" name="UserPassword_Confirm" placeholder="Password" class="contacts-form-field">
					<label >E-mail</label>
					<input type="email" name="UserEmail" placeholder="Email" class="contacts-form-field">
                    <input type="checkbox"  required style="width:10px;" />
                    <label>Согласие на обработку  данных</label>
					<button class="contacts-form-button" type ="submit" name ="registration">Зарегистрироваться</button>
                    <?php 
                    if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);    
                    ?>
                    <p class="contacts-form-field">Уже зарегистрированы? <a href= "log.php">Войдите в аккаунт</a></p>
				</form>
			</div>
		</section>
        
    <!---->
</body>
</html>