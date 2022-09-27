<?php 
session_start();
 require("connect.php");
 require("login.php");
 ?>
 
<?php

$DemandUserID = $_POST['DemandUserID'];
$DemandTitle=$_POST['DemandTitle'];
$DemandDescription=$_POST['DemandDescription'];
$DemandCategoryID = $_POST['CategoryName'];
$DemandIMG = addslashes(file_get_contents($_FILES['DemandIMG']['tmp_name']));
if (isset($_POST['create_dem'])) {

    $sql = mysqli_query($connect, "INSERT INTO `demands`(`DemandUserID`,`DemandTitle`, `DemandDescription`, `DemandIMG`, `DemandCategoryID`) VALUES ('$DemandUserID','$DemandTitle', '$DemandDescription', '$DemandIMG' ,'$DemandCategoryID')"); 
    if($sql){
        $_SESSION['message'] = 'Заявка создана прошла успешно!';
        header('Location: ../views/demand.php');
    } else{
        
    } 
} 

?>  