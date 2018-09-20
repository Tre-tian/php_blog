<?php

$db = mysqli_connect('localhost','demo','demo','phpdemo');
if (mysqli_connect_errno($db)) {
  echo "连接 MySQL 失败: " . mysqli_connect_error();
  exit;
}
mysqli_query($db,"SET NAMES utf8");

$id = $_POST['id'];
$sql = "update posts set title = '{$_POST['title']}', body = '{$_POST['body']}' where id = {$_POST['id']};" ;
if (!mysqli_query($db,$sql)) {
	echo mysqli_error($db);
	echo '<br>' .  $sql;
};


?>