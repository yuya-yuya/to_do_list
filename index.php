

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrap"></div>
  <div class="header"></div>
  <div class="content">
    <p>To Do List</p>
    
    <input type="text"></input>
    <button id="btn">追加</button><br>

    <div id="all_select">
      <div id="syukatu">
      <button id="syukatu_btn">就活</button><br>
      </div>
      <div id="kaji">
      <button id="kaji_btn">家事</button><br>
      </div>
    </div>

    <br>
    
    <!-- 就活 -->
    <table border="1" id="targetTable">
    <colgroup span="4" width="120" align="center">
      <thead>
        <tr>
          <th>タスク</th><th>実行日時</th><th>状態</th><th>通知希望日時</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
  <!-- 就活終了 -->

  <!-- 家事 -->
  <table border="1" id="targetTable">
  <colgroup span="4" width="120" align="center">
      <thead>
        <tr>
          <th>タスク</th><th>実行日時</th><th>状態</th><th>通知希望日時</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
  </table>
  <!-- 家事終了 -->
  
  <!-- フッダー -->
  <div class="footer"></div>
  
  <!-- javascript -->
  <script src="main.js"></script>
</body>
</html>



