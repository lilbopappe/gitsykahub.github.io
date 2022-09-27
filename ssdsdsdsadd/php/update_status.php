<?php 
session_start();
 require("connect.php");
 require("login.php");
 ?>
 
<?php

$DemandID = $_POST['DemandID'];
$DemandStatusID = $_POST['StatusName'];

if (isset($_POST['update_status'])) {

    $sql = mysqli_query($connect, "UPDATE `demands` SET `DemandStatusID`='$DemandStatusID' WHERE `DemandID` = '$DemandID' "); 
    if($sql){
        
        header('Location: ../views/admin_page.php');
    }
} 

?>  