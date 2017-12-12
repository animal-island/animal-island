<?php
  session_start();

  if (!isset($_POST['id'], $_POST['name'])) {
    $_SESSION['msg'] = "不正なアクセス";
    header('Location: ./registration.php');
    exit;
  }
  if (empty($_POST['id']) ||
  empty($_POST['name']) ||
  empty($_POST['ani_kind']) ||
  empty($_POST['sex']) ||
  empty($_POST['age']) ||
  empty($_POST['health'])) {
    $_SESSION['msg'] = "入力してください";
    header('Location: ./registration.php');
    exit;
  }


// if ($upfile['error'] > 0) {
//         throw new Exception('ファイルアップロードに失敗しました。');
// }

  $dsn = "mysql:host=localhost;dbname=gp41;charset=utf8";
  $dbuser = "root";
  $dbpass = "";


  try {
    // 接続
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    $sql = "INSERT INTO ani_data VALUES(:id, :name, :ani_kind, :url, :sex, :age, :health)";

    $preStmt = $pdo->prepare($sql);
    $preStmt->bindValue(":id", $_POST['id']);
    $preStmt->bindValue(":name", $_POST['name']);
    $preStmt->bindValue(":ani_kind", $_POST['ani_kind']);
    $preStmt->bindValue(":url", photo());
    $preStmt->bindValue(":sex", $_POST['sex']);
    $preStmt->bindValue(":age", $_POST['age']);
    $preStmt->bindValue(":health", $_POST['health']);

    // 実行
    $stmt = $preStmt->execute();

    $_SESSION['msg'] = "登録しました。";
    header('Location: ./registration.php');

  } catch (Exception $e) {
    echo $e->getMessage();
    $_SESSION['msg'] = "データベースエラー"+$e;
    header('Location: ./registration.php');
  }

function photo() {
  if (isset($_FILES['up']['error']) && is_int($_FILES['up']['error'])) {
    switch ($_FILES['up']['error']) {
      case UPLOAD_ERR_OK: // OK
      break;
      case UPLOAD_ERR_NO_FILE:   // ファイル未選択
        throw new RuntimeException('ファイルが選択されていません');
      case UPLOAD_ERR_INI_SIZE:  // php.ini定義の最大サイズ超過
      case UPLOAD_ERR_FORM_SIZE: // フォーム定義の最大サイズ超過
        throw new RuntimeException('ファイルサイズが大きすぎます');
      default:
        throw new RuntimeException('その他のエラーが発生しました');
    }
    // $_FILES['upfile']['mime']の値はブラウザ側で偽装可能なので、MIMEタイプを自前でチェックする
    $type = @exif_imagetype($_FILES['up']['tmp_name']);
    if (!in_array($type, [IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG], true)) {
      throw new RuntimeException('形式が未対応です');
    }

    // ファイルデータからSHA-1ハッシュを取ってファイル名を決定し、ファイルを保存する
    $filepath = sha1_file($_FILES['up']['tmp_name']) . image_type_to_extension($type);
    $path = sprintf('images/%s', $filepath);

    if (!move_uploaded_file($_FILES['up']['tmp_name'], $path)) {
      throw new RuntimeException('ファイル保存時にエラーが発生しました');
    }
    chmod($path, 0644);
    return $path;

  }else{
    throw new RuntimeException('エラー');
  }
}
?>
