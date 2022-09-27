<?php

include "connect.php";

$sql = mysqli_query ($connect, "SELECT * FROM category");

echo '<select name="CategoryName">';

while ($result = mysqli_fetch_array($sql)){

echo ' <option value="'.$result['CategoryID'].'">'.$result['CategoryName'].'</option>';

}
echo '</select>';
?>