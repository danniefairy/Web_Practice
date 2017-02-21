<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>

	<form method="post" action="search_test.php">
		輸入留言編號:<br>
		<input onkeyup="value=value.replace(/[^\d]/g,'')" name="id">
		 <br>
		 <input type="submit" name="submit">
	</form>
	<table border="1">
		<?php
			include 'connect_test.php';

			echo '<tr>';
				echo '<td>留言編號</td>';
				echo '<td align="center">留言</td>';
				echo '<td>留言者編號</td>';
			echo '</tr>';

			if(isset($_POST['id'])){
				$id=$_POST['id'];
				if($id!="")
				{
					$search="SELECT * FROM `test_table` WHERE `留言編號`=$id";
					$result=mysqli_query($connect,$search);
					while($row=mysqli_fetch_array($result))
					{
						echo '<tr>';
							echo '<td>'.$row[0].'</td>';
							echo '<td>'.$row[1].'</td>';
							echo '<td>'.$row[2].'</td>';
						echo '</tr>';
					}
				}
				
			}
		?>
	</table>
	<input type ="button" onclick="location.href='read_test.php'" value="回到所有留言列表">
</body>
</html>