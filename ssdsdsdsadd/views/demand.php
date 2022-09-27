<?php 
    session_start();
	require("../php/connect.php");
	require("../php/login.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include("particles/head.php"); ?>
<body>
<?php include("particles/user/user_header.php"); ?>
<?php include("particles/welcome_section.php"); ?>

<?php
     
	$sql = "SELECT * FROM demands
	JOIN users ON demands.DemandUserID = users.UserID
	JOIN category ON demands.DemandCategoryID = category.CategoryID 
	WHERE `DemandUserID` = " . $_SESSION['user']['UserID'] ." ";
	 if($result = $connect->query($sql)){
		 $rowsCount = $result->num_rows; // количество полученных строк
		 echo "<p>Получено объектов: $rowsCount</p>";
		 echo "<section class=\"articles articles-text \">";

		 echo "<div class=\"container\">";
		 echo"<p class=\"title\">Заявки</p>";
		 echo "<div class=\" textcols-item\">";
		 foreach($result as $row){
			 
			 
					 echo "<p class =\"NewsTitle\"> Заголовок:". $row["DemandTitle"]  ."</p>"; 
					 //echo "<img class=\"image\" src=\". $row['NewsIMG']\. "/>"
					 echo "<img class=\"image\" src=\"data:image/jpg;base64," . base64_encode($row['DemandIMG']) ."\" />";

					 //echo "<img src=" . $row["img"] . " class=\"out-img\" width=\"200px\" height=\"200px \" </img>";
					 echo "<p> Описание:". $row["DemandDescription"]  ."</p>";
					 echo "<p> Категория:" . $row["CategoryName"]  ."</p>";
					 echo "</div";
					 echo "<p> Автор:" . $row["UserName"]  ."</p>";
					 echo "<form action=\"../php/remove_demand.php\" method=\"post\"> ";
					 echo "<input type=\"hidden\" name=\"DemandID\" class=\"contacts-form-field\" value = " . $row["DemandID"] . " required>";
					 echo "<button type =\"submit\" name =\"update_status\">Удалить заявку</button>";
					 echo "</form>";
					 echo "<form action=\"update demand_page.php\" method=\"post\"> ";
					 echo "<button type =\"submit\" name =\"update_demand\">Изменить заявку</button>";
					 echo "</form>";
		  }
		  echo "</div>";
		 $result->free();
	 } else{
		 echo "Ошибка: " . $conn->error;
	 }
	 
	 echo "</section>";
 ?>


    <!---->
</body>
</html>