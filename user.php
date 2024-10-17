<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <style>
        body {
            background-image: url('img/img1.png'); /* 画像パスを指定 */
            background-size: cover; /* 画像を全体にフィットさせる */
            background-position: center center; /* 画像を中央に配置 */
            background-repeat: no-repeat; /* 画像を繰り返さない */
            height: 100vh; /* ビューポートの高さを100%に設定 */
            margin: 0; /* 余白をなくす */
        }
        .jumbotron {
            background-color: rgba(255, 255, 255, 0.8); /* 背景を少し透明にしてテキストを読みやすくする */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
 
</head>
<body>

<!-- Head[Start] -->
<header>
    <?php echo $_SESSION["name"]; ?>さん　
    <?php include("menu.php"); ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>データ登録</legend>
     <label>TITLE：<input type="text" name="title"></label><br>
     <label>Login ID：<input type="text" name="lid"></label><br>
     <label>Login PW<input type="text" name="lpw"></label><br>
     <label>管理FLG：
      一般<input type="radio" name="kanri_flg" value="0">　
      管理者<input type="radio" name="kanri_flg" value="1">
    </label>
    <br>
     <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
