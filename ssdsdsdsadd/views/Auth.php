
<?php 
    session_start();
    require("../php/login.php");
?>

<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<body>
<?php include("particles/user/user_header.php"); ?>
<?php include("particles/welcome_section.php"); ?>

    <section class="welcome" >
    <div class="">
    <p class="welcome-text"> Имя: <?= $_SESSION['user']['UserAdmin'] ?></p>
        <p class="welcome-text"> Имя: <?= $_SESSION['user']['UserName'] ?></p>
        <p class="welcome-text">Фамилия: <?= $_SESSION['user']['UserSurname'] ?></p>
        <p class="welcome-text">Логин: <?= $_SESSION['user']['UserLogin'] ?></p>
        <p class="welcome-text">Почта: <?= $_SESSION['user']['UserEmail'] ?></p>
        
        </div>
    </section>
    <section class ="container">
    <?php
    if(isset($_SESSION['message'])){
        echo '<p class="msg">' . $_SESSION['message'] .'</p>';
        }
        unset($_SESSION['message']);    
        ?>
    </section>
    <!---->
</body>

<?php
        if($UserAdmin === 1){
            header('Location: ../views/admin_page.php');
        }
        ?>
</html>