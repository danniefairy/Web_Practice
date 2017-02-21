<!DOCTYPE html>
<html>
<head>
	<title>新增會員資料</title>
</head>
<body>

	<?php
		include 'connect.php';

		//檢查帳號是否重複
		$id=$_POST['id'];
		$search="SELECT * FROM `member` WHERE `account`=\"$id\"";
		$result=mysqli_query($connect,$search);
		//如果有找到的array則表示此帳號不是唯一
		if(mysqli_fetch_array($result))
		{
			echo "帳號名稱 $id 已經被使用，回到<a href=\"newmember.php\">註冊</a>";
			die();
		}

		//新增圖片
		$upload_dir='./upload/';
		if(@$_FILES['gif']['error']==UPLOAD_ERR_OK)
		{
			//建議路徑名稱記得改不然有重複名稱會有問題
			move_uploaded_file($_FILES['gif']['tmp_name'], $upload_dir.$_FILES['gif']['name']);
			//echo '上傳成功';
		}
		/*else
			echo "上傳失敗";*/

		//新增其他資料
		$id=$_POST['id'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$tel=$_POST['tel'];
		$address=$_POST['address'];
		$gif=$_FILES['gif']['name'];
		$sql_insert="INSERT INTO `member` (`name`,`account`,`password`,`tel`,`addr`,`gif`,`memdate`) VALUES(\"$name\",\"$id\",\"$password\",\"$tel\",\"$address\",\"$gif\",sysdate())";
		mysqli_query($connect,$sql_insert);
		header('location:index.php');
	?>

</body>
</html>