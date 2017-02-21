<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>

	<form method="post" action="insert_test.php">
		選擇留言者編號:<br>
		  <select name="id">
			  <?php
			  	include 'connect_test.php';
			  	$find_id='SELECT DISTINCT `留言者編號`  FROM `test_table`';
			  	$result=mysqli_query($connect,$find_id);
			  	while($commenter=mysqli_fetch_array($result))
			  		echo "<option value=$commenter[0]>$commenter[0]</option>";
			  ?>
		  </select>
		 <br>
		輸入留言:<br>
		<textarea name="comment" rows="5" cols="20"></textarea><br>
		<input type="submit" name="submit">
	</form>

	<?php
		if(isset($_POST['id'])and isset($_POST['comment'])){
			$comment=$_POST['comment'];
			$id=$_POST['id'];
			//如果傳送字串需要加上\" \"
			$insert="INSERT INTO `test_table` (`留言`,`留言者編號`) VALUES (\"$comment\",$id)";
			mysqli_query($connect,$insert);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"read_test.php\";</script>";
		}
	?>

</body>
</html>