<?php
	/*
	*用絕對路徑或是用'.'代表目前目錄,'..'代表上一層目錄
	*/
	$dirname=".";
	$dirlist=scandir($dirname);
	foreach ($dirlist as $key => $value) {
		echo "第 $key 筆資料為 $value <br>";
	}
	/*
	*複製
	*@copy('test.txt','new.txt');
	*重新命名
	*@rename('test.txt','newname.txt');
	*移動(更名)
	*@move('C:\test.txt','D:\data\new.txt');
	*刪除
	*@unlink('D:\data\new.txt');
	*@unlink('test.txt');
	*/

?>