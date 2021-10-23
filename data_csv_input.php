<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール（入力画面）</title>
</head>

<body>
  <form action="data_csv_create.php" method="POST">
    <fieldset>
      <legend>プロフィール（入力画面）</legend>
      <a href="data_csv_read.php">一覧画面</a>
      <div style="font-size: 30px;">
        名前: <input type="text" name="name">
      </div>
      <div style="font-size: 30px;">
        email: <input type="email" name="email" style="width: 290px;">
      </div>
      <div style="font-size: 30px;">
        あなたのニックネームは？: <input type="text" name="question">
      </div>
      <br>
      <div>
        <button style=" font-size: 30px;">送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>