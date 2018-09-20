<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>edit | 博客 </title>
</head>
<body>
	<?php
		$db = mysqli_connect('localhost','demo','demo','phpdemo');
		if (mysqli_connect_errno($db)) {
		  echo "连接 MySQL 失败: " . mysqli_connect_error();
		  exit;
		}
		mysqli_query($db,"SET NAMES utf8");

		$id = $_GET['id'];
		$query = mysqli_query($db,"select * from posts where id = {$id}");
		$post = mysqli_fetch_object($query);
	?>
	<h1>edit post:</h1>

	<form action="update.php" method="post">
		<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
		<label for="title">title</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" />
		<br/>
		<label for="body">body</label>
		<textarea name="body">
			<?php echo $post->body; ?>
		</textarea>
		<br/>
		<input type="submit" value="提交" />
	</form>
</body>
</html>