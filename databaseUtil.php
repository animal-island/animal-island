<?php

// require_once './databaseUtil.php'
// $database = new DatabaseUtil();
// $database->animalList();

/**
 *
 */
class DatabaseUtil {
  private $dsn = "mysql:host=localhost;dbname=test;charset=utf8";
  private $dbuser = "root";
  private $dbpass = "";

  // トップページの動物情報
  function topAnimal() {

    $arrayList = array();
    try{
      // 接続
      $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

      $sql = "select * from ani_data";

      $preStmt = $pdo->prepare($sql);
      $preStmt->execute();
      $arrayList = $preStmt->fetchAll();
    }catch(Exception $e){
    	echo $e->getMessage();
    }

    foreach($preStmt as $row){
    	$array = array('id'=>$row["id"], 'name'=>$row["name"], 'url'=>"./".$row["url"]);
    	$arrayList = array_merge($arrayList, $array);
    }
    return $arrayList;
  }

  // 動物一覧
  function animalList() {
    $array = array();
    try {
      // 接続
      $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

      $sql = "SELECT * FROM ani_data ORDER BY id ASC";

      $stmt = $pdo->query($sql);

      while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $array[] = $row;
      }
      return $array;

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // 動物検索
  function animalSearch($q) {
    $array = array();
    try {
      // 接続
      $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

      $sql = "SELECT * FROM ani_data WHERE ani_kind LIKE '%". $q ."%' OR name LIKE '%". $q ."%'  ORDER BY id ASC";

      $stmt = $pdo->query($sql);

      while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $array[] = $row;
      }
      return $array;

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // クラウドファンでぃんぐ
  function crowdList() {
    $array = array();
    try {
      // 接続
      $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

      //$sql = "SELECT * FROM crowdfunding ORDER BY id ASC";
      $sql = "SELECT * FROM ani_data ORDER BY id ASC";

      $stmt = $pdo->query($sql);

      while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $array[] = $row;
      }
      return $array;

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  // クラウド詳細
  function crowdDetail($id){
    try {
      // 接続
      $pdo = new PDO($this->dsn, $this->dbuser, $this->dbpass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

      //$sql = "SELECT * FROM crowdfunding WHERE id =". $id;
      $sql = "SELECT * FROM ani_data ORDER BY id ASC";

      $stmt = $pdo->query($sql);

      while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
        $array[] = $row;
      }

    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

}
