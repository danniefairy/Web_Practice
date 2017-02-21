<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>

	<form action="Upload_file_get.php" method="post" enctype="multipart/form-data">
		請輸入要上傳的檔案:<br/>
		<input type="file" name="UpFile1"><br/>
		<input type="file" name="UpFile2"><br/>
		<input type="submit" value="送出">		
	</form>

	<?php
	//利用GET刪除檔案
	if(isset($_GET['delete']))
		unlink("./upload/".$_GET['delete']);

	//利用GET重新命名
	if(isset($_GET['new']))
		rename($_GET['old'], $_GET['new']);
	

	/*
	*讀取資料夾目錄
	*/
	$dirlist=scandir('./upload/');
	$i=count($dirlist);
	//因為前兩個為.、..所以真正檔名從矩陣2開始
	for($k=2;$k<$i;$k++){
		$name=$dirlist[$k];
		echo "<br>";
		echo "<a href=./upload/$name>$name</a>";
		//使用get來改變id
		echo "&nbsp&nbsp<input type =\"button\" onclick=\"location.href='?delete=$name'\" value=\"刪除\"></input>";
		//更新名稱
		echo "&nbsp&nbsp<input type =\"button\" onclick=\"location.href='Upload_file_rename.php?rename=./upload/$name'\" value=\"重新命名\"></input>";
	
	}

	?>

</body>
</html>