<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
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

<header>
  <nav class="navbar navbar-default">LOGIN</nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid">
PW:<input type="password" name="lpw">
<input type="submit" value="ログイン">
</form>


</body>
</html>