<!DOCTYPE html>
<html>
<head>
	<title>DataBase</title>
</head>
<body>

	<?php
		include 'connect_test.php';

		if(isset($_GET['delid'])){
			$id=$_GET['delid'];
			$delete="DELETE FROM `test_table` WHERE `留言編號`=$id ";
			mysqli_query($connect,$delete);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"read_test.php\";</script>";
		}
	?>

</body>
</html>