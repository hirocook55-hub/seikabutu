<!DOCTYPE html>
    <html lang ="ja">
  <head>
    <meta charset="UTF-8">
    <title>レイアウト完了画面</title> 
    <link rel="stylesheet" href="style.css"> 
    


  </head>
  <body>
  <div class="wrapper">
      <p>下記のようにレイアウトしました。</p>


    <table border="1" >
    <tr>
     <td>レイアウト</td>
</tr>
<tr>
  
  <td><?php print nl2br($_POST["message"])?></td>
  
</tr>
      </table>             
</body>
</html>