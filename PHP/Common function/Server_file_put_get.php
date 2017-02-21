<?php
	/*
	*此為將資料寫入到server的程式碼
	*@表示不在網頁上顯示錯誤訊息
	*若不想要原本檔案被覆蓋可以在後面加上FILE_APPEND
	*換行 \r\n ,空白 \n (必須在雙引號間)
	*/
	if(@$num=file_put_contents("server_file_put.txt", "換行 \r\n",FILE_APPEND))
		echo "共寫入 $num 位元";
	else
		echo "寫入失敗";

	echo "<br>";
	/*
	*此為讀取server端的資料
	*讀取路徑為目前位置的相對路徑
	*/
	if(@$content=file_get_contents("server_file_put.txt"))
	{
		echo "以下為server_file_put.txt內容<hr>";
		echo $content;
	}		
	else
		echo "讀取失敗";
?>