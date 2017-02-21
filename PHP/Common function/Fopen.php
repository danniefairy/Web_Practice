<?php
	/*
	*開啟模式:
	*	r只可讀
	*	r+可讀可寫
	*	w只可寫
	*	w+可讀可寫
	*	a可附加資料(寫入)到檔案後方(當檔案不在會開啟新檔案)
	*	a+可附加資料(寫入)到檔案後方，也可讀取內容(當檔案不在會開啟新檔案)
	*
	*寫入方式:
	*	fputs($f,data)
	*讀取方式:
	*	fgets($f)一次讀一行
	*	fgets($f,10)一次只讀10個位元
	*	fgetc($f)一次只讀一個位元
	*/

	if(!@$f=fopen("fopen.txt", "a")){
		die('無法開啟檔案');
	}

	echo '檔案代碼'.$f;

	if(@fputs($f,"\r\nfopen test!")){
		echo "成功寫入";
	}
	else
		echo "寫入失敗";

	//關閉檔案
	fclose($f);

	/*
	*如果要接著讀取需要重新fopen使之回到第一行
	*/
	if(@!$f=fopen("fopen.txt", "a+"))
		die("無法開啟檔案");
	else
		echo"<br>開啟檔案";
	echo '<br>讀出檔案:<br>';

	$linenum=1;
	while($line=fgets($f)){
		echo $linenum." ".$line."<br>";
		$linenum=$linenum+1;
	}
	fclose($f);

	echo "<br>";

	/*
	*file讀整個文件
	*輸出為陣列
	*每一行為一個陣列內的值
	*/
	$file=file('fopen.txt');
	//echo count($file);
	foreach ($file as $key => $value) {
		echo ($key+1).". $value<br>";
	}
?>