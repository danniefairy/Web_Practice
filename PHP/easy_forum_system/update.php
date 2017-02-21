<!DOCTYPE html>
<html>
<head>
	<title>修改會員資料</title>
</head>
<body>
	<?php
		session_start();
		if(!isset($_SESSION['account']))
		{
			echo "無此權限<a href=\"index.php\">回到登入頁面</a>";
			die();
		}
	?>
	<div align="center">
	<form method="post" action="update.php" enctype="multipart/form-data">
		&nbsp&nbsp會員編號:&nbsp&nbsp
		<input name="no" readonly value="<?php echo $_GET['id']; ?>" >
		 <br>
		新登入帳號:
			<input type="text" name="id" maxlength="20" size="20" value="<?php echo $_GET['account']; ?>">
		<br>
		新登入密碼:
			<input type="password" name="password" maxlength="20" size="20" value="<?php echo $_GET['password']; ?>">
		<br>
		新會員姓名:
			<input type="text" name="name" maxlength="20" size="20" value="<?php echo $_GET['name']; ?>">
		<br>
		新會員電話:
			<input type="text" name="tel" maxlength="20" size="20" value="<?php echo $_GET['tel']; ?>">
		<br>
		新會員住址:
			<input type="text" name="address" maxlength="20" size="20" value="<?php echo $_GET['address']; ?>">
		<br>
		新會員照片:
			<input type="file" name="gif">
		<br>
		<input type="submit" name="submit">
	</form>
	</div>

	<?php
		
		include 'connect.php';

		

		if(isset($_POST['id'])){

			//新增圖片
			$upload_dir='./upload/';
			if(@$_FILES['gif']['error']==UPLOAD_ERR_OK)
			{
				//建議路徑名稱記得改不然有重複名稱會有問題
				move_uploaded_file($_FILES['gif']['tmp_name'], $upload_dir.$_FILES['gif']['name']);
				//echo '上傳成功';
			}
			/*==else
				echo "上傳失敗";*/

			$no=$_POST['no'];
			$id=$_POST['id'];
			$password=$_POST['password'];
			$name=$_POST['name'];
			$tel=$_POST['tel'];
			$address=$_POST['address'];
			$gif=$_FILES['gif']['name'];
			//如果傳送字串需要加上\" \" 
			$update="UPDATE `member` SET `name`=\"$name\",`account`=\"$id\",`password`=\"$password\" ,`tel`=\"$tel\",`addr`=\"$address\",`gif`=\"$gif\"WHERE `no`=$no";
			mysqli_query($connect,$update);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"managemember.php\";</script>";
		}
	?>
	<p align="center"><a href="message.php">回到主畫面</a></p>
</body>
</html>