<?php
	include 'connect.php';

	$no=$_POST['no'];
	$message=$_POST['message'];
	$insert="INSERT INTO `message` (`name`,`content`,`mdate`) VALUES(\"$no\",\"$message\",sysdate())";
	$result=mysqli_query($connect,$insert);
	header('location:message.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>新增留言</title>
</head>
<body>

</body>
</html>