<!DOCTYPE html>
<html>
<head>
	<title>會員註冊</title>
</head>
<body>
	<!--
		傳送檔案一定要用post,且後面要加上enctype="multipart/form-data"
	-->
	<div align="center">
	<form method="post" action="addmember.php" enctype="multipart/form-data">
		<p>請輸入會員基本資料</p>
		<p>
		登入帳號:
			<input type="text" name="id" maxlength="20" size="20">
		<br>
		登入密碼:
			<input type="password" name="password" maxlength="20" size="20">
		<br>
		會員姓名:
			<input type="text" name="name" maxlength="20" size="20">
		<br>
		會員電話:
			<input type="text" name="tel" maxlength="20" size="20">
		<br>
		會員住址:
			<input type="text" name="address" maxlength="20" size="20">
		<br>
		會員照片:
			<input type="file" name="gif">
		<br>

		<input type="submit" value="新增">
		<input type="reset" value="重置">
	</form>
	<p><a href="index.php">回到登入畫面</a></p>
	</div>
</body>
</html>