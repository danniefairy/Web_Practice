<!DOCTYPE html>
<html>
<head>
	<title>修改留言</title>
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
	<form method="post" action="update_message.php" enctype="multipart/form-data">
		留言編號:
			<input type="text" readonly name="id" maxlength="20" size="20" value="<?php echo $_GET['id']; ?>">
		<br>
		會員名稱:
			<input type="text" readonly name="name" maxlength="20" size="20" value="<?php echo $_GET['name']; ?>">
		<br>
		留言:<br>
			<textarea name="content" rows="10" cols="60"><?php echo $_GET['content']; ?>
			</textarea> 
		<br>
		<input type="submit" name="submit">
	</form>
	<p><a href="message.php">回到主畫面</a></p>
	</div>

	<?php
		
		include 'connect.php';

		

		if(isset($_POST['id'])){
			$id=$_POST['id'];
			$content=$_POST['content'];
			//如果傳送字串需要加上\" \" 
			$update="UPDATE `message` SET `content`=\"$content\"WHERE `id`=$id";
			mysqli_query($connect,$update);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"message.php\";</script>";
			
		}
	?>

</body>
</html>