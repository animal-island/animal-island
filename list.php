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
    <link rel="stylesheet" href="./css/list.css">
  </head>
  <body>
    <?php include_once './navi.html'; ?>

    <div id="container">
      <form class="search-form" action="./list.php" method="post">
        <input type="text" name="type" class="search-field" value="" placeholder="動物の種類・名前">
        <input type="submit" name="" class="search-button" value="検索">
      </form>

      <h2 class="list-title">どうぶついちらん</h2>
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
