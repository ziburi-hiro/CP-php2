<?php
//エラー表示
ini_set("display_errors", 1);

//1. POSTデータ取得
$name = $_POST["name"];
$deadline = $_POST["deadline"];
$naiyo = $_POST["naiyo"];
$priority = $_POST["priority"];


//2. DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  //$pdo = new PDO('mysql:dbname=ziburihiro_cp_php2;charset=utf8;host=','','');
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBError:'.$e->getMessage());
}


//３．データ登録SQL作成
$sql = "INSERT INTO gs_an_table(name,deadline,naiyo,priority,indate)VALUES(:name,:deadline,:naiyo,:priority,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyo', $naiyo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':priority', $priority, PDO::PARAM_STR); 
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");
  exit();

}
?>
