<?php 
session_start();
 require("connect.php");
 require("login.php");
 ?>
 
<?php

    $DemandID = $_POST['DemandID'];
    $sql = mysqli_query($connect, "DELETE FROM `demands` WHERE `DemandID` = '$DemandID' "); 
    if($sql){

        header('Location: ../views/demand.php');
    }


?>  