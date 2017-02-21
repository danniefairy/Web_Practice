<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>

	<form method="post" action="update_test.php">
		留言編號:<br>
		<input name="id" value="<?php echo $_GET['id']; ?>" >
		 <br>
		輸入新留言者編號:<br>
		  <input onkeyup="value=value.replace(/[^\d]/g,'')" name="newid">
		 <br>
		輸入新留言:<br>
		<textarea name="comment" rows="5" cols="20"></textarea><br>
		<input type="submit" name="submit">
	</form>

	<?php
		
		include 'connect_test.php';

		if(isset($_POST['newid'])and isset($_POST['comment'])){
			$comment=$_POST['comment'];
			$newid=$_POST['newid'];
			$id=$_POST['id'];
			//如果傳送字串需要加上\" \" 
			$update="UPDATE `test_table` SET `留言`=\"$comment\",`留言者編號`= $newid WHERE `留言編號`=$id";
			mysqli_query($connect,$update);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"read_test.php\";</script>";
			
		}
	?>

</body>
</html>