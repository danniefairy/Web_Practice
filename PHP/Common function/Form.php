<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>


  <?php
    //echo "<br>測試選單!";
    /*<br> 不可在這裡打*/
  ?>
  測試選單!
  <br>
  <!--HTML可以打在外面-->

  <!--表單-->
  <form method="post" action="Post_Form.php">
    輸入姓名:
    <input type="text" name="name"/>
    <hr>
    輸入性別:
    <input type="radio" name="gender" value="男">男
    <input type="radio" name="gender" value="女">女
    <hr>
    選擇語言:
    <select name="choose[]" multiple="">
      <option value="C/C++">C/C++</option>
      <option value="PHP" selected="on">PHP</option> <!-- 預先選擇 -->
      <option value="PYTHON">PYTHON</option>
      <option value="JAVA">JAVA</option>
    </select>
    <hr>
    主機板本:
    <input type="checkbox" name="version[]" value="PS1">PS1<!-- multicheckbox 使用矩陣 -->
    <input type="checkbox" name="version[]" value="PS2">PS2
    <input type="checkbox" name="version[]" value="PS3">PS3
    <input type="checkbox" name="version[]" value="PS4">PS4
    <hr>
    想說的話:
    <textarea name="comment" rows="5" cols="20"></textarea>

    <input type="submit" name="output">
    <input type="reset" name="reset">
  </form>

</body>
</html>
