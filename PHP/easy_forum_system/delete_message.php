<!DOCTYPE html>
<html>
<head>
	<title>刪除</title>
</head>
<body>

	<?php
		include 'connect.php';

		if(isset($_GET['delid'])){
			$id=$_GET['delid'];
			$delete="DELETE FROM `message` WHERE `id`=$id";
			mysqli_query($connect,$delete);
			//可用下面方法將畫面導向所需頁面
			echo "<script>document.location.href=\"message.php\";</script>";
		}
	?>

</body>
</html>