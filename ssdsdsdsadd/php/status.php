<?php

include "connect.php";
require("../php/login.php");
$sql = mysqli_query ($connect, "SELECT * FROM stat");

echo '<select name="StatusName">';

while ($result = mysqli_fetch_array($sql)){

echo ' <option value="'.$result['StatusID'].'">'.$result['StatusName'].'</option>';

}
echo '</select>';
?>