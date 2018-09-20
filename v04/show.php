<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>show | 博客</title>
</head>
<body>
  <?php
    $db = mysqli_connect('localhost','demo','demo','phpdemo');
    if (mysqli_connect_errno($db)) {
      echo "连接 MySQL 失败: " . mysqli_connect_error();
      exit;
    }
    mysqli_query($db,"SET NAMES utf8");

    $id = $_GET['id'] ;
    $sql = 'select * from posts where id = ' . $id;
    $query = mysqli_query($db,$sql);
    $post = mysqli_fetch_object($query);
  ?>

  <h1><?php echo $post->id; ?> : <?php echo $post->title; ?>  </h1>
  <p><?php echo $post->body; ?></p>

</body>
</html>