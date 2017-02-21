<form name="input" method="post" action="File_save_button.php">
	留言:
	<input type="text" name="comment" maxlength="200" size="200">
	<br>
	<input type="submit" value="新增留言">
	<input type="reset" value="重寫留言">
	<!--使用超連結來讓GET的參數可以接的到-->
	<a href="File_save_button.php?del=1">清空留言</a>
</form>

<?php
	//寫入
	if(@!$f=fopen("comment.txt", 'a')){
		die('fail to open the file');
	}

	if(isset($_POST['comment']))
		if(@fputs($f,$_POST['comment']."\r\n"))
			echo '寫入成功';
		else
			echo '寫入失敗';
	fclose($f);

	echo '<br>';

	//讀取
	if(@!$f=fopen("comment.txt", 'a+'))
		die('fail to open the file');
	else
		echo '成功開啟檔案';

	echo '<br>';

	$linenum=1;
	while($line=fgets($f)){
		echo "$linenum. $line<br>";
		$linenum=$linenum+1;
	}
	fclose($f);

	//接收到GET['del']=0
	if(isset($_GET['del'])and$_GET['del'])
		file_put_contents("comment.txt", "");

?>