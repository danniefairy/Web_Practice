<!DOCTYPE html>
<html>
<head>
	<title>管理留言</title>
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['flag']))
		{
			echo "無此權限<a href=\"index.php\">回到登入頁面</a>";
			die();
		}
	?>
	<table align="center" border="1" width="1300">
		<div align="center">
			<a  href="manager.php">回到管理者頁面</a>
		</div>
		<?php
			//呼叫連線
			include 'connect.php';

			//SQL語法
			//mysqli_query只是找到資料的頭
			//$sql='select * from message';
			//利用join將兩個table關聯起來
			$sql="SELECT m1.id,m2.name,m1.content,m1.mdate from message m1 join member m2 on m1.name=m2.no";
			$result=mysqli_query($connect,$sql);
			$num=mysqli_num_rows($result);
			//一個次讀取一個row
			echo "<p align=\"center\">總共有 $num 筆留言</p>";
			echo '<tr bgcolor="#0000FF">';
				echo "<td align=\"center\">留言編號</td>";
				echo "<td align=\"center\">會員名稱</td>";
				echo "<td align=\"center\">留言內容</td>";
				echo "<td align=\"center\">時間</td>";				
				echo "<td align=\"center\">更新</td>";
				echo "<td align=\"center\">刪除</td>";
			echo '</tr>';
			//mysqli_fetch_array真正抓出資料
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr bgcolor="#008000">';
					echo '<td align="center">'.$row[0].'</td>';
					echo '<td align="center">'.$row[1].'</td>';
					echo '<td align="center">'.$row[2].'</td>';
					echo '<td align="center">'.$row[3].'</td>';
					echo "<td align=\"center\"><a href=\"update_message.php?id=$row[0]&name=$row[1]&content=$row[2]\">更新</a></td>";
					echo "<td align=\"center\"><a href=\"delete_message.php?delid=$row[0]\">刪除</a></td>";
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>