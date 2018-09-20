<?php

require_once './inc/db.php';
require_once './inc/common.php';

$created_at = date('Y-m-d H:i:s');  //CURRENT_TIMESTAMP
$sql =  "insert into posts(title,body,created_at) values('{$_POST['title']}', '{$_POST['body']}','{$created_at}' ) ;" ;
if (!mysqli_query($db,$sql)) {
  echo mysqli_error($db);
  echo '<br>' .  $sql;
}else{
  redirect_to("./");
};

?>