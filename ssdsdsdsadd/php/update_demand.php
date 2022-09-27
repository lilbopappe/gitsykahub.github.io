<?php 
session_start();
 require("connect.php");
 require("login.php");
 ?>
 
<?php

$DemandID = $_POST['DemandID'];
$DemandTitle=$_POST['DemandTitle'];
$DemandDescription=$_POST['DemandDescription'];
$DemandCategoryID = $_POST['CategoryName'];
$DemandIMG = addslashes(file_get_contents($_FILES['DemandIMG']['tmp_name']));
if (isset($_POST['update_demand'])) {

    $sql = mysqli_query($connect, "UPDATE `demands` SET `DemandTitle`='$DemandTitle', `DemandDescription`='$DemandDescription', `DemandCategoryID`='$DemandCategoryID', `DemandIMG`='$DemandIMG' WHERE `DemandID` = '$DemandID' "); 
    if($sql){
        
        header('Location: ../views/demand.php');
    }
} 

?>  