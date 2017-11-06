<?php
/**
 * Created by PhpStorm.
 * User: enoti
 * Date: 2017/09/01
 * Time: 0:25
 */
//$_POST['save']="dfsgs";
require_once "custom.php";
require_once "cnDBplus.php";
//ここでは送信されたデータをもとにSQLにデータを挿入してきます。

if(isset($_POST['save'])){

    $_POST['save']=es($_POST['save']);
    $now = date("Y-m-d H:i:s");
    //データベースに書き込み
  try {
      $sql="UPDATE alter_memo SET text = :text ,
created_at= :ddd WHERE id=:id";
      $stm = getDB()->prepare($sql);
      $stm->bindParam(":id",$id);
      $stm->bindValue(':text',$_POST['save']);
      $stm->bindValue(':ddd',$now);
      $stm->execute();
      $stm=null;

  } catch (Exception $e) {
echo $e;
  }
}