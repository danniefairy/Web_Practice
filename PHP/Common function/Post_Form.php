<!DOCTYPE html>
<html>
<head>
	<title>Post_Form</title>
</head>
<body>
	<table border="1" width="200">
		<tr>
			<td>
				姓名
			</td>
			<td>
			<?php 
				if($_POST['name']) 
					echo $_POST['name'];
				else
					echo 'No Name!'
			?>				
			</td>
		</tr>

		<tr>
			<td>
				性別
			</td>
			<td>
			<?php 
				if(isset($_POST['gender'])) 
					echo $_POST['gender'];
				else
					echo 'No Gender!'
			?>				
			</td>
		</tr>

		<tr>
			<td>
				語言
			</td>
			<td>
			<?php 
				if(isset($_POST['choose']))//輸入的選單為multiple時，輸入的值為陣列
					foreach ($_POST['choose'] as $key => $value) {
						echo $value.'<br>';
					}
				else
					echo 'No Language!'
			?>				
			</td>
		</tr>

		<tr>
			<td>
				版本
			</td>
			<td>
			<?php
				$version = array(0=>'PS1',1=>'PS2',2=>'PS3',3=>'PS4');
				if(isset($_POST['version']))//isset避免沒勾選時的問題
				{
					foreach ($version as $key => $value) {	
						if(isset($_POST['version'][$key]))				
							echo $_POST['version'][$key].'<br>';
					}
				}
				else
					echo 'No Version!';
			?>
			</td>
		</tr>

		<tr>
			<td>
				評論
			</td>
			<td>
			<?php
				if($_POST['comment'])
					echo $_POST['comment'];
				else
					echo 'No Comment';
			?>
			</td>
		</tr>

	</table>
</body>
</html>

