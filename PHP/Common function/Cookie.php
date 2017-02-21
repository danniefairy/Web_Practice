<?php
	/*
	*cookie是存在client
	*cookie可用來做為跨網頁分享變數值
	*可用來記錄同一電腦進入同一網頁次數的計數器
	*只可用在和setcookie同一目錄或是子目錄才可共用同一個name的cookie
	*新cookie的值(setcookie之後)要重新連線才抓的到
	*Cookie也可以用陣列"counter[0]"、"counter[1]"...
	*同瀏覽器的cookie是共用的，因為貯存位置相同
	*/

	/*
	*登陸次數記錄
	*/
	/*
	$count=1;
	if(!isset($_COOKIE['counter'])){
		setcookie("counter",1,time()+365*24*3600);//365(天)*24(小時)*3600(秒)
	}
	else{
		$count=$_COOKIE['counter']+1;
		setcookie("counter",$count,time()+365*24*3600);
	}
	echo "這是第 $count 次進入本站";
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>OX_Game</title>
</head>
<body>
	<form name="oxgame" method="post" action="Cookie.php">

		<?php
			if(!isset($_COOKIE["oxgame"][0][0]))
			{
				setcookie("oxgame[0][0]","-",time()+24*3600);
				setcookie("oxgame[0][1]","-",time()+24*3600);
				setcookie("oxgame[0][2]","-",time()+24*3600);
				setcookie("oxgame[1][0]","-",time()+24*3600);
				setcookie("oxgame[1][1]","-",time()+24*3600);
				setcookie("oxgame[1][2]","-",time()+24*3600);
				setcookie("oxgame[2][0]","-",time()+24*3600);
				setcookie("oxgame[2][1]","-",time()+24*3600);
				setcookie("oxgame[2][2]","-",time()+24*3600);
			}
			else{
				if(isset($_POST["P00"]))
					setcookie("oxgame[0][0]",$_POST["P00"],time()+24*3600);
				if(isset($_POST["P01"]))
					setcookie("oxgame[0][1]",$_POST["P01"],time()+24*3600);
				if(isset($_POST["P02"]))
					setcookie("oxgame[0][2]",$_POST["P02"],time()+24*3600);

				if(isset($_POST["P10"]))
					setcookie("oxgame[1][0]",$_POST["P10"],time()+24*3600);
				if(isset($_POST["P11"]))
					setcookie("oxgame[1][1]",$_POST["P11"],time()+24*3600);
				if(isset($_POST["P12"]))
					setcookie("oxgame[1][2]",$_POST["P12"],time()+24*3600);

				if(isset($_POST["P20"]))
					setcookie("oxgame[2][0]",$_POST["P20"],time()+24*3600);
				if(isset($_POST["P21"]))
					setcookie("oxgame[2][1]",$_POST["P21"],time()+24*3600);
				if(isset($_POST["P22"]))
					setcookie("oxgame[2][2]",$_POST["P22"],time()+24*3600);
			}
		?>

		<table border="1">
			<tr>
				<td>
					<input type="radio" name="P00" value="O">O
					<input type="radio" name="P00" value="X">X
					<?php
						if($_COOKIE['oxgame'][0][0]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][0][0]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P01" value="O">O
					<input type="radio" name="P01" value="X">X
					<?php
						if($_COOKIE['oxgame'][0][1]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][0][1]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P02" value="O">O
					<input type="radio" name="P02" value="X">X
					<?php
						if($_COOKIE['oxgame'][0][2]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][0][2]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
			</tr>

			<tr>
				<td>
					<input type="radio" name="P10" value="O">O
					<input type="radio" name="P10" value="X">X
					<?php
						if($_COOKIE['oxgame'][1][0]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][1][0]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P11" value="O">O
					<input type="radio" name="P11" value="X">X
					<?php
						if($_COOKIE['oxgame'][1][1]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][1][1]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P12" value="O">O
					<input type="radio" name="P12" value="X">X
					<?php
						if($_COOKIE['oxgame'][1][2]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][1][2]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
			</tr>

			<tr>
				<td>
					<input type="radio" name="P20" value="O">O
					<input type="radio" name="P20" value="X">X
					<?php
						if($_COOKIE['oxgame'][2][0]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][2][0]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P21" value="O">O
					<input type="radio" name="P21" value="X">X
					<?php
						if($_COOKIE['oxgame'][2][1]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][2][1]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
				<td>
					<input type="radio" name="P22" value="O">O
					<input type="radio" name="P22" value="X">X
					<?php
						if($_COOKIE['oxgame'][2][2]=="-")
							echo "<br>	-------------";
						elseif ($_COOKIE['oxgame'][2][2]=="O") {
							echo "<br>	O";
						}
						else
							echo "<br>  X";
					?>
				</td>
			</tr>
		</table>
		<input type="submit" name="Submit">
		<input type="checkbox" name="resetcookie" value="on">Reset Cookie		
	</form>
	
	<?php
		if(isset($_POST['resetcookie']))
			if($_POST['resetcookie']=="on")
			{
				setcookie("oxgame[0][0]","-",time()+24*3600);
				setcookie("oxgame[0][1]","-",time()+24*3600);
				setcookie("oxgame[0][2]","-",time()+24*3600);
				setcookie("oxgame[1][0]","-",time()+24*3600);
				setcookie("oxgame[1][1]","-",time()+24*3600);
				setcookie("oxgame[1][2]","-",time()+24*3600);
				setcookie("oxgame[2][0]","-",time()+24*3600);
				setcookie("oxgame[2][1]","-",time()+24*3600);
				setcookie("oxgame[2][2]","-",time()+24*3600);
			}
	?>
</body>
</html>
