<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>横書き・一般テンプレート</title>
<link rel="stylesheet" href="style.css"> 
</head>
<body>
  <div class="wrapper">
    <!--見出し-->
  
  <p>原稿と、選択した希望のフォント名を確認してください</p>
  <p>＜br＞記号は改行の箇所で、次のページで反映されます。</p>

  <?php
   $course=implode(' ', $_POST['course']);
   $course=htmlspecialchars($course, ENT_QUOTES, 'UTF-8');
  ?>
<!--form-->
<form method = "POST" action="yokogaki_input2.php">
  <table border="1" width="800">
    <tr><原稿確認</tr>
    <tr> <?php print(htmlspecialchars($_POST["message"],ENT_QUOTES, 'UTF-8')) ?></tr>
</table>
<table  width="800"　 height ="12px">
    <tr>
            <td>適用フォント</td>
            <td><?php print($course); ?></td>
        </tr>
    
</table>
    <input type="submit" name="sub1" value="確認する">
    <!--ブラウザに表示させずに、レイアウト画面へ原稿を渡す-->
    <input type="hidden" name="message" value="<?php echo $_POST['message'];?> ">
    <input type="hidden" name="course" value="<?php echo $_POST['course'];?> ">


</form>
</div>
</body>
</html>  

    