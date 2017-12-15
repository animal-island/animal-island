<?php
  require_once 'databaseUtil.php';
  $database = new DatabaseUtil();
  $array = array();

  $array = $database->animalList();
  if (!empty($_POST['type'])) {
    $array = $database->animalSearch($_POST['type']);
  }
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
        <a href='result.php?id=<?php echo $array[$i]["id"] ?>' class='s'>
          <!-- ?id=cat -->
          <div class="centered"> <!-- centered or centered2 -->
            <div>
              <img alt="" src="<?php echo $array[$i]["url"] ?>">
            </div>
          </div>

          <div class="back-image"></div>
          <div class="text">
            <!-- <p><font>種類：</font><?php  echo $array[$i]["ani_kind"] ?></p> -->
            <!-- <p><font>名前：</font><?php  echo $array[$i]["name"] ?></p> -->
            <!-- <p><?php  echo $array[$i]["name"] ?></p> -->
            <p>たま</p>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </body>
</html>
