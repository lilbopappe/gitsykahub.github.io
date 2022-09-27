<?php 
session_start();
 require("connect.php");?>
<?php
$UserName=$_POST['UserName'];
$UserSurname=$_POST['UserSurname'];
$UserMiddleName=$_POST['UserMiddleName'];
$UserLogin=$_POST['UserLogin'];
$UserPassword=$_POST['UserPassword'];
$UserPassword_Confirm=$_POST['UserPassword_Confirm'];
$UserEmail=$_POST['UserEmail'];
$UserAdmin=$_POST['UserAdmin'];

if (isset($_POST['registration'])) {

    if (!empty($_POST['UserName']) && !empty($_POST['UserSurname']) && !empty($_POST['UserMiddleName']) && !empty($_POST['UserLogin']) && !empty($_POST['UserPassword']) && !empty($_POST['UserPassword_Confirm']) && !empty($_POST['UserEmail'])) {
		if($UserPassword === $UserPassword_Confirm){
	
			$UserPassword = md5($UserPassword);
			$UserPassword_Confirm = md5($UserPassword_Confirm);
			$sql = mysqli_query($connect, "INSERT INTO `users`(`UserName`, `UserSurname`, `UserMiddleName`, `UserLogin`, `UserPassword`, `UserPassword_Confirm`, `UserEmail` , `UserAdmin`) VALUES ('$UserName','$UserSurname','$UserMiddleName','$UserLogin','$UserPassword','$UserPassword_Confirm','$UserEmail' ,'0')"); 
			if($sql){
				$_SESSION['message'] = 'Регистрация прошла успешно!';
				header('Location: ../views/log.php');
			} else{
				$_SESSION['message'] = 'Ошибка при добавлении данных: ' . mysqli_error($link) . '';
			} 
		} else{
			$_SESSION['message'] = 'Пароли не совпадают';
			header('Location: ../views/index.php');
		
		}
	} else{
		$_SESSION['message'] = 'Имеются пустые поля';
		header('Location: ../views/index.php');
	}
} 

?>