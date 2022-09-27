<?php 
    session_start();
    require("../php/demnds.php");
	require("../php/connect.php");
	
	
?>
<!DOCTYPE html>
<html lang="en">
<?php require("particles/head.php"); ?>
<body>
<?php require("particles/admin/admin_header.php"); ?>

<?php
     

	 $sql = "SELECT * FROM demands
	 JOIN users ON demands.DemandUserID = users.UserID
	JOIN category ON demands.DemandCategoryID = category.CategoryID
	 JOIN stat ON demands.DemandStatusID = stat.StatusID";
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
					 echo "<p> Статус:" . $row["StatusName"]  ."</p>";
					 echo "</div";
					 
					 echo "<p> Имя:" . $row["UserName"]  ."</p>";
					 echo "<form action=\"../php/update_status.php\" method=\"post\"> ";
					 echo "<input type=\"hidden\" name=\"DemandID\" class=\"contacts-form-field\" value = " . $row["DemandID"] . " required>";
					 include("../php/status.php");
					 echo "<button type =\"submit\" name =\"update_status\">Изменить статус</button>";
					 echo "</form>";
		  }
		  echo "</div>";
	 } else{
		 echo "Ошибка: " . $connect->error;
	 }
	 
	 echo "</section>";
 ?>


    <!---->
</body>
</html>