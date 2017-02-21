<?php

	/*
	*檢查帳號密碼
	*/
	session_start();
	if(isset($_GET['account']))
	{
		//session account password確保使用者再回到此頁面時也會是對的
		$_SESSION['account']=$_GET['account'];
		$_SESSION['password']=$_GET['password'];
	}	
	include 'connect.php';
	@$account=$_SESSION['account'];
	@$password=$_SESSION['password'];
	$sql="SELECT * FROM `member` WHERE `account`=\"$account\" and `password`=\"$password\"";
	$result=mysqli_query($connect,$sql);

	if(!$row=mysqli_fetch_array($result)){
		echo '登入失敗<br>';
		echo "<a href=index.php>回到登入畫面</a>";
		//die()不會往下執行
		die();
	}

	if($account=='root')
	{
		//加入session判斷是否經由此驗證登入
		session_start();
		$_SESSION['flag']=1;
		header('location:manager.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>留言</title>
</head>
<body>

	<div align="center">
	<?php
		echo "你好 $row[1] 請留言!";
	?>
	<form  method="post" action="addmessage.php">
		留言內容:<br>
		<textarea name="message" rows="10" cols="60"></textarea>
		<br>
		<!--使用hidden讓網頁間傳遞不用輸入的資料-->
		<input type="hidden"  name="no" value="<?php echo $row[0];?>">
		<input type="submit" value="公布">
		<input type="reset" value="重置">
	</form>
	</div>

	<table align="center" border="1" width="1300">
		<?php
			//呼叫連線
			include 'connect.php';

			//SQL語法
			//mysqli_query只是找到資料的頭
			//$sql='select * from message';
			//利用join將兩個table關聯起來
			$sql="SELECT m1.id,m2.name,m1.content,m1.mdate from message m1 join member m2 on m1.name=m2.no where m2.account=\"$account\"";
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
	<p align="center"><a href="index.php">登出</a></p>
</body>
</html>