<!DOCTYPE html>
<html>
<head>
	<title>管理會員資料</title>
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
	<table align="center" border="1" width="1000">
		<div align="center">
			<a  href="manager.php">回到管理者頁面</a>
		</div>
		<?php
			//呼叫連線
			include 'connect.php';

			//SQL語法
			//mysqli_query只是找到資料的頭
			$sql='select * from member';
			$result=mysqli_query($connect,$sql);
			$num=mysqli_num_rows($result);
			//一個次讀取一個row
			echo "<p align=\"center\">總共有 $num 會員</p>";
			echo '<tr bgcolor="#0000FF">';
				echo "<td align=\"center\">會員編號</td>";
				echo "<td align=\"center\">會員名稱</td>";
				echo "<td align=\"center\">會員帳號</td>";
				echo "<td align=\"center\">會員密碼</td>";				
				echo "<td align=\"center\">會員電話</td>";
				echo "<td align=\"center\">會員住址</td>";
				echo "<td align=\"center\">會員照片</td>";
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
					echo '<td align="center">'.$row[4].'</td>';
					echo '<td align="center">'.$row[5].'</td>';
					echo '<td align="center">'."<img src=./upload/$row[6] height=\"50\">".'</td>';
					echo "<td align=\"center\"><a href=\"update.php?id=$row[0]&name=$row[1]&account=$row[2]&password=$row[3]&tel=$row[4]&address=$row[5]\">更新</a></td>";
					echo "<td align=\"center\"><a href=\"delete.php?delid=$row[0]\">刪除</a></td>";
				echo '</tr>';
			}
		?>
	</table>
</body>
</html>