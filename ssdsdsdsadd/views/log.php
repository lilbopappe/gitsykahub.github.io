<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<body>
    

    <?php include("particles/guest/guest_header.php"); ?>
    <?php include("particles/welcome_section.php"); ?>
    <h2 class="title">Авторизация</h2>
    <form class="contacts-form" action="../php/login.php" method ="post">
        <label >Логин</label>
        <input type="hidden" name="UserAdmin" class="contacts-form-field" value = "<?= $_SESSION['user']['UserAdmin'] ?>" required>
		<input type="text" name="UserLogin" placeholder="Логин" class="contacts-form-field">
		<label >Пароль</label>
		<input type="password" name="UserPassword" placeholder="Password" class="contacts-form-field"></input>
		<button class="contacts-form-button" type ="submit" name ="log_in">Войти</button>
        <?php 
                    if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message'] .'</p>';
                    }
                    unset($_SESSION['message']);    
                    
        ?>
	</form>
    <!---->
</body>
</html>