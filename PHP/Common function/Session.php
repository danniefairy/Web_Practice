<?php
	/*
	*session是存在server端
	*session不同瀏覽器視窗會用不同session，即使同樣變數名稱也會是不一樣的
	*新session只要指定後就可以在下面馬上echo的到，因為是在server端
	*若browser開太久session仍會自動清掉(預設 1440sec 在 php.ini)
	*/

	/*
	//開啟session
	session_start();

	//session id
	echo session_id()."<br>";
	//自己指定session，在session_start()前
	//session_id('指定的session_id()')

	//session一般輸入
	$_SESSION['last']="Chen";
	$_SESSION['first']="Kuan Ting";
	
	//session陣列輸入
	$_SESSION['names']= array('Kobe','Wade');
	foreach ($_SESSION['names'] as $key => $value) {
		echo $value."<br>";
	}

	//把指定變數從記憶體拿掉
	//unset($_SESSION['first']);
	//刪除所有session
	//session_unset();
	*/

	session_start();

	$_SESSION['flag']='T';

	$count=1;
	if(!isset($_COOKIE['counter'])){
		setcookie("counter",1,time()+365*24*3600);//365(天)*24(小時)*3600(秒)
	}
	else{
		if(!$_SESSION['flag']=='T'){
			$count=$_COOKIE['counter']+1;
			setcookie("counter",$count,time()+365*24*3600);
		}		
	}
	echo "這是第 $count 次進入本站";
?>