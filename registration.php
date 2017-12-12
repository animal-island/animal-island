<?php
  session_start();
  if (!isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    $_SESSION['msg'] = null;
  }else{
      $SESSION['msg'] =null;
  }
?>
<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
    <title></title>
       
</head>
    <body>
        
<div id="container">  
  <div id="mainContents">  
      <!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの会員登録機能</title>
<link rel="stylesheet" href="style.css">

<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

<form method="post" enctype="multipart/form-data" action="confirm.php">
  <h1>動物情報登録</h1>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000024" />
  <div class="form-group">
    <input type="text" class="form-control" name="id" placeholder="id" required />
  </div>
  <div class="form-group">
    <input type="text"  class="form-control" name="name" placeholder="名前" required />
  </div>
   
    <div class="form-group">
    <input type="text" class="form-control" name="ani_kind" placeholder="種類" required />
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="sex" placeholder="性別" required />
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="age" placeholder="年齢" required />
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="health" placeholder="健康状態" required />
  </div>
     <div class="form-group">
    <input type="file" class="form-control" name="up" placeholder="画像選択" required />
  </div>
    
  <button type="submit" class="btn btn-default" name="signup">登録</button>
  <a href="island.php">topへ</a>
</form>

</div>
</body>
</html>
    