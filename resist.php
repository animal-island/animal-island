<?php// signupがPOSTされたときに下記を実行
if(isset($_POST['signup'])) {

  $username = $mysqli->real_escape_string($_POST['id']);
  $email = $mysqli->real_escape_string($_POST['email']);
  $password = $mysqli->real_escape_string($_POST['password']);
  $password = password_hash($password, PASSWORD_DEFAULT);

  // POSTされた情報をDBに格納する
  $query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";

  if($mysqli->query($query)) {  ?>
    <div class="alert alert-success" role="alert">登録しました</div>
    <?php } else { ?>
    <div class="alert alert-danger" role="alert">エラーが発生しました。</div>
    <?php
  }
}
?>