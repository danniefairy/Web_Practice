<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

	<table border="1">
		<?php
			//呼叫連線
			include 'connect_test.php';

			//SQL語法
			//mysqli_query只是找到資料的頭
			$sql='select * from test_table';
			$result=mysqli_query($connect,$sql);
			$num=mysqli_num_rows($result);
			//一個次讀取一個row
			echo '<tr>';
				echo "<td>留言編號($num 筆資料)</td>";
				echo '<td align="center">留言</td>';
				echo '<td>留言者編號</td>';
			echo '</tr>';
			//mysqli_fetch_array真正抓出資料
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr>';
					echo '<td align="center">'.$row[0].'</td>';
					echo '<td>'.$row[1].'</td>';
					echo '<td align="center">'.$row[2].'</td>';
					echo "<td><a href=\"update_test.php?id=$row[0]\">更新</a></td>";
					echo "<td><a href=\"delete_test.php?delid=$row[0]\">刪除</a></td>";
				echo '</tr>';
			}
		?>
	</table>
	<input type ="button" onclick="location.href='search_test.php'" value="搜尋留言編號">
	<br>
	<input type ="button" onclick="location.href='insert_test.php'" value="新增留言">

</body>
</html>