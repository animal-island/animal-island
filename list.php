<?php
  $array = array();

  $sql = "SELECT * FROM ani_data ORDER BY id ASC";
  if (!empty($_POST['type'])) {
    $sql = "SELECT * FROM ani_data WHERE ani_kind LIKE '%". $_POST['type'] ."%' OR name LIKE '%". $_POST['type'] ."%'  ORDER BY id ASC";
  }

  $dsn = "mysql:host=localhost;dbname=test;charset=utf8";
  $dbuser = "root";
  $dbpass = "";

  try {
    // 接続
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    // $sql = "SELECT * FROM ani_data ORDER BY id ASC";

    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
      $array[] = $row;
    }

  } catch (Exception $e) {
    echo $e->getMessage();
  }

  $pdo = null;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>一覧</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <style media="screen">
      body {
        margin: 0px;
        padding: 0px;
      }
     @font-face {
        font-family: 'MyWebFont';
        src: url('./font/FriendsFu.woff') format('woff');
     }

      h2 {
        padding: 10px 0 5px 20px;
        margin: 0;
        text-align: left;
        font-size: 140%;
        font-weight: bold;
        font-family: 'MyWebFont';
      }
      hr {
        margin-top: 0px;
        margin-bottom: 20px;
      }

      a {
        text-decoration: none;
        color: #000;
      }
      font {
        color: gray;
      }

      #container {
        width: 610px;
        text-align: center;
        margin: 0 auto;
        background: transparent;
        padding: 0 30px;
      }

      form {
        margin: 15px 0;
      }

      .search-field {
        background: #ffffff url(https://cookpad.com/assets/global/icon_header_search.png) 7px 50% no-repeat;
        width: 210px;
        border-radius: 3px;
        font-size: 86%;
        padding: 6px 0 6px 27px;
        margin: 0 5px 0 0;
        box-shadow: inset 1px 1px 4px #e6e6e6;
        box-sizing: border-box;
        border: 1px solid #cccccc;
      }

      .search-button {
        font-size: 100%;
        background: linear-gradient(to bottom, #ffffff, #ececec);
        border-radius: 3px;
        height: 30px;
        border: 1px solid #cccccc;
        padding-top: 2px;
        padding-left: 10px;
        padding-right: 10px;
      }

      .detail {
        width: 190px;
        float: left;
        margin-right: 20px;
        margin-bottom: 20px;
      }
      .last {
        margin-right: 0;
      }

      .centered2 {
        float: left;
        background-color: rgba(0,0,0,0.1);;
        display: table;
        height: 150px;
        width: 190px;
        margin-right: 10px;
      }

      .centered2 > div {
        display: table-cell;
        vertical-align: middle;
      }

      .centered2 img {
        display: block;
        margin: 0 auto;
        max-height: 150px;
        max-width: 190px;
      }

      .centered{
        position: relative;
        width: 190px;/*　幅（100%以下で指定 or px）　*/
        padding-top: 150px;/*　高さ（100%以下で指定 or px）　*/
        overflow: hidden;
        margin: 0 auto;
      }
      .centered img{
      /* 画像を上下左右に中央配置する（絶対指定） */
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        /* 画像の最大サイズは枠の1.5倍まで */
        max-width: 150%;
        max-height: 150%;
      }

      .text {
        text-align: left;
        margin: 0;
        padding: 5px;
      }
      .text p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php include_once './navi.html'; ?>

    <div id="container">
      <form class="" action="./list.php" method="post">
        <input type="text" name="type" class="search-field" value="" placeholder="動物の種類・名前">
        <input type="submit" name="" class="search-button" value="検索">
        <a href="island.php">トップへ</a>
      </form>

      <h2>どうぶついちらん</h2>
      <hr>

      <?php
        for ($i=0; $i < count($array); $i++) {
          if ($i % 3 == 2) {
            echo "<div class='detail last'>";
          } else {
            echo "<div class='detail'>";
          }
          ?>
        <?php $id1 = $array[$i]["id"];
             echo"<a href='result.php?id=".$id1."' class='s'>"
            ?>
                <!-- ?id=cat -->
              <div class="centered"> <!-- centered or centered2 -->
                <div>
                  <img alt="" src="<?php echo $array[$i]["url"] ?>">
                </div>
              </div>
              <div class="text">
                <p><font>種類：</font><?php  echo $array[$i]["ani_kind"] ?></p>
                <p><font>名前：</font><?php  echo $array[$i]["name"] ?></p>
              </div>
            </a>
          </div>
          <?php
        }
      ?>
    </div>
  </body>
</html>



<!-- INSERT INTO `ani_data` (`id`, `name`, `ani_kind`, `url`, `sex`, `age`, `health`) VALUES
('cat', 'mike', 'neko', 'http://image.itmedia.co.jp/nl/articles/1601/16/nt_160116nekoshashin08.jpg', '雄', 7, '健康'); -->
