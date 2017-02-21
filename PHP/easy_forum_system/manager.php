<!DOCTYPE html>
<html>
<head>
	<title>管理者頁面</title>
</head>
<body>
	<?php
		session_start();
		if(isset($_SESSION['flag']))
		{
	?>
	<a href="managemessage.php">管理留言</a>
	<a href="managemember.php">管理會員</a>
	<a href="index.php">回到登入頁面</a>
	<?php
		}
		else
			echo "無此權限<a href=\"index.php\">回到登入頁面</a>";
	?>

</body>
</html>