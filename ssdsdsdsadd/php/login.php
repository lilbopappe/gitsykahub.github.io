<?php
session_start(); 
require_once("connect.php"); ?>	 
<?php
	$UserAdmin=$_POST['UserAdmin'];
	$UserLogin=$_POST['UserLogin'];
	$UserPassword=md5($_POST['UserPassword']);

	if (isset($_POST['log_in'])) {

		if (!empty($_POST['UserLogin']) && !empty($_POST['UserPassword'])) {
			$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `UserLogin` = '$UserLogin' AND `UserPassword` = '$UserPassword'");
		if (mysqli_num_rows($check_user) > 0){

			$user = mysqli_fetch_assoc($check_user);
	
			$_SESSION['user'] = [
				"UserID" => $user['UserID'],
				"UserName" => $user['UserName'],
				"UserSurname" => $user['UserSurname'],
				"UserMiddleName" => $user['UserMiddleName'],
				"UserLogin" => $user['UserLogin'],
				"UserEmail" => $user['UserEmail'],
				"UserAdmin" => $user['UserAdmin'],
			];
			if($user['UserAdmin'] == '1'){
				header('Location: ../views/admin_page.php');
			}
			if($user['UserAdmin'] == '0'){
				header('Location: ../views/Auth.php');
			}
	

		} else{
			$_SESSION['message'] = 'Имеются пустые поля';
			header('Location: ../views/log.php');
		}
	} 
		
	}
?>